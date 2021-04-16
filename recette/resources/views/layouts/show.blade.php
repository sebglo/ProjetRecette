@extends('layouts/main')

@section('content')
<h1>une recettes</h1>

<ul>


    <li>{{ $recipes->title }}</li>
    <li>{{ $recipes->autor->name }}</li>
    <li>{{ $recipes->content }}</li>

</ul>

@endsection
