<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index()
    {
        //return view('/layouts.contact');

        $contacts = Contact::all();

        return view('/contact.contact', ['contacts' => $contacts]);
    }

    public function store() //qui recupere les donnee du formulaire
    {
        /* return request()->all(); */ //pour récupérer les informations du formulaire
        $contact = new Contact(); //on instancie un nouveau projet

        $contact->name = request('name');
        $contact->email = request('email'); //on set le titre avec la donnée envoyée du formulaire
        $contact->message = request('message');

        $contact->save(); // on enregistre dans la base

        //return redirect('/layouts.contact'); // méthode pour rediriger vers une autre url (en get par défaut)
        return redirect('/contact.contact');
    }
}
