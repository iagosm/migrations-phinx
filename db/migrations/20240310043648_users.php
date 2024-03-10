<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class Users extends AbstractMigration
{
    // https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
    
    public function change(): void
    {
        $table = $this->table('users');
        $table->addColumn('name', 'string')
            ->addColumn('email', 'string')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
        
            
    }
}
