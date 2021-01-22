<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        DB::table('users')->insert([
            'name' => 'Александр',
            'surname'=>'Васильев',
            'email'=>'aleksandr_sasha_vasilev@inbox.ru',
            'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
            'image'=>"123.jpg",
            'status'=>1,
            'role'=>'admin'
        ]);

        /*DB::table('users')->insert([
            'name' => 'Ирина',
            'surname'=>'Еловская',
            'email'=>'elovskaya@mail.ru',
            'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
            'image'=>123,
            'status'=>1,
            'role'=>'teacher'
        ]);

        DB::table('users')->insert([
            'name' => 'Виталий',
            'surname'=>'Луков',
            'email'=>'lukov@mail.ru',
            'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
            'image'=>"123.jpg",
            'status'=>1,
            'role'=>'student'
        ]);

        DB::table('students')->insert([
            'email'=>'lukov@mail.ru',
            'course'=>2,
            'group'=>'Б8119',
            'fio'=>'afsafaefd'
        ]);

        DB::table('admins')->insert([
            'email'=>'aleksandr_sasha_vasilev@inbox.ru'
        ]);

        DB::table('teachers')->insert([
            'fio'=>'Еловская 123 123',
            'email'=>'elovskaya@mail.ru'
        ]);

        DB::table('groups')->insert([
            'name'=>'Б8119'
        ]);


        DB::table('users')->insert([
            'name' => 'Артур',
            'surname'=>'Ким',
            'email'=>'kim@mail.ru',
            'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
            'image'=>"123.jpg",
            'status'=>1,
            'role'=>'teacher'
        ]);
        DB::table('teachers')->insert([
            'fio'=>'Kim kimich',
            'email'=>'kim@mail.ru'
        ]);

        DB::table('users')->insert([
            'name' => 'Пиписькин',
            'surname'=>'Кирилл',
            'email'=>'idrisov@mail.ru',
            'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
            'image'=>"123.jpg",
            'status'=>1,
            'role'=>'teacher'
        ]);
        DB::table('teachers')->insert([
            'email'=>'idrisov@mail.ru',
            'fio'=>'pipiskin'
        ]);

        DB::table('users')->insert([
            'name' => 'Валера',
            'surname'=>'Гаврильев',
            'email'=>'gavr@mail.ru',
            'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
            'image'=>"123.jpg",
            'status'=>0,
            'role'=>'student'
        ]);
        DB::table('students')->insert([
            'email'=>'gavr@mail.ru',
            'course'=>2,
            'group'=>'Б8119',
            'fio'=>'Гаврильев Валерий '
        ]);
        DB::table('users')->insert([
            'name' => 'Антипыч',
            'surname'=>'Антип',
            'email'=>'antip@mail.ru',
            'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
            'image'=>"123.jpg",
            'status'=>0,
            'role'=>'teacher'
        ]);
        DB::table('teachers')->insert([
            'email'=>'antip@mail.ru',
            'fio'=>'Антипыч Антипыч Антипыч'
        ]);
        DB::table('users')->insert([
            'name' => 'Гриша',
            'surname'=>'Юрчук',
            'email'=>'grig@mail.ru',
            'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
            'image'=>"123.jpg",
            'status'=>0,
            'role'=>'student'
        ]);
        DB::table('students')->insert([
            'email'=>'grig@mail.ru',
            'course'=>2,
            'group'=>'Б8119',
            'fio'=>'afsafaefd'
        ]);*/




    }
}
