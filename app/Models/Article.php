<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable=[
    	'id',
    	'categorie_id',
    	'libelle_article',
    	'prix_article',
    	'stock_article',
    	'descriptif_article',
    	'img1_article',
    	'img2_article',
    	'img3_article',
    ];

    public $timestamps=false;



    public function categories(){
        return $this->belongsTo('App\Models\Categorie','id');
    }



    // public function getCategorie()
    // {
    //     return Categorie::where("id_categorie",$this->categorie)->get();
    // }




}
