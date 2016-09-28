<?php

namespace App\Templates;
use Illuminate\View\View;
use App\Post;
use Carbon\Carbon;
class BlogPostTemplate extends AbstractTemplate
{
  protected $view = 'blog.post';
  protected $poss;
  function __construct(Post $posts)
  {
    $this->post = $post;
  }
  public function prepare (View $view , array $parameters) {
    $post = $this-posts->where('id', $parameters['id'])->where('slug' , $parameters['slug'])->first();
    $view->with('post', $post);
  }
}