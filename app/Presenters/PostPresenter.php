<?php

namespace App\Presenter;
use Lewis\Presenter\AbstractPresenter;
use League\CommonMark\CommonMarkConverter;

class PagePresenter extends AbstractPresenter
{
  protected $markdown;
  function __construct($object, CommonMarkConverter $markdown)
  {
    $this->$markdown = $markdown;
    parent::__construct($object);
  }
  public function publishedDate () {
    if ($this->published_at) {
      return $this->published_at->toFormattedDateString();
    }
    return 'Not Published yet';
  }

  public function excerptHtml () {
    return $this->excerpt ? $this->markdown->convertToHtml($this->excerpt) : null;
  }

  public function bodyHtml () {
    return $this->body ? $this->markdown->convertToHtml($this->body) : null;
  }

  public function publishedHightlight () {
    if ($this->published_at && $this->published_at->isFuture()) {
      return 'info';
    }else if (! $this->published_at) {
      return 'warning'
    }
  }

}
