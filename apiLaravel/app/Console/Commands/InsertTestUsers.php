<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class InsertTestUsers extends Command
{
    protected $signature = 'insert:test-users';
    protected $description = 'Insert test users into the users table';

    public function handle()
    {
        // Insert test users into the users table
        $usersData = [
            [
                'name' => 'john',
                'email' => 'john.doe@example.com',
                'password' => bcrypt('password'),
            ],
            // Add more users as needed
        ];

        foreach ($usersData as $userData) {
            User::create($userData);
        }

        $this->info('Test users inserted successfully!');
    }
}
