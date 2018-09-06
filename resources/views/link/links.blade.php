@extends('layouts.main')

@include('layouts.sidebar')

@section('pageCss')
@endsection

@section('content')
<!-- TODO: ペジネーションの際はローディング処理をしない -->
<!-- <div class="load-wrapper teal lighten-5">
    <div class="load">
        <hr/><hr/><hr/><hr/>
    </div>
</div> -->

<div class="wrapper">
    @yield('sidebar')
    <div class="contents">
        <div class="section">
            <h4 class="section__title">Link一覧</h4>
            <div class="rank-section__items">
                @foreach ($links as $link)
                    <div class="card rank-section__item" onclick="redirectLink('{{ $link->url }}', '{{ $link->id }}')">
                        <div class="card-image">
                            @if(is_null($link->ogp_url))
                                <img src="{{ asset('/img/no_image.png') }}">
                            @else
                                <img src="{{ $link->ogp_url }}">
                            @endif
                        </div>
                        <div class="card-content">
                            <h5 class="rank-section__item-title">{{ $link->title }}</h5>
                            <h6 class="cyan-text text-darken-3">【{{ $link->name }}】</h6>
                            <h5 class="rank-section__item-access cyan-text text-darken-3">
                                <i class="material-icons cyan-text text-darken-3 rank-section__item-access-icon">visibility</i>
                                {{ $link->accesses_count }}
                            </h5>
                            @foreach ($link->tags as $tag)
                                <div class="chip">
                                    <span>{{ $tag->name }}</span>
                                </div>
                            @endforeach
                            <p>{{ $link->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            @if (Request::is('find'))
                {{ $links->appends(['tagNames' => $tagNames])->links('layouts.pagination') }}
            @else
                {{ $links->links('layouts.pagination') }}
            @endif
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
