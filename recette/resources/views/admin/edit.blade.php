@extends('admin/mainAdmin')

@section('contents')
<h1>Modifier une recette</h1>




<h3>auteur</h3><br>
<h4>{{ $recettes->autor->name }}</h4>
<h3>Recette</h3>
<h3>{{ $recettes->title }}</h3>



@endsection
