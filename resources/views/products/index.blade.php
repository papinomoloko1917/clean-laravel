@extends('layouts.app')
@section('content')
    <h1>Наши велосипеды</h1>
    <a href="{{ route('home') }}" class="btn">На главную</a>
    <x-product.list :allProducts="$allProducts" />
@endsection
