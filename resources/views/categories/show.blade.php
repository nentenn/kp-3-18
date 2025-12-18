<h1>{{ $category->NAME }}</h1>
<p>{{ $category->description }}</p>

<h2>Товари:</h2>

<ul>
@foreach($products as $product)
    <li style="margin-bottom: 20px;">

        <img src="{{ asset('images/' . $product->image) }}"
             alt="{{ $product->name }}"
             style="width:150px; height:150px; object-fit:cover; border-radius:10px;">

        <a href="{{ route('products.show', $product->id) }}">
            {{ $product->name }} — {{ number_format($product->price, 2) }} грн
        </a>

    </li>
@endforeach
</ul>

<a href="{{ route('categories.index') }}">Назад</a>
