<?php

use Illuminate\Database\Seeder;

class AddUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->insert([
            'name' => 'Генрих',
            'surname'=>'Трубецкой',
            'email'=>'sacraver@gmail.com',
            'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
            'image'=>123,
            'status'=>1,
            'role'=>'student'
        ]);

        DB::table('users')->insert([
            'name' => 'Маркелл',
            'surname'=>'Милорадович',
            'email'=>' miyop@comcast.net',
            'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
            'image'=>123,
            'status'=>1,
            'role'=>'student'
        ]);

        DB::table('users')->insert([
            'name' => 'Изяслав',
            'surname'=>'Столыпин',
            'email'=>'dieman@att.net',
            'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
            'image'=>123,
            'status'=>1,
            'role'=>'student'
        ]);


DB::table('users')->insert([
    'name' => 'Феодор',
    'surname'=>'Ловенецкий',
    'email'=>'keiji@comcast.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Фавст',
    'surname'=>'Аверченко',
    'email'=>'sarahs@outlook.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Марьян',
    'surname'=>'Путилов',
    'email'=>'teverett@yahoo.ca',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Олимпиодор',
    'surname'=>'Мезенцов',
    'email'=>'dkeeler@live.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Фрол',
    'surname'=>'Голенищев',
    'email'=>'loscar@yahoo.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Иакинф',
    'surname'=>'Уваров',
    'email'=>'djpig@outlook.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Виссарион',
    'surname'=>'Ащерин',
    'email'=>'malin@aol.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Аггей',
    'surname'=>'Кругликов',
    'email'=>'mwitte@outlook.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Севир',
    'surname'=>'Ершов',
    'email'=>'konit@hotmail.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Олимпиодор',
    'surname'=>'Вожжинский',
    'email'=>'brbarret@me.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Гиацинт',
    'surname'=>'Алисов',
    'email'=>'msroth@me.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Елизар',
    'surname'=>'Шмаков',
    'email'=>'naoya@me.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Гиацинт',
    'surname'=>'Мурзич',
    'email'=>'policies@msn.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Марин',
    'surname'=>'Опочинин',
    'email'=>'josem@sbcglobal.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Пимен',
    'surname'=>'Глинка',
    'email'=>'rkobes@mac.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Мефодий',
    'surname'=>'Лубенский',
    'email'=>'milton@hotmail.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Еразм',
    'surname'=>'Лесков',
    'email'=>'mthurn@verizon.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Эразм',
    'surname'=>'Соймонов',
    'email'=>'joelw@gmail.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Николай',
    'surname'=>'Франк',
    'email'=>'nighthawk@sbcglobal.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Федот',
    'surname'=>'Клементьев',
    'email'=>'subir@verizon.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Михей',
    'surname'=>'Донец',
    'email'=>'twoflower@att.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Венедикт',
    'surname'=>'Кретов',
    'email'=>'starstuff@sbcglobal.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Маркиан',
    'surname'=>'Бобров',
    'email'=>'mavilar@mac.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Альфред',
    'surname'=>'Барыков',
    'email'=>'alhajj@outlook.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Иеремия',
    'surname'=>'Варыпаев',
    'email'=>'quantaman@me.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Никодим',
    'surname'=>'Устименко',
    'email'=>'dgriffith@verizon.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Ианикит',
    'surname'=>'Водынский',
    'email'=>'janneh@me.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Аполлоний',
    'surname'=>'Гвоздев',
    'email'=>'dawnsong@mac.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Серапион',
    'surname'=>'Салтыков',
    'email'=>'burns@gmail.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Юстин',
    'surname'=>'Гриневецкий',
    'email'=>'marin@icloud.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Иона',
    'surname'=>'Ветчинин',
    'email'=>'chunzi@hotmail.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Наркисс',
    'surname'=>'Горский',
    'email'=>'skoch@att.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Денис',
    'surname'=>'Злоба',
    'email'=>'khris@optonline.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Флегонт',
    'surname'=>'Михнев',
    'email'=>'delpino@att.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Соломон',
    'surname'=>'Ляпишев',
    'email'=>'jamuir@verizon.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Парамон',
    'surname'=>'Симолин',
    'email'=>'samavati@gmail.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Остафий',
    'surname'=>'Бирдюкин',
    'email'=>'ubergeeb@optonline.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Владислав',
    'surname'=>'Вельяминов',
    'email'=>'gbacon@att.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Аркадий',
    'surname'=>'Волчков',
    'email'=>'dkeeler@optonline.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Андрей',
    'surname'=>'Обухов',
    'email'=>'drjlaw@me.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Иван',
    'surname'=>'Архипов',
    'email'=>'caronni@mac.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Абакум',
    'surname'=>'Полторацкий',
    'email'=>'hoyer@outlook.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Ярополк',
    'surname'=>'Мозырин',
    'email'=>'cderoove@live.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Ян',
    'surname'=>'Ратманов',
    'email'=>'stinson@verizon.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Андроник',
    'surname'=>'Малиновский',
    'email'=>'sscorpio@gmail.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Кирик',
    'surname'=>'Плохово',
    'email'=>'eminence@sbcglobal.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Владлен',
    'surname'=>'Гаврилов',
    'email'=>'crusader@outlook.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Генрих',
    'surname'=>'Трубецкой',
    'email'=>'sacraver@gmail.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Маркелл',
    'surname'=>'Милорадович',
    'email'=>' miyop@comcast.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Изяслав',
    'surname'=>'Столыпин',
    'email'=>'dieman@att.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);


DB::table('users')->insert([
    'name' => 'Феодор',
    'surname'=>'Ловенецкий',
    'email'=>'keiji@comcast.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Фавст',
    'surname'=>'Аверченко',
    'email'=>'sarahs@outlook.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Марьян',
    'surname'=>'Путилов',
    'email'=>'teverett@yahoo.ca',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Олимпиодор',
    'surname'=>'Мезенцов',
    'email'=>'dkeeler@live.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Фрол',
    'surname'=>'Голенищев',
    'email'=>'loscar@yahoo.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Иакинф',
    'surname'=>'Уваров',
    'email'=>'djpig@outlook.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Виссарион',
    'surname'=>'Ащерин',
    'email'=>'malin@aol.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Аггей',
    'surname'=>'Кругликов',
    'email'=>'mwitte@outlook.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Севир',
    'surname'=>'Ершов',
    'email'=>'konit@hotmail.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Олимпиодор',
    'surname'=>'Вожжинский',
    'email'=>'brbarret@me.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Гиацинт',
    'surname'=>'Алисов',
    'email'=>'msroth@me.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Елизар',
    'surname'=>'Шмаков',
    'email'=>'naoya@me.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Гиацинт',
    'surname'=>'Мурзич',
    'email'=>'policies@msn.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Марин',
    'surname'=>'Опочинин',
    'email'=>'josem@sbcglobal.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Пимен',
    'surname'=>'Глинка',
    'email'=>'rkobes@mac.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Мефодий',
    'surname'=>'Лубенский',
    'email'=>'milton@hotmail.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Еразм',
    'surname'=>'Лесков',
    'email'=>'mthurn@verizon.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Эразм',
    'surname'=>'Соймонов',
    'email'=>'joelw@gmail.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Николай',
    'surname'=>'Франк',
    'email'=>'nighthawk@sbcglobal.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Федот',
    'surname'=>'Клементьев',
    'email'=>'subir@verizon.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Михей',
    'surname'=>'Донец',
    'email'=>'twoflower@att.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Венедикт',
    'surname'=>'Кретов',
    'email'=>'starstuff@sbcglobal.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Маркиан',
    'surname'=>'Бобров',
    'email'=>'mavilar@mac.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Альфред',
    'surname'=>'Барыков',
    'email'=>'alhajj@outlook.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Иеремия',
    'surname'=>'Варыпаев',
    'email'=>'quantaman@me.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Никодим',
    'surname'=>'Устименко',
    'email'=>'dgriffith@verizon.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Ианикит',
    'surname'=>'Водынский',
    'email'=>'janneh@me.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Аполлоний',
    'surname'=>'Гвоздев',
    'email'=>'dawnsong@mac.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Серапион',
    'surname'=>'Салтыков',
    'email'=>'burns@gmail.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Юстин',
    'surname'=>'Гриневецкий',
    'email'=>'marin@icloud.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Иона',
    'surname'=>'Ветчинин',
    'email'=>'chunzi@hotmail.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Наркисс',
    'surname'=>'Горский',
    'email'=>'skoch@att.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Денис',
    'surname'=>'Злоба',
    'email'=>'khris@optonline.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Флегонт',
    'surname'=>'Михнев',
    'email'=>'delpino@att.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Соломон',
    'surname'=>'Ляпишев',
    'email'=>'jamuir@verizon.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Парамон',
    'surname'=>'Симолин',
    'email'=>'samavati@gmail.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Остафий',
    'surname'=>'Бирдюкин',
    'email'=>'ubergeeb@optonline.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Владислав',
    'surname'=>'Вельяминов',
    'email'=>'gbacon@att.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Аркадий',
    'surname'=>'Волчков',
    'email'=>'dkeeler@optonline.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Андрей',
    'surname'=>'Обухов',
    'email'=>'drjlaw@me.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Иван',
    'surname'=>'Архипов',
    'email'=>'caronni@mac.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Абакум',
    'surname'=>'Полторацкий',
    'email'=>'hoyer@outlook.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Ярополк',
    'surname'=>'Мозырин',
    'email'=>'cderoove@live.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Ян',
    'surname'=>'Ратманов',
    'email'=>'stinson@verizon.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Андроник',
    'surname'=>'Малиновский',
    'email'=>'sscorpio@gmail.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Кирик',
    'surname'=>'Плохово',
    'email'=>'eminence@sbcglobal.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Владлен',
    'surname'=>'Гаврилов',
    'email'=>'crusader@outlook.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Генрих',
    'surname'=>'Трубецкой',
    'email'=>'sacraver@gmail.com',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Маркелл',
    'surname'=>'Милорадович',
    'email'=>' miyop@comcast.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);

DB::table('users')->insert([
    'name' => 'Изяслав',
    'surname'=>'Столыпин',
    'email'=>'dieman@att.net',
    'password'=>'$2y$10$J88LR76V3zd959hW4/GGOu68dGGUbjP0gCA5RRyQ0q4HxQ4SfsNpm',
    'image'=>123,
    'status'=>1,
    'role'=>'student'
]);




    }
}
