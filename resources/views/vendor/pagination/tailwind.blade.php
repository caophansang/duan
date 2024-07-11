<!-- pager --------------->
<div class="pager-area">
@if ($paginator->hasPages())
<div class="pager-area__pagenumber">
  <ul style="list-style: none;">
    <li class="prev">
      @if (!$paginator->onFirstPage())
        <a href="{{ $paginator->previousPageUrl() }}#productx"></a>
      @endif
    </li>
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <li class="ellipsis"></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="active">{{ $page }}</li>
                @else
                    <li><a href="{{ $url }}#productx">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    <li class="next">
      @if ($paginator->hasMorePages())
      <a href="{{ $paginator->nextPageUrl() }}#productx"></a>
      @endif
    </li>
  </ul>
</div>
@endif
</div>
<!-- /pager --------------->
