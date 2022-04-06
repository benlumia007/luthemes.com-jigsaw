@extends( '_views.templates.main' )

@section( 'body' )
<section id="content" class="site-content">
    <div id="layout" class="right-sidebar">
        <main class="content-area">
            <article class="page">
                <header class="entry-header">
                    <h1 class="entry-title">{{ $page->title }}</a></h1>
                </header>
                <div class="entry-content">
                    @yield( 'content' )
                </div>
            </article>
        </main>
        <aside id="aside" class="widget-area">
            <div class="widget widget-thumbnail">
                <figure>
                    <img src="{{ $page->thumbnail }}" />
                </figure>
            </div>
        </aside>
    </div>
</section>
@endsection