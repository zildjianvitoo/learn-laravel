@extends("layouts.main")
@section("container")

<div>
    <p>Nama: {{ $name }}</p>
    Point Anda:
    <ul>
        @foreach ($points as $point )
        <li>{{ $point }}</li>
        @endforeach
    </ul>
</div>
@endsection