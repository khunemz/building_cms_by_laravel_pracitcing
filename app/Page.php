<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title' , 'content', 'name', 'url'];

    public function setNameAttriute ($value) {
      $this->attributes['name'] = $value ? : null;
    }
}
