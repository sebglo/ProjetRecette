@extends('layouts/main')

@section('content')
<h1>recettes</h1>

{{-- <a class="btn btn-success" href="{{ route('admin.create') }}"> Creer une nouvelle recette</a> --}}
<a class="btn btn-success" href="/admin/create"> Creer ou modifier une recette</a><br>


<ul>
    {{-- ne marche pas encore --}}
    @foreach ( $recettes as $recette )

        <li>{{-- <a href="{{url('recettes' , $recette->url) }}"> --}} {{ $recette->title }}{{-- </a> --}}</li>
        <li>{{ $recette->autor->name }}</li>
        <li>{{ $recette->content }}</li>
        <li>{{ $recette->ingredients }}</li>


    @endforeach
</ul>

@endsection
