<?php

namespace App\Presenter;
use Lewis\Presenter\AbstractPresenter;

class PagePresenter extends AbstractPresenter
{
  public function publishedDate () {
    if ($this->published_at) {
      return $this->published_at->toFormattedDateString();
    }
    return 'Not Published yet';
  }published_highlight

  public function publishedHightlight () {
    if ($this->published_at) {
      return $this->published_at->toFormattedDateString();
    }
    return 'Not Published yet';
  }

}
