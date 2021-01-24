<?php

use Arrilot\BitrixMigrations\BaseMigrations\BitrixMigration;
use Arrilot\BitrixMigrations\Exceptions\MigrationException;

class AutoAddUfUfModelToEntityHlblock720210124150958137864 extends BitrixMigration
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
  'ENTITY_ID' => 'HLBLOCK_7',
  'FIELD_NAME' => 'UF_MODEL',
  'USER_TYPE_ID' => 'iblock_element',
  'XML_ID' => '',
  'SORT' => '100',
  'MULTIPLE' => 'N',
  'MANDATORY' => 'N',
  'SHOW_FILTER' => 'N',
  'SHOW_IN_LIST' => 'Y',
  'EDIT_IN_LIST' => 'Y',
  'IS_SEARCHABLE' => 'N',
  'SETTINGS' => 'a:5:{s:7:"DISPLAY";s:4:"LIST";s:11:"LIST_HEIGHT";i:5;s:9:"IBLOCK_ID";i:17;s:13:"DEFAULT_VALUE";s:0:"";s:13:"ACTIVE_FILTER";s:1:"N";}',
  'EDIT_FORM_LABEL' => 
  array (
    'ru' => 'Модель',
    'en' => 'Model',
  ),
  'LIST_COLUMN_LABEL' => 
  array (
    'ru' => '',
    'en' => '',
  ),
  'LIST_FILTER_LABEL' => 
  array (
    'ru' => '',
    'en' => '',
  ),
  'ERROR_MESSAGE' => 
  array (
    'ru' => '',
    'en' => '',
  ),
  'HELP_MESSAGE' => 
  array (
    'ru' => '',
    'en' => '',
  ),
);

        $this->addUF($fields);
    }

    /**
     * Reverse the migration.
     *
     * @return mixed
     * @throws MigrationException
     */
    public function down()
    {
        $id = $this->getUFIdByCode('HLBLOCK_7', 'UF_MODEL');
        if (!$id) {
            throw new MigrationException('Не найдено пользовательское свойство для удаления');
        }

        (new CUserTypeEntity())->delete($id);
    }
}
