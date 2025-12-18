@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Редагування категорії</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('admin.categories.update', $category->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Назва</label>
            <input type="text" name="name" class="form-control" value="{{ $category->name }}">
        </div>

        <button class="btn btn-success">Оновити</button>
    </form>
</div>
@endsection
