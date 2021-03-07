<?php

use Arrilot\BitrixMigrations\BaseMigrations\BitrixMigration;
use Arrilot\BitrixMigrations\Exceptions\MigrationException;

class AutoUpdateIblockElementPropertyArchiveInIb1720210307171155061495 extends BitrixMigration
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
  'ID' => 67,
  'NAME' => 'Архив заработка',
  'SORT' => 500,
  'CODE' => 'ARCHIVE',
  'MULTIPLE' => 'N',
  'IS_REQUIRED' => 'Y',
  'ACTIVE' => 'Y',
  'USER_TYPE' => 'HTML',
  'PROPERTY_TYPE' => 'S',
  'IBLOCK_ID' => 17,
  'FILE_TYPE' => '',
  'LIST_TYPE' => 'L',
  'ROW_COUNT' => 1,
  'COL_COUNT' => 30,
  'LINK_IBLOCK_ID' => 0,
  'DEFAULT_VALUE' => 
  array (
    'TYPE' => 'html',
    'TEXT' => '<table class="table table-bordered table-striped" id="archive-table">
                <thead class="thead-dark">
                <tr>
                    <th>
                        Период
                    </th>
                    <th>
                        Заработок
                    </th>
                    <th>
                        %
                    </th>
                </tr>
                </thead>
<tbody class="archive-body">
</tbody>
</table>',
  ),
  'USER_TYPE_SETTINGS' => 
  array (
    'height' => '200',
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
  'DISPLAY_TYPE' => 'F',
  'DISPLAY_EXPANDED' => 'N',
  'FILTER_HINT' => '',
  'FEATURES' => 
  array (
    'iblock:LIST_PAGE_SHOW' => 
    array (
      'ID' => '59',
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'LIST_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
    'iblock:DETAIL_PAGE_SHOW' => 
    array (
      'ID' => '60',
      'MODULE_ID' => 'iblock',
      'FEATURE_ID' => 'DETAIL_PAGE_SHOW',
      'IS_ENABLED' => 'N',
    ),
  ),
  'DEL' => 'N',
);

        $id = $this->getIblockPropIdByCode('ARCHIVE', 17);
        $fields['ID'] = $id;

        $ibp = new CIBlockProperty();
        $updated = $ibp->update($id, $fields);

        if (!$updated) {
            throw new MigrationException('Ошибка при изменении свойства инфоблока '.$ibp->LAST_ERROR);
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
