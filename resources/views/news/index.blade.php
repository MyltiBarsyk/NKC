{{-- Страница со всеми новостями --}}
@extends('layouts.app')

@section('content')
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- section begin -->
    <section id="subheader" class="text-light" data-stellar-background-ratio=".2" data-bgimage="url(images/background/subheader.jpg) top">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>News</h1>
                        <p>Reputation. Respect. Result.</p>
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
                @foreach ($news as $item) {{-- выводит все новости --}}
                    
                <div class="col-lg-4 col-md-6 mb30">
                    <div class="bloglist item">
                        <div class="post-content">
                            <div class="date-box">
                                <div class="m">{{ date('d', strtotime($item->created_at)) /* strtotime($item->created_at) - аргумент для метода date, который переводит строку во время, в данном случае на время создания **/ }}</div>  
                                <div class="d">{{ date('M', strtotime($item->created_at)) }}</div>
                            </div>
                            <div class="post-image">
                                <img alt="" src="/storage/{{ $item->image }}">
                            </div>
                            <div class="post-text">
                                <span class="p-tagline">{{ $item->category->name }}</span>
                                <h4><a href="/news/{{ $item->id }}">{{  $item->title }}<span></span></a></h4>
                                <p>{{ $item->description }}</p>
                                {{-- <span class="p-author">Fynley Wilkinson</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               
                <div class="spacer-single"></div>
                <ul class="pagination">
                    <li><a href="#">Prev</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </section>
</div>

@endsection