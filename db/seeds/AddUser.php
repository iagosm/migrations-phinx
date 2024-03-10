<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class AddUser extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $data = [
          [
            'name' => 'Cesar',
            'email' => 'cesar@celke.com.br',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s')],
          [
            'name' => 'Kelly',
            'email' => 'kelly@celke.com.br',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s')],
          [
            'name' => 'João Netto',
            'email' => 'josias@celke.com.br',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s'),
          ],
          [
            'name' => 'Matias Netto',
            'email' => 'matiasmt@celke.com.br',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s'),
          ],
        ];
        $users = $this->table('users');
        $users->insert($data)->save();
    }
}
