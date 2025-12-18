<div class="container">

   <h1>{{ $product->name }}</h1>

   <p>{{ $product->description }}</p>

   <p>Ціна: {{ $product->price }} грн</p>

   @if($product->image)
       <img src="{{ asset('images/' . $product->image) }}" 
            style="max-width: 300px; border-radius: 10px;">
   @endif

   <p>Категорія: {{ $product->category->NAME }}</p>

   <a href="{{ route('categories.index') }}">Назад</a>

   <div class="row mt-4">

       <div class="col-md-6">
           <img src="{{ asset('images/' . $product->image) }}" 
                alt="{{ $product->name }}" 
                style="max-width: 100%; border-radius: 10px;">
       </div>

       <div class="col-md-6">
           <h3>Опис:</h3>
           <p>{{ $product->description ?? 'Опис відсутній.' }}</p>

           <h3>Деталі продукту:</h3>
           <ul>
               <li><strong>Ціна:</strong> {{ number_format($product->price, 2) }} грн</li>
               <li><strong>Категорія:</strong> {{ $product->category->NAME }}</li>
               <li><strong>Додано:</strong> {{ $product->created_at->format('d.m.Y H:i') }}</li>
           </ul>
       </div>

   </div>

   <a href="{{ route('categories.index') }}" class="btn btn-primary mt-4">
       Повернутися до каталогу
   </a>

</div>
