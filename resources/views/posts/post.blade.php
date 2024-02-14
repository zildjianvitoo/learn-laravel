@extends("layouts.main")

@section("container")
<h2>Judul {{ $post["title"] }}</h2>
<h5>by: {{ $post["author"] }}</h5>
<p>Paragraf {{ $post["body"] }}</p>
@endsection