@csrf
<div class="form-group">
    <label for="question-title">Question Title</label>
    <input type="text" value="{{ old('title', $question->title) }}" name = "title" id ="question-title" class="form-control {{ $errors->first('title') ? 'is-invalid' : '' }}">

    @if($errors->has('title'))
        <div class="invalid-feedback">
            <strong> {{ $errors->first('title') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="question-body">Explain your question</label>
    <textarea row="10" name = "body" id ="question-body" class="form-control {{ $errors->first('body') ? 'is-invalid' : '' }}">{{ old('body', $question->body) }}</textarea>
    @if($errors->has('body'))
        <div class="invalid-feedback">
            <strong> {{ $errors->first('body') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <button type="submit" class="btn btn-lg btn-outline-primary">{{ $buttonText}}</button>
</div>