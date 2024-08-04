<?php

namespace Sprint\Migration;


class Version20240804193224 extends Version
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
            'Programm',
            'Static'
        );

        $helper->Iblock()->addSectionsFromTree(
            $iblockId,
            array (
  0 => 
  array (
    'NAME' => 'speedrun',
    'CODE' => 'speedrun',
    'SORT' => '500',
    'ACTIVE' => 'Y',
    'XML_ID' => NULL,
    'DESCRIPTION' => '',
    'DESCRIPTION_TYPE' => 'html',
  ),
)        );
    }

    public function down()
    {
        //your code ...
    }
}
