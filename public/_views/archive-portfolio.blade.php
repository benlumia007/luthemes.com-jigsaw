@extends( '_views.templates.main' )

@section( 'body' )
<section id="portfolio" class="site-portfolio">
    <div class="content-area">
        <article class="portfolio">
            <header class="entry-header">
                <h1 class="entry-title">Portfolio</h1>
                <span class="entry-description">Some of my Recent works</span>
            </header>
            <section class="entry-content">
                <ul>
                    @foreach ( $pagination->items as $portfolio )
                        <li>
                            <figure class="post-thumbnail">
                                <img src="{{ $portfolio->thumbnail }}" />
                            </figure>
                            <div class="caption">
                                <h3 class="caption-title"><a href="{{ $portfolio->getUrl() }}">{{ $portfolio->title }}</a></h3>
                                <span class="caption-description">{{ $portfolio->caption }}</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </section>

            @if ( $pagination->pages->count() > 1 )
                <nav class="pagination-items">
                    @if ($previous = $pagination->previous)
                        <a href="{{ $previous }}" class="previous">&LeftArrow;</a>
                    @endif

                    @foreach ( $pagination->pages as $pageNumber => $path )
                        <a href="{{ $path }}" class="{{ $pagination->currentPage == $pageNumber ? 'text-blue-600' : 'text-blue-700' }}">{{ $pageNumber }}</a>
                    @endforeach

                    @if ($next = $pagination->next)
                        <a href="{{ $next }}" class="next">&RightArrow;</a>
                    @endif
                </nav>
            @endif
        </article>
    </div>
</section>
@endsection