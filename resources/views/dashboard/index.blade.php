@extends('layouts.main')

@section('container')
  <h1>Ini halaman Dashboard {{ auth()->user()->name }}</h1>
@endsection
