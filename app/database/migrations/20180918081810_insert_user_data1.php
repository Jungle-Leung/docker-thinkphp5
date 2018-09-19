<?php
use think\migration\Migrator;

class InsertUserData1 extends Migrator
{

    public $tablename = 'user';

    public function up()
    {
        $table = $this->table($this->tablename);
        $table->insert([
            [
                'username' => '再加一条'
            ]
        ])->saveData();
    }
}
