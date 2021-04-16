@extends('layouts/main')

@section('content')
<h1>Home</h1>
<ul>

    @foreach ( $recipes as $recipe )

      {{-- <li><a href="/recettes/{{ $recipe->url }}"> {{ $recipe->title }}</a></li> --}}
      <li><a href="{{url('recettes' , $recipe->url) }}"> {{ $recipe->title }}</a></li>
      <li>{{ $recipe->id }}</li>
      <li>{{ $recipe->autor->name }}</li>
      <li>{{ $recipe->url }}</li>

    @endforeach

</ul>
@endsection
