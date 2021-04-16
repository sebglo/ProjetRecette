@extends('admin/mainAdmin')

@section('contents')
<h1>Créer une recette</h1>

{{-- <li><a href="{{url('admin.create' , '1') }}"> pour recuperer un ID en url</a></li> --}}
{{-- <li><a href="{{ route('admin.create' , '1') }}"> pour recuperer un ID en url</a></li> --}}
<a class="btn btn-success" href="/adminread"> Modifier une recette seb</a><br>



{{-- <form action="{{ route('admin/storee', $user->autor_id) }}" method="POST"> --}}
<form action="{{ route('admin.store') }}" method="POST">
    @csrf
    <div>
        <input type="number" name="autor_id" placeholder="mettre un id">
    </div>
    <div>
        <input type="text" name="title" placeholder="nom de la recette">
    </div>
    <div>
        <textarea type="text" name="content" placeholder="contenu de la recette"></textarea>
    </div>
    <div>
        <textarea type="email" name="ingredients" placeholder="ingredients"></textarea>
    </div>
    <div>
        <input type="text" name="url" placeholder="url">
    </div>

    <div>
        <input type="text" name="tags" placeholder="tags">
    </div>
    <div>
        <button class="button" type="submit">Envoyer</button>
    </div>


</form>


@endsection
