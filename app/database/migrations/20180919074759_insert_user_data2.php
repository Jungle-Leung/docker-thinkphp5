<?php
use think\migration\Migrator;

class InsertUserData2 extends Migrator
{

    public $tablename = 'user';

    public function up()
    {
        $table = $this->table($this->tablename);
        $table->insert([
            [
                'username' => 'A'
            ]
        ])->saveData();
    }
}
