<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {

        $recipes = \App\Models\Recipe::first()//find(1)
            ->orderBy('id', 'desc')
            ->paginate(3)
            //->get()
            ; // affiche les 3 derniere recette

        //$recipes = \App\Models\Recipe::find(1); //trouver la recette avec l’id 1
        //echo $recipes->autor->name; //affiche le nom de l’auteur

        //$recipes = \App\Models\User::find(1)->recipes; //get recipes from user id 1

        return view('/layouts.home', array(

            'recipes' => $recipes

        ));
    }

    public function home(){
        return view('/layouts.home');
    }
}
