<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeries extends Model
{
    use HasFactory;

    protected $table = 'Photos';

    protected $primaryKey = 'id';

    public function photos()
    {
        return $this->hasMany(Galerie::class);
    }

    
}
