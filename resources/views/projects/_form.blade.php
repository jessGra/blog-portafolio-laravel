@csrf
<div class="form-group">
    <label  for="title">Titulo del proyecto</label>
    <input class="form-control shadow-sm" id="title" type="text" name="title" value="{{ old('title', $project->title) }}">
</div>
<div class="form-group">
    <label for="slug">Slug del proyecto</label>
    <input class="form-control shadow-sm" id="slug" type="text" name="slug" value="{{ old('slug', $project->slug) }}">
</div>
<div class="form-group">
    <label for="description">Descripcion del proyecto</label>
    <textarea class="form-control shadow-sm" id="description" name="description">{{ old('description', $project->description) }}</textarea>
</div>
<button class="btn btn-primary btn-block btn-lg">@lang($btn_text)</button>
<a href="{{route('projects.index')}}" class="btn btn-secondary btn-block btn-lg">Cancelar</a>

