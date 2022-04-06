@extends( '_views.templates.home' )

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
                    <?php foreach ( $portfolios->take( 9 ) as $portfolio ) : ?>
                        <li>
                            <figure class="post-thumbnail">
                                <img src="{{ $portfolio->thumbnail }}" />
                            </figure>
                            <div class="caption">
                                <h3 class="caption-title"><a href="{{ $portfolio->getUrl() }}">{{ $portfolio->title }}</a></h3>
                                <span class="caption-description">{{ $portfolio->caption }}</span>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </section>
        </article>
    </div>
</section>
@endsection