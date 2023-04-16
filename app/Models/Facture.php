<?php

namespace App\Models;
use App\Models\Fournisseur;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    public function fournisseurs(){
        return $this->belongsTo(Fournisseur::class, 'id_fournisseur');
    }
    public function detailfactures(){
        return $this->belongsToMany(Article::class,'detailfactures' ,'id_fact','id_article')->withPivot('PU', 'quantite');
    }
    
}
