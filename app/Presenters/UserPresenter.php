<?php

namespace App\Presenter;
use Lewis\Presenter\AbstractPresenter;

class UserPresenter extends AbstractPresenter
{
  public function last_login_difference () {
    return $this->last_login_at->diffForHumans();
  }
}
