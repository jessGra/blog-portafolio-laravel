@extends('layout')
@section('title', 'titulo contacto')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                
                <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('messages.store') }}">
                    <h1 class="display-4 text-center">@lang('Contact')</h1>
                    <hr>
                    @csrf
                    <div class="form-group">
                        <input class="form-control shadow-sm @error('name') is-invalid @enderror" type="text" name="name"
                            placeholder="Nombre" value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-control shadow-sm @error('email') is-invalid @enderror" type="email" name="email"
                            placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-control shadow-sm @error('subject') is-invalid @enderror" type="text"
                            name="subject" placeholder="Asunto" value="{{ old('subject') }}">
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea class="form-control shadow-sm @error('content') is-invalid @enderror" name="content"
                            placeholder="Contenido del correo">{{ old('content') }}</textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-lg text-light btn-block">@lang('Send')</button>
                </form>
            </div>
        </div>

    </div>
@endsection
