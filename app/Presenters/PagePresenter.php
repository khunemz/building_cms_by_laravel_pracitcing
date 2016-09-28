<?php

namespace App\Presenter;
use Lewis\Presenter\AbstractPresenter;

class PagePresenter extends AbstractPresenter
{
  public function uriWildcard () {
    return $this->uri . '*';
  }
  public function prettryUrl () {
    return '/'.ltrim($this->url , '/');
  }

  public function linkToPaddedTitle ($link) {
    $padding = str_repeat('$nbsp;', $this->depth * 4);
    return $padding.link_to(link, $this->title);
  }

  public function paddedTitle ($link) {
    return str_repeat('$nbsp;', $this->depth * 4)->title;
  }
}
