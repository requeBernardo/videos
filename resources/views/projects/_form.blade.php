@csrf
<label>
    Titulo del proyecto<br>
<input type="text" name="title" value="{{ old('title', $project->title) }}">
</label>
<br>
<label>
    Url del proyecto<br>
    <input type="text" name="url" value="{{ old('url', $project->url) }}">
</label>
<br>
<label>
    Descripcion del proyecto<br>
    <textarea name="description">{{ old('description', $project->description) }}</textarea>
</label>
<br>
<button>{{ $btnText }}</button>