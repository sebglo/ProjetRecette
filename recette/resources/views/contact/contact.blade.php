@extends('contact/mainContact')

@section('content')
<h1>contact</h1>

<h4>formulaire d'inscription</h4>
<form method="POST" action="/inscription">
    @csrf
    <div>
        <input type="text" name="name" placeholder="nom">
    </div>
    <div>
        <input type="email" name="email" placeholder="email">
    </div>
    <div>
        <textarea name="message" placeholder="message"></textarea>
    </div>
    <div>
        <button class="button" type="submit">Envoyer</button>
    </div>
</form>

<h4>Modifié la liste des contacts</h4>

<table id="customers">
    <tr>
        <th>Nom</th>
        <th>Email</th>
      <th>Message</th>
      <th>Parametre</th>
    </tr>
    @foreach ( $contacts as $contact )
        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->message }}</td>
            <td>Editer | Suprimer</td>
        </tr>
    @endforeach
  </table>
@endsection
