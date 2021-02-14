<?php

use Arrilot\BitrixMigrations\BaseMigrations\BitrixMigration;
use Arrilot\BitrixMigrations\Exceptions\MigrationException;

class AutoDeleteIblockElementPropertyLoginsInIb1720210214044642215710 extends BitrixMigration
{
    /**
     * Run the migration.
     *
     * @return mixed
     * @throws MigrationException
     */
    public function up()
    {
        $id = $this->getIblockPropIdByCode('LOGINS', 17);

        $ibp = new CIBlockProperty();
        $deleted = $ibp->delete($id);

        if (!$deleted) {
            throw new MigrationException('Ошибка при удалении свойства инфоблока '.$ibp->LAST_ERROR);
        }
    }

    /**
     * Reverse the migration.
     *
     * @return mixed
     */
    public function down()
    {
        return false;
    }
}
