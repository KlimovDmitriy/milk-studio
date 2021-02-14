<?php

use Arrilot\BitrixMigrations\BaseMigrations\BitrixMigration;
use Arrilot\BitrixMigrations\Exceptions\MigrationException;
use Bitrix\Highloadblock\HighloadBlockTable;

class AutoAddGroupAdmins20210214045626675823 extends BitrixMigration
{
    /**
     * Run the migration.
     *
     * @return mixed
     * @throws MigrationException
     */
    public function up()
    {
        $group = new CGroup;
        $fields = array (
  'ACTIVE' => 'Y',
  'C_SORT' => '100',
  'NAME' => 'Админы',
  'DESCRIPTION' => '',
  'STRING_ID' => 'admins',
  'SECURITY_POLICY' => 'a:0:{}',
  'USER_ID' => 
  array (
    0 => 
    array (
      'USER_ID' => 1,
      'DATE_ACTIVE_FROM' => '',
      'DATE_ACTIVE_TO' => '',
    ),
  ),
);

        $id = $group->add($fields);

        if ($group->LAST_ERROR) {
            throw new MigrationException('Ошибка при добавлении группы '.$group->LAST_ERROR);
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
        return false;
    }
}
