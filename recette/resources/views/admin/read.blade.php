@extends('admin/mainAdmin')

@section('contents')
<h1>Modifier une recette</h1>



<table id="customers">
    <tr>
        <th>Recette</th>
        <th>auteur</th>
      <th>parametres</th>
    </tr>
    @foreach ( $recettes as $recette )
        <tr>
            <td>{{ $recette->title }}</td>
            <td>{{ $recette->autor->name }}</td>
            {{-- <td><a class="button" href="{{url('edit' , $recette->id) }}">Editer</a>  <a class="button" href="{{url('delete' , $recette->id) }}">Suprimer</a></td> --}}
            <td><a class="button" href="{{url('adminedit' , $recette->id) }}">Editer</a>  <a class="button" href="{{url('admin/delete' , $recette->id) }}">Suprimer</a></td>
        </tr>
    @endforeach
  </table>

@endsection
