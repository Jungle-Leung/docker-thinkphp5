<?php

use think\migration\Migrator;

class InsertUserData3 extends Migrator
{
    
    public $tablename = 'user';
    
    public function up()
    {
        $table = $this->table($this->tablename);
        $table->insert([
            [
                'username' => 'B'
            ]
        ])->saveData();
    }
    
}
