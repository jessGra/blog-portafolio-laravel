@extends('layout')
@section('title', 'Proyectos | Nuevo')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                @include('partials/validation-errors')

                <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('projects.store') }}">
                    <h1 class="display-4 text-center">@lang('New project')</h1>
                    <hr>
                    @include('projects/_form', ['btn_text' => 'Save'])

                </form>
            </div>
        </div>
    </div>
@endsection
