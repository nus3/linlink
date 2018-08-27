@extends('layouts.main')

@include('layouts.sidebar')

@section('pageCss')
@endsection

@section('content')
<div class="wrapper">
    @yield('sidebar')
    <div class="contents">
        <div class="top-section">
            <div class="row">
                <h3 class="top-section__title anim-typewriter pc">お気に入りのリンクをシェアしよう</h3>
                <h3 class="top-section__title anim-typewriter sp">お気に入りをシェアしよう</h3>
            </div>
            <div class="top-section__btn-wrapper">
                <button class="btn waves-effect waves-light cyan darken-3 top-section__btn pc" type="button" onclick="showModal('formModal')">シェアする</button>
                <button class="btn waves-effect waves-light cyan darken-3 top-section__btn sp" type="button" onclick="showModal('formModalSp')">シェアする</button>
            </div>
        </div>

        <div class="section">
            <h4 class="section__title">アクセスランキング</h4>
            <div class="rank-section__items">
                @foreach ($popularLinks as $popularLink)
                    <div class="card rank-section__item" onclick="redirectLink('{{ $popularLink->url }}', '{{ $popularLink->id }}')">
                        <div class="card-image">
                            <!-- TODO: imageをクリックするとリンク先へリダイレクト -->
                            @if(is_null($popularLink->ogp_url))
                                <img src="{{ asset('/img/no_image.png') }}">
                            @else
                                <img src="{{ $popularLink->ogp_url }}">
                            @endif
                            <a class="btn-floating btn-large halfway-fab cyan darken-3 rank-section__item-count" href="javascript:void(0)">No{{$loop->iteration}}</a>
                        </div>
                        <div class="card-content">
                            <h5 class="rank-section__item-title">{{ $popularLink->title }}</h5>
                            <h5 class="rank-section__item-access cyan-text text-darken-3">
                                <i class="material-icons cyan-text text-darken-3 rank-section__item-access-icon">visibility</i>
                                {{ $popularLink->accesses_count }}
                            </h5>
                            @foreach ($popularLink->tags as $tag)
                                <div class="chip">
                                    <span>{{ $tag->name }}</span>
                                </div>
                            @endforeach
                            <p>{{ $popularLink->description }}</p>
                        </div>
                        <!-- TODO: リンク先へ遷移する前にアクセスレコードを作成する -->
                    </div>
                @endforeach
            </div>
            <!-- TODO: リンクっぽくする -->
            <a class="section__more-link" href="{{ route('LinkLinks') }}">もっとみる</a>
        </div>

    </div>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect waves-light cyan darken-3 floating-btn" href="javascript:void(0)" onclick="moveToTop()">
            <i class="large material-icons ">arrow_upward</i>
        </a>
    </div>
</div>
@endsection

@section('pageJs')
<script type="text/javascript">
    var _accessPostUrl = "{{ route('LinkAccess') }}";
</script>
@endsection

