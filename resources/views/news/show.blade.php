@extends('layouts.app')

@section('content')
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- section begin -->
    <section id="subheader" class="text-light" data-stellar-background-ratio=".2" data-bgimage="url(/storage/{{ $news->image }}) top">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>{{ $news->title }}</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->
    <!-- section begin -->
    <section aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-read">
                        {{-- <img alt="" src="/storage/{{ $news->image }}" class="img-fullwidth"> --}}
                        <div class="post-text">
                            {!! $news->content !!}
                            <span class="post-date">{{ date('M d, Y') }}</span>
                        </div>
                    </div>
                    <div class="spacer-single"></div>
                    
                </div>
                {{-- <div id="sidebar" class="col-md-4">
                    <div class="widget widget-post">
                        <h4>Recent Posts</h4>
                        <div class="small-border"></div>
                        <ul>
                            <li><span class="date">10 Jun</span><a href="#">The Lawyer European Awards shortlist</a></li>
                            <li><span class="date">22 Jun</span><a href="#">Six firms that are setting the trend</a></li>
                            <li><span class="date">20 Jun</span><a href="#">When it comes to law firm mergers</a></li>
                            <li><span class="date">12 Jun</span><a href="#">How to Make the Most of Your CLE</a></li>
                        </ul>
                    </div>
                    <div class="widget widget-text">
                        <h4>About Us</h4>
                        <div class="small-border"></div>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                        sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                    </div>
                    <div class="widget widget_tags">
                        <h4>Tags</h4>
                        <div class="small-border"></div>
                        <ul>
                            <li><a href="#link">Art</a></li>
                            <li><a href="#link">Application</a></li>
                            <li><a href="#link">Design</a></li>
                            <li><a href="#link">Entertainment</a></li>
                            <li><a href="#link">Internet</a></li>
                            <li><a href="#link">Marketing</a></li>
                            <li><a href="#link">Multipurpose</a></li>
                            <li><a href="#link">Music</a></li>
                            <li><a href="#link">Print</a></li>
                            <li><a href="#link">Programming</a></li>
                            <li><a href="#link">Responsive</a></li>
                            <li><a href="#link">Website</a></li>
                        </ul>
                    </div>
                </div> TYTA --}}
            </div>
        </div>
    </section>
</div>

@endsection