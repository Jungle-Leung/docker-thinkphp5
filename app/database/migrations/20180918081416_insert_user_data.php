<?php
use think\migration\Migrator;

class InsertUserData extends Migrator
{

    public $tablename = 'user';
    
    public function up()
    {
        $table = $this->table($this->tablename);
        $table->insert([
            [
                'username' => 'new user'
            ]
        ])->saveData();
    }
}
