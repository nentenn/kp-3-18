<h1>Вітаю, {{ auth()->user()->name }}</h1>

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Вийти</button>
</form>
