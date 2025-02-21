function migrationMigrationsUpConfirm() {
    if (confirm('Confirm install migrations')) {
        migrationExecuteStep('migration_execute', {
            'next_action': 'up'
        });
    }
}

function migrationMigrationsDownConfirm() {
    if (confirm('Confirm rollback migrations')) {
        migrationExecuteStep('migration_execute', {
            'next_action': 'down'
        });
    }
}

function migrationMigrationsDeleteUnknownConfirm() {
    if (confirm('Confirm delete unknown migrations')) {
        migrationExecuteStep('migration_mark', {
            'version': 'unknown',
            'status': 'new',
        });
    }
}

function migrationMigrationsUpWithTag() {
    var settag = prompt('Set migrations tag');
    if (settag !== null) {
        migrationExecuteStep('migration_execute', {
            'next_action': 'up',
            'settag': settag
        });
    }
}

function migrationMigrationUp(version) {
    migrationExecuteStep('migration_execute', {
        'version': version,
        'action': 'up'
    });
}

function migrationMigrationDown(version) {
    migrationExecuteStep('migration_execute', {
        'version': version,
        'action': 'down'
    });
}

function migrationMigrationSetTag(version, defaultTag) {
    var settag = prompt('Set migration tag', defaultTag);
    if (settag !== null) {
        migrationExecuteStep('migration_settag', {
            'version': version,
            'settag': settag
        });
    }
}

function migrationMigrationMark(version, status) {
    migrationExecuteStep('migration_mark', {
        'version': version,
        'status': status,
    });
}

function migrationMigrationTransfer(version, transferTo) {
    migrationExecuteStep('migration_transfer', {
        'version': version,
        'transfer_to': transferTo,
    });
}

function migrationMigrationDelete(version) {
    migrationExecuteStep('migration_delete', {
        'version': version,
    });
}

function migrationOutLog(result) {
    var $el = jQuery('#migration_progress');
    var lastOutElem = $el.children('div').last();
    if (lastOutElem.hasClass('sp-progress') && jQuery(result).first().hasClass('sp-progress')) {
        lastOutElem.replaceWith(result);
    } else {
        $el.append(result);
        $el.scrollTop($el.prop("scrollHeight"));
    }
}

function migrationExecuteStep(step_code, postData, succesCallback) {
    postData = postData || {};
    postData['step_code'] = step_code;
    postData['send_sessid'] = jQuery('#migration_container').data('sessid');
    postData['search'] = jQuery('input[name=migration_search]').val();
    postData['filter'] = jQuery('select[name=migration_filter]').val();

    migrationEnableButtons(0);

    jQuery.ajax({
        type: "POST",
        dataType: "html",
        data: postData,
        success: function (result) {
            if (succesCallback) {
                succesCallback(result)
            } else {
                migrationOutLog(result);
            }
        },
        error: function (result) {

        }
    });
}

function migrationEnableButtons(enable) {
    var buttons = jQuery('#migration_container').find('input,select,.adm-btn');
    if (enable) {
        buttons.removeAttr('disabled').removeClass('sp-disabled');
    } else {
        buttons.attr('disabled', 'disabled').addClass('sp-disabled');
    }
}

function migrationListRefresh(callbackAfterRefresh) {
    jQuery('#migration_actions').empty();
    migrationExecuteStep(
        jQuery('select[name=migration_filter]').val(),
        {},
        function (data) {
            jQuery('#migration_migrations').empty().html(data);
            if (callbackAfterRefresh) {
                callbackAfterRefresh()
            } else {
                migrationEnableButtons(1);
            }
        });
}

function migrationBuilder(postData, formAttrs) {
    migrationExecuteStep('migration_create', postData, function (result) {
        migrationBuilderRender(result, formAttrs)
    });
}

function migrationReset(postData) {
    migrationExecuteStep('migration_reset', postData, function (result) {
        migrationBuilderRender(result, {})
    });
}

function migrationListScroll() {
    var $el = jQuery('#migration_migrations');
    $el.scrollTop($el.prop("scrollHeight"));
}

function migrationBuilderRender(html, formAttrs) {
    jQuery('#migration_builder').html(html);

    jQuery.each(formAttrs, function (name, value) {
        let $el = jQuery('#migration_builder').find('[data-attrs=' + name + ']');
        if ($el.length > 0) {
            $el.val(value).trigger('input');
        }
    });
}

jQuery(document).ready(function ($) {

    $.fn.serializeFormJSON = function () {
        let o = {};
        let a = this.serializeArray();
        $.each(a, function () {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };
    $.fn.serializeFormAttrs = function () {
        let o = {};
        $(this).find('[data-attrs]').each(function () {
            let name = $(this).data('attrs');
            let val = $(this).val();
            if (val) {
                o[name] = val;
            }
        });
        return o;
    };

    (function () {
        $('.sp-builder_title').removeClass('sp-active');
        if (localStorage) {
            let builderName = localStorage.getItem('migrations_open_builder');
            $('[data-builder="' + builderName + '"]').addClass('sp-active');
            migrationReset({builder_name: builderName});
        }
    })($);

    migrationListRefresh(function () {
        migrationEnableButtons(1);
        migrationListScroll();
    });

    $('#migration_container').on('change', 'select[name=migration_filter]', function () {
        migrationListRefresh(function () {
            migrationEnableButtons(1);
            migrationListScroll();
            $('#tab_cont_tab1').click();
        });
    });

    $('#migration_container').on('keypress', 'input[name=migration_search]', function (e) {
        if (e.keyCode === 13) {
            migrationListRefresh(function () {
                migrationEnableButtons(1);
                migrationListScroll();
                $('#tab_cont_tab1').click();
            });
        }
    });

    $('#migration_container').on('click', '.sp-search', function () {
        migrationListRefresh(function () {
            migrationEnableButtons(1);
            migrationListScroll();
            jQuery('#tab_cont_tab1').click();
        });
    });

    $('#migration_builder').on('click', '.sp-optgroup-check', function (e) {
        e.preventDefault();
        var checkboxes = $(this).closest('.sp-optgroup').find('[type=checkbox]').not(':hidden');
        checkboxes.prop("checked", !checkboxes.prop("checked"));
    });

    $('#migration_builder').on('input', '.sp-optgroup-search', function (e) {
        e.preventDefault();
        let text = $(this).val();

        $(this).closest('.sp-optgroup').find('.sp-optgroup-group').each(function () {
            let all = 0;
            let hide = 0;

            $(this).find('label').each(function () {
                all++;
                if ($(this).text().includes(text)) {
                    $(this).show()
                } else {
                    hide++;
                    $(this).hide()
                }
            });

            if (hide > 0 && all === hide) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
    });

    $('#migration_builder').on('submit', 'form', function (e) {
        e.preventDefault();
        let postData = $(this).serializeFormJSON();
        let formAttrs = $(this).serializeFormAttrs();
        migrationBuilder(postData, formAttrs);
    });

    $('#migration_builder').on('reset', 'form', function (e) {
        e.preventDefault();
        let postData = $(this).serializeFormJSON();
        migrationReset(postData);
    });

    $('#migration_container').on('click', '.sp-builder_title', function () {

        var builderName = $(this).data('builder');

        $('.sp-builder_title').not(this).removeClass('sp-active');

        $(this).addClass('sp-active');

        if (localStorage) {
            localStorage.setItem('migrations_open_builder', builderName);
        }
        migrationReset({builder_name: builderName});
    });


});
