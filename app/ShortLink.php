<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortLink extends Model
{    
    
	protected $table='short_links';
	protected $primaryKey='id';
     protected $fillable = [
        'code', 'link'
    ];
}
