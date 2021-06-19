@extends('layout')
@section('title', $project->title . ' | Editar')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                @include('partials/validation-errors')

                <form class="bg-white py-3 px-4 shadow rounded" method="POST"
                    action="{{ route('projects.update', $project) }}">
                    @method('PATCH')
                    <h1 class="display-4 text-center">@lang('Edit Project'){{ ': ' . $project->title }}</h1>
                    <hr>
                    @include('projects/_form',['btn_text' => 'Update'])

                </form>
            </div>
        </div>
    </div>
@endsection
