@foreach ($pages as $page)
  <li class="{{ Request::is($page->uri_wildcard) ? 'active' : '' }} {{count($page->children) ? ($page->isChild() ? 'dropdown-submenu' : 'dropdown') : '' }}">
     <a href="{{url($page->url) }}">
       {{$page->title}}
       @if(count($page->children))
          <span class="caret {{ $page->isChild() ? 'right' : ''}}"></span>
       @endif
     </a>
      @if($page->children)
        <ul class="dropdown-menu">
          @include('partials.navigation', ['pages' => $page->children])
        </ul>
      @endif
  </li>

@endforeach