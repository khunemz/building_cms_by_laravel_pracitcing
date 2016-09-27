<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Baum\Node;
class Page extends Node
{
  public function updateOrder($order , $orderPage)
  {
    $orderPage = $this->findOrFail($orderPage);
    if ($order == 'before') {
      $this->moveToLeftOf($orderPage);
    }else if ($order == 'after') {
      $this->moveToRightOf($orderPage);
    }else if ($order == 'childOf')
    {
      $this->makeChildOf($orderPage);
    }
  }
  protected $fillable = ['title' , 'content', 'name', 'url', 'template'];

  public function setNameAttriute ($value) {
    $this->attributes['name'] = $value ? : null;
  }

  public function setTemplateAttriute ($value) {
    $this->attributes['template'] = $value ? : null;
  }
}
