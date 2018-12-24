Tạo dữ liệu giả cho mục đích thử nghiệm
1. tạo Question factory:
=================================
php artisan make:factory QuestionFactory
=================================
Câu lệnh trên sẽ tạo file QuestionFactory.php trong thư mục factories
Chèn đoạn code sau vào QuestionFactory.php
=================================
$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(5,10)), "."),
        'body' => $faker->paragraphs(rand(3, 7), true),
        'views' =>rand(0, 10),
        'votes' =>rand(-3, 10),
        'answers' =>rand(0, 10)
    ];
});
=================================
chạy lệnh php artisan tinker
factory(App\User::class, 3)->create()
2. Chèn dòng mã sau vào databseSeeder.php
=================================
public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class, 3)->create()->each(function($user){
            $user->questions()
                    ->saveMany(
                        factory(App\Question::class, rand(1, 5))->make()
                    );
        });
        
    }
=================================
php artisan migrate:fresh --seed