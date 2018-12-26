@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>Ask Question</h2>
                        <div class="ml-auto">
                            <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back to list of questions</a>
                        </div>
                    </div>
                    
                </div>

                <div class="card-body">
                    <form action="{{ route('questions.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="question-title">Question Title</label>
                            <input type="text" value="{{ old('title') }}" name = "title" id ="question-title" class="form-control {{ $errors->first('title') ? 'is-invalid' : '' }}">

                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    <strong> {{ $errors->first('title') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="question-body">Explain your question</label>
                            <textarea row="10" name = "body" id ="question-body" class="form-control {{ $errors->first('body') ? 'is-invalid' : '' }}">{{ old('body') }}</textarea>
                            @if($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong> {{ $errors->first('body') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-outline-primary">Ask this Question</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
