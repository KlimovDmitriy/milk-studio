<?php

use Arrilot\BitrixMigrations\BaseMigrations\BitrixMigration;
use Arrilot\BitrixMigrations\Exceptions\MigrationException;

class AutoAddIblockElementPropertyNotesToIb1720210114232907028883 extends BitrixMigration
{
    /**
     * Run the migration.
     *
     * @return mixed
     * @throws MigrationException
     */
    public function up()
    {
        $fields = array (
  'ID' => 0,
  'NAME' => 'Заметки о мемберах',
  'SORT' => 500,
  'CODE' => 'NOTES',
  'MULTIPLE' => 'N',
  'IS_REQUIRED' => 'N',
  'ACTIVE' => 'Y',
  'USER_TYPE' => 'HTML',
  'PROPERTY_TYPE' => 'S',
  'IBLOCK_ID' => 17,
  'FILE_TYPE' => '',
  'LIST_TYPE' => 'L',
  'ROW_COUNT' => 1,
  'COL_COUNT' => 30,
  'LINK_IBLOCK_ID' => 0,
  'DEFAULT_VALUE' => '',
  'USER_TYPE_SETTINGS' => 
  array (
  ),
  'WITH_DESCRIPTION' => 'N',
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'N',
  'MULTIPLE_CNT' => 5,
  'HINT' => '',
  'VALUES' => 
  array (
  ),
  'SECTION_PROPERTY' => 'Y',
  'SMART_FILTER' => 'N',
  'DISPLAY_TYPE' => '',
  'DISPLAY_EXPANDED' => 'N',
  'FILTER_HINT' => '',
  'FEATURES' => 
  array (
  ),
);

        $ibp = new CIBlockProperty();
        $propId = $ibp->add($fields);

        if (!$propId) {
            throw new MigrationException('Ошибка при добавлении свойства инфоблока '.$ibp->LAST_ERROR);
        }
    }

    /**
     * Reverse the migration.
     *
     * @return mixed
     * @throws MigrationException
     */
    public function down()
    {
        $id = $this->getIblockPropIdByCode('NOTES', 17);

        $ibp = new CIBlockProperty();
        $deleted = $ibp->delete($id);

        if (!$deleted) {
            throw new MigrationException('Ошибка при удалении свойства инфоблока '.$ibp->LAST_ERROR);
        }
    }
}
