<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('/layouts.recette');

        //$recettes = \App\Models\Recipe::all()//

        $recettes = \App\Models\Recipe::first()//find(1)

            ->orderBy('id', 'desc')
            ->paginate(10)
            //->get()
            ; // affiche les 3 derniere recette

        //$recipes = \App\Models\Recipe::find(1); //trouver la recette avec l’id 1
        //echo $recipes->autor->name; //affiche le nom de l’auteur

        //$recipes = \App\Models\User::find(1)->recipes; //get recipes from user id 1

        return view('/layouts.recette', array(

            'recettes' => $recettes

        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('/admin.create');

        /* $recettes = \App\Models\Recipe::all();

        return view('/admin.create', array(

            'recettes' => $recettes

        )); */


    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //Request $request
    {


        \App\Models\Recipe::create(request()->validate([
            'autor_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'ingredients' => 'required',
            'url' => 'required',
            'tags' => 'required'
        ]));

        $recettes = \App\Models\Recipe::all();
        return view('/admin/edit', array('recettes' => $recettes));


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $recipes = \App\Models\Recipe::where('url', $id)->first(); //get first recipe with recipe_nam == $recipe_name
        return view('/layouts.show', array( //Pass the recipe to the view
            'recipes' => $recipes
        ));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return view('/admin/edit',compact('id'));
        $recettes = \App\Models\Recipe::where('url', $id)->first(); //get first recipe with recipe_nam == $recipe_name
        return view('/admin/edit', array( //Pass the recipe to the view
            'recettes' => $recettes
        ));
    }

    public function read() //$id
    {
        //
        //return redirect('/admin/edit', array('recettes' => $recettes));
        //return view('/admin/edit');
        $recettes = \App\Models\Recipe::all();
        return view('/admin/read', array('recettes' => $recettes));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
