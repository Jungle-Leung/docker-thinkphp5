<?php

use think\migration\Migrator;

class CreateUserTable extends Migrator
{
    
    public $tablename = 'user';
    
    public function up()
    {
        $table = $this->table($this->tablename);
        $table->addColumn('username' , 'string' , ['limit' => 30])
        ->addColumn('status' , 'integer' , ['limit' => 1 , 'default' => 1])
        ->setId('user_id')
        ->save();
        
        $table->insert([
            [
                'username' => 'Tony'
            ],
            [
                'username' => 'Andy'
            ]
        ])->saveData();
        
    }
    
    public function down()
    {
        $this->dropTable($this->tablename);
    }
    
}
