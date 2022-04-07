@extends( '_views.templates.main' )

@section( 'body' )
<section id="content" class="site-content">
    <div class="right-sidebar">
        <main class="content-area">
            <article class="page">
                <div class="entry-content">
                    @yield( 'content' )
                </div>
            </article>
        </main>
        <aside class="widget-area">
            <div class="widget theme-info">
                <h2 class="widget-title">Theme Details</h2>
                <table>
                    <tbody>
                    <tr>
                        <th>Name</th>
                        <td><?= $page->title; ?></td>
                    </tr>
                    <tr>
                            <th>Type</th>
                            <td><?= ucwords( str_replace( '-', ' ', $page->type ) ); ?></td>
                        </tr>
                        <tr>
                            <th>Last Updated</th>
                            <td><?= $page->updated; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="widget theme-features">
                <h2 class="widget-title">Features</h2>
                <table>
                    <tbody>
                        <?php foreach ( $page->features as $feature ) : ?>
                            <tr>
                                <th><img src="/assets/images/svg/check-square.svg" /></th>
                                <td><?= ucwords( str_replace( '-', ' ', $feature ) ); ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="widget theme-features">
                <h2 class="widget-title">Layouts</h2>
                <table>
                    <tbody>
                        <?php foreach ( $page->layouts as $feature ) : ?>
                            <tr>
                                <th><img src="/assets/images/svg/check-square.svg" /></th>
                                <td><?= ucwords( str_replace( '-', ' ', $feature ) ); ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </aside>
    </div>
    <section class="recent-portfolio">
                <ul>
                    <?php foreach ( $portfolios->shuffle()->take( 3 ) as $portfolio ) : ?>
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
</section>
@endsection