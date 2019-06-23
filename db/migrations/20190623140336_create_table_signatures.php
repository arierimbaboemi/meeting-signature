<?php

use Phinx\Migration\AbstractMigration;

class CreateTableSignatures extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $this->query('CREATE TABLE signatures (
                                  signature_id int(11) NOT NULL,
                                  meeting_id int(11) NOT NULL,
                                  pic_name varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
                                  relation varchar(128) DEFAULT NULL,
                                  signatures text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
                                  created datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
                                ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT');

        $this->query('ALTER TABLE signatures ADD PRIMARY KEY (signature_id)');

        // add primary key and auto increment
        $this->query('ALTER TABLE signatures CHANGE signature_id signature_id INT(11) NOT NULL AUTO_INCREMENT');
    }
}
