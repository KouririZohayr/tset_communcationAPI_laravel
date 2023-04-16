<?php

namespace App\Models;
use App\Models\Souscategorie;
use App\Models\Facture;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public function souscategories(){
        return $this->belongsTo(Souscategorie::class, 'id_SC');
    }
    public function detailfactures(){
        return $this->belongsToMany(Facture::class,'detailfactures' ,'id_fact','id_article')->withPivot('PU', 'quantite');
    }

}
