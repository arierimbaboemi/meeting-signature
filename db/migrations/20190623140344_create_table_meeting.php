<?php

use Phinx\Migration\AbstractMigration;

class CreateTableMeeting extends AbstractMigration
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
        $this->query('CREATE TABLE meeting (
                          meeting_id int(11) NOT NULL,
                          meeting_day varchar(32) DEFAULT NULL,
                          meeting_date varchar(32) DEFAULT NULL,
                          meeting_time varchar(64) DEFAULT NULL,
                          event varchar(128) DEFAULT NULL,
                          created datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
                        ) ENGINE=InnoDB DEFAULT CHARSET=utf8');

        $this->query('ALTER TABLE meeting ADD PRIMARY KEY (meeting_id)');

        // add primary key and auto increment
        $this->query('ALTER TABLE meeting CHANGE meeting_id meeting_id INT(11) NOT NULL AUTO_INCREMENT');
    }
}
