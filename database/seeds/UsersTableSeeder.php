<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Syarifah Putri Agustini Alkadri, S.T, M.Kom',
                'email'          => 'teacher@teacher.com',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'id'             => 3,
                'name'           => 'Asrul Abdullah, S.Kom, M.Cs',
                'email'          => 'teacher2@teacher2.com',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'id'             => 4,
                'name'           => 'Barry Ceasar Octariadi, S.Kom, M.Cs',
                'email'          => 'teacher3@teacher3.com',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'id'             => 5,
                'name'           => 'Ryan Permana, S.Kom, B.Sc',
                'email'          => 'teacher4@teacher4.com',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'id'             => 6,
                'name'           => 'Istikomah, B.Sc, M.I.T',
                'email'          => 'teacher5@teacher5.com',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
                'class_id'       => null,
            ],
            [
                'id'             => 7,
                'name'           => 'Student',
                'email'          => 'student@student.com',
                'password'       => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token' => null,
                'class_id'       => 1,
            ],
        ];

        User::insert($users);
    }
}
