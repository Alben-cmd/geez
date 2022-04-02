@if ($paginator->hasPages())

        <div class="pro-pagination-style text-center" data-aos="fade-up" data-aos-delay="200">
        <div class="pages">
        <ul>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="li">
                    <span class="page-link disabled"><i class="fa fa-angle-left"></i></span>
                </li>
            @else
                <li class="li">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fa fa-angle-left"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="li" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="li"><a href="#" class="page-link active">{{ $page }}</a></li>
                        @else
                            <li class="li"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="li">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fa fa-angle-right"></i></a>
                </li>
            @else
                <li class="li">
                    <span class="page-link disabled"><i class="fa fa-angle-right"></i></span>
                </li>
            @endif
        </ul>
        </div>
        </div>
@endif
