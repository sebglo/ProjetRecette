@extends('layouts/main')

@section('content')
<h1>creation d'un login pour créer une recette</h1>

<form action="{{ route('admin.store') }}" method="POST">
    @csrf

    <div>
        <input type="text" name="name" placeholder="nom de l'auteur">
    </div>
    <div>
        <input type="email" name="email" placeholder="email">
    </div>
    <div>
        <input type="text" name="password" placeholder="mot de passe">
    </div>
    <div>
        <input type="number" name="id" placeholder="mettre un id">
    </div>
    <div>
        <button class="button" type="submit">Envoyer</button>
    </div>

</form>

{{-- <li><a href="{{url('admin' , '1') }}"> pour recuperer un ID en url</a></li> --}}

<li><a href="{{ route('admin.create') }}"> pour aller sur la page create</a></li>


@endsection
