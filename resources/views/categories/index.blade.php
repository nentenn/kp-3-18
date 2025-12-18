<h1>Категорії</h1>

<ul>
@foreach($categories as $category)
    <li>
        <a href="{{ route('categories.show', $category->id) }}">
            {{ $category->NAME }}
        </a>
    </li>
@endforeach
</ul>
