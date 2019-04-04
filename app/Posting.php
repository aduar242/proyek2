<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    protected $guarded = [];
    
    public function kategoriposting()
    {
        return $this->belongsTo(KategoriPosting::class);
    }
}
