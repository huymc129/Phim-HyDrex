@extends('layout')
@section('content')
    <div class="row container" id="wrapper">
        <div class="halim-panel-filter">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="yoast_breadcrumb hidden-xs"><span><span><a href="">{{ $genre_slug->title }}</a> »
                                    <span class="breadcrumb_last" aria-current="page">2020</span></span></span></div>
                    </div>
                </div>
            </div>
            <div id="ajax-filter" class="panel-collapse collapse" aria-expanded="true" role="menu">
                <div class="ajax"></div>
            </div>
        </div>
        <main id="main-contents" class="col-xs-12 col-sm-12 col-md-8">
            <section>
                <div class="section-bar clearfix">
                    <h1 class="section-title"><span>{{ $genre_slug->title }}</span></h1>
                </div>
                <div class="halim_box">
                    @foreach ($movie as $key => $mov)
                        <article class="col-md-3 col-sm-3 col-xs-6 thumb grid-item post-37606">
                            <div class="halim-item">
                                <a class="halim-thumb" href="{{route('movie')}}">
                                    <figur>
                                        <img class="lazy img-responsive" src="{{ asset('uploads/movie/' . $mov->image) }}"
                                            src="{{ asset('uploads/movie/.$mov->image') }}" title="{{ $mov->title }}">
                                        </figure>
                                        <span class="status">TẬP 15</span><span class="episode"><i class="fa fa-play"
                                                aria-hidden="true"></i>Vietsub</span>
                                        <div class="icon_overlay"></div>
                                        <div class="halim-post-title-box">
                                            <div class="halim-post-title ">
                                                <p class="entry-title">{{ $mov->title }}</p>
                                                <p class="original_title">{{ $mov->name_eng }}</p>
                                            </div>
                                        </div>
                                </a>
                            </div>
                        </article>
                    @endforeach

                </div>
                <div class="clearfix"></div>
                <div class="text-center">
                    {{-- <ul class='page-numbers'>
                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="">2</a></li>
                        <li><a class="page-numbers" href="">3</a></li>
                        <li><span class="page-numbers dots">&hellip;</span></li>
                        <li><a class="page-numbers" href="">55</a></li>
                        <li><a class="next page-numbers" href=""><i class="hl-down-open rotate-right"></i></a></li>
                    </ul> --}}
                    {!! $movie->links("pagination::bootstrap-5") !!}
                </div>
            </section>
        </main>
        <aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
            <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
                <div class="section-bar clearfix">
                    <div class="section-title">
                        <span>Top Views</span>
                        <ul class="halim-popular-tab" role="tablist">
                            <li role="presentation" class="active">
                                <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10"
                                    data-type="today">Day</a>
                            </li>
                            <li role="presentation">
                                <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10"
                                    data-type="week">Week</a>
                            </li>
                            <li role="presentation">
                                <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10"
                                    data-type="month">Month</a>
                            </li>
                            <li role="presentation">
                                <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10"
                                    data-type="all">All</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <section class="tab-content">
                    <div role="tabpanel" class="tab-pane active halim-ajax-popular-post">
                        <div class="halim-ajax-popular-post-loading hidden"></div>
                        <div id="halim-ajax-popular-post" class="popular-post">
                            <div class="item post-37176">
                                <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                                    <div class="item-link">
                                        <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798"
                                            class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ"
                                            title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                        <span class="is_trailer">Trailer</span>
                                    </div>
                                    <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                                </a>
                                <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                                <div style="float: left;">
                                    <span class="user-rate-image post-large-rate stars-large-vang"
                                        style="display: block;/* width: 100%; */">
                                        <span style="width: 0%"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="item post-37176">
                                <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                                    <div class="item-link">
                                        <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798"
                                            class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ"
                                            title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                        <span class="is_trailer">Trailer</span>
                                    </div>
                                    <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                                </a>
                                <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                                <div style="float: left;">
                                    <span class="user-rate-image post-large-rate stars-large-vang"
                                        style="display: block;/* width: 100%; */">
                                        <span style="width: 0%"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="item post-37176">
                                <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                                    <div class="item-link">
                                        <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798"
                                            class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ"
                                            title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                        <span class="is_trailer">Trailer</span>
                                    </div>
                                    <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                                </a>
                                <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                                <div style="float: left;">
                                    <span class="user-rate-image post-large-rate stars-large-vang"
                                        style="display: block;/* width: 100%; */">
                                        <span style="width: 0%"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="item post-37176">
                                <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                                    <div class="item-link">
                                        <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798"
                                            class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ"
                                            title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                        <span class="is_trailer">Trailer</span>
                                    </div>
                                    <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                                </a>
                                <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                                <div style="float: left;">
                                    <span class="user-rate-image post-large-rate stars-large-vang"
                                        style="display: block;/* width: 100%; */">
                                        <span style="width: 0%"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="item post-37176">
                                <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                                    <div class="item-link">
                                        <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798"
                                            class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ"
                                            title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                        <span class="is_trailer">Trailer</span>
                                    </div>
                                    <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                                </a>
                                <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                                <div style="float: left;">
                                    <span class="user-rate-image post-large-rate stars-large-vang"
                                        style="display: block;/* width: 100%; */">
                                        <span style="width: 0%"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="item post-37176">
                                <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                                    <div class="item-link">
                                        <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798"
                                            class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ"
                                            title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                        <span class="is_trailer">Trailer</span>
                                    </div>
                                    <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                                </a>
                                <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                                <div style="float: left;">
                                    <span class="user-rate-image post-large-rate stars-large-vang"
                                        style="display: block;/* width: 100%; */">
                                        <span style="width: 0%"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="item post-37176">
                                <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                                    <div class="item-link">
                                        <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798"
                                            class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ"
                                            title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                        <span class="is_trailer">Trailer</span>
                                    </div>
                                    <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                                </a>
                                <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                                <div style="float: left;">
                                    <span class="user-rate-image post-large-rate stars-large-vang"
                                        style="display: block;/* width: 100%; */">
                                        <span style="width: 0%"></span>
                                    </span>
                                </div>
                            </div>


                        </div>
                    </div>
                </section>
                <div class="clearfix"></div>
            </div>
        </aside>
    </div>
@endsection
