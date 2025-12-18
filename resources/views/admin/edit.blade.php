@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Редагування продукту</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('admin.products.update', $product->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Назва</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
        </div>

        <div class="mb-3">
            <label>Ціна</label>
            <input type="number" name="price" class="form-control" value="{{ $product->price }}">
        </div>

        <div class="mb-3">
            <label>Категорія</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ $product->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary">Зберегти</button>
    </form>
</div>
@endsection
