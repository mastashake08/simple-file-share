<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShortLink extends Model
{
    //
    protected $fillable = ['short_link', 'url', 'path'];
    
    public function getLink() {
        return url('/file/'.$this->short_link);
    }
}
