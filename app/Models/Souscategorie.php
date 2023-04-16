<?php

namespace App\Models;
use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Souscategorie extends Model
{
    use HasFactory;
    public function categories(){
        return $this->belongsTo(Categorie::class, 'id_CG');
    } 
    public function articles(){
        return $this->haseMany(Article::class, 'id_SC');
    } 
}
