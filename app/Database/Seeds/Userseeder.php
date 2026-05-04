<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'email' => 'admin@layanan.com',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'role' => 'admin'
            ],
            [
                'username' => 'staff',
                'email' => 'staff@layanan.com',
                'password' => password_hash('staff123', PASSWORD_DEFAULT),
                'role' => 'staff'
            ],
            [
                'username' => 'customer01',
                'email' => 'customer@gmail.com',
                'password' => password_hash('user123', PASSWORD_DEFAULT),
                'role' => 'pelanggan'
            ]
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
