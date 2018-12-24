# Step 4
1. Tạo route:
Route::resource('questions', 'QuestionController');
2. Tạo QuestionController: bằng cú pháp php artisan make:controller QuestionController --resource --model=Question
3. Chèn đoạn mã sau vào QuestionController:
==========================================================
public function index()
    {
        $questions = Question::latest()->paginate(5);
        return view('question.index', compact('questions'));
    }
==========================================================
4. Thêm index.blade.php trong resources/views/question:
==========================================================
```
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Questions</div>

                <div class="card-body">
                    @foreach ($questions as $question)
                        <div class="media">
                            <div class="media-body">
                                <h3 class="mt-0">{{ $question->title }}</h3>
                                {{ str_limit($question->body, 250) }}
                            </div>
                        </div>
                        <hr>
                    @endforeach
                    <div class="mx-auto">
                        {{ $questions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
```
===================================================================
5. gõ lệnh sau
php artisan vendor:publish --tag=laravel-pagination
Câu lệnh trên sẽ tạo resources/views/vendor
6. Sửa file bootstrap-4.blade.php:
<ul class="pagination" role="navigation">
chuyển thành
<ul class="pagination justify-content-center" role="navigation">