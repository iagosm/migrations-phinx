<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class AddColumnPassowordUsers extends AbstractMigration
{
  public function change(): void
  {
    $this->table('users')
      ->addColumn('password', 'string', ['after' => 'email'])
       ->save();
  }
}
