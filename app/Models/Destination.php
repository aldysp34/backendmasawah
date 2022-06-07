<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'quote', 'latitude', 'longitude'];

    public function category(){
        return $this->belongsTo('App\Models\DestinationCategory');
    }
}
