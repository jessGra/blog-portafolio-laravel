@extends('layout')
@section('title', 'titulo Projects')
@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="display-4 mb-0">@lang('Projects')</h1>
            @auth
                <a class="btn btn-primary" href="{{ route('projects.create') }}">@lang('Create new Project')</a>
            @endauth
        </div>
        <p class="lead text-secondary">Proyectos realizados Lorem, ipsum dolor sit amet consectetur
            adipisicing elit. Sed hic labore molestias itaque possimus</p>
        <div class="list-group list-group-flush">
            @forelse ($projects as $project)
                <a href="{{ route('projects.show', $project) }}"
                    class="list-group-item mb-3 shadow-md list-group-item-action d-flex justify-content-between align-items-center">
                    <span class="font-weight-bold">{{ $project->title }}</span>
                    <span>{{ $project->created_at->format('d/m/Y') }}</span>
                </a>
            @empty
                <span
                    class="list-group-item mb-3 shadow-md list-group-item-action d-flex justify-content-between align-items-center">
                    No hay proyectos para mostrar
                </span>
            @endforelse
            {{ $projects->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
