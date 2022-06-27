<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    use HasFactory;

    protected $table = 'photos';

    protected $primaryKey = 'id';

    public function galerie()
    {
        return $this->belongsTo(Galerie::class);
    }
    
}
