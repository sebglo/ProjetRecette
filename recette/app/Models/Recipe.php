<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipes';

    protected $fillable = [ 'autor_id', 'title', 'content', 'ingredients', 'url', 'tags' ];


    /**
    * Get the user that authored the recipe.
    */
   public function autor()
   {
       return $this->belongsTo(User::class,'autor_id');
   }

}
