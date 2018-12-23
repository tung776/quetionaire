1. tạo model Question đồng thời tạo migration tương ứng bằng cách chạy câu lệnh sau
=======================
php artisan make:model Question -m
=======================
Câu lệnh trên sẽ đồng thời tạo Question.php trong thư mục app và create_questions_table.php trong thư mục migration
2. Chèn đoạn mã sau vào _create_questions_table.php
===========================
Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');
            $table->unsignedInteger('view')->default(0);//đếm số lượng người đã xem
            $table->unsignedInteger('answers')->default(0);// đếm số lần trả lời
            $table->integer('votes')->default(0);
            $table->unsignedInteger('best_answer_id')->nullable();
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
=================================
3. Chạy lệnh: php artisan migrate