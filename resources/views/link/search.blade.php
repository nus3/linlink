@extends('layouts.main')

@include('layouts.sidebar')
@include('link.modal')

@section('pageCss')
@endsection

@section('content')
<div class="wrapper">
    @yield('sidebar')
    <div class="contents container">
        <div class="search-section">
            <h4 class="section__title">Linkを探す</h4>
            <form id="searchForm" method="get" action="{{ route('LinkFind') }}" class="search-section__form">
                <div id="searchTags" class="chips chips-placeholder">
                    <input class="input">
                </div>
                <input id="tagNames" name="tagNames" type="text" class="display-none">
                <button class="btn waves-effect waves-light cyan darken-3" type="button" onclick="submitSearch()">探す</button>
            </form>
            <h5 class="section__title">人気のタグ</h5>
            <div class="search-section__tags">
                @foreach ($tags as $tag)
                    <div class="chip search-section__tag" onclick="addTag('tag{{ $tag->id }}')">
                        <span id="tag{{ $tag->id }}">{{ $tag->name }}</span>( {{$tag->links_count}} )
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="fixed-action-btn sp">
        <a class="btn-floating btn-large waves-effect waves-light cyan darken-3 floating-btn" href="javascript:void(0)" onclick="moveToTop()">
            <i class="large material-icons ">arrow_upward</i>
        </a>
    </div>

    @yield('link.modal')
</div>
@endsection

@section('pageJs')
<script type="text/javascript">
</script>
<script type="text/javascript" src="{{ asset('/js/link/search.js') }}"></script>
@endsection

