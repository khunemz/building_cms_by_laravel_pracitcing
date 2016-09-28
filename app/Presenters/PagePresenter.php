<?php

namespace App\Presenter;
use Lewis\Presenter\AbstractPresenter;
use League\CommonMark\CommonMarkConverter;
class PagePresenter extends AbstractPresenter
{
  protected $markdown;

  function __construct($object , CommonMarkConverter $markdown)
  {
    $this->markdown = $markdown;
    parent::__construct($object);
  }

  public function contentHtml () {
    return $this->markdown->convertToHtml($this->content);
  }
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
