<?php

namespace Sprint\Migration;


class MAY30_620240530174629 extends Version
{
    protected $description = "";

    protected $moduleVersion = "4.8.2";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();

        $iblockId = $helper->Iblock()->getIblockIdIfExists(
            'Static',
            'Static'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
)        );
    }

    public function down()
    {
        //your code ...
    }
}
