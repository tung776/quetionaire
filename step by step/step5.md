1. tạo custom attribute trong Question model
public function getUrlAttribute() {
    return route('questions.show', $this->id);
}

public function getCreatedDateFormatedAttribute(){
    return $this->create_at->format('d/m/y);
}
sau khi tạo custom attribute thì thuộc tính này có thể tuy xuất bình thường như các thuộc tính khác VD:
{{ $question->url>}}
hoăc
{{ $question->created_date_formated }}

2. Cài debugbar:
composer require barryvdh/laravel-debugbar --dev