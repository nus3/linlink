@extends('layouts.main')
@include('layouts.header')
@include('layouts.sidebar')
@include('link.modal')

@section('pageCss')
@endsection

@section('content')
<div class="wrapper">
    @yield('sidebar')
    <div class="contents">
        <h4 class="section__title">Linkを探す</h4>

        <!-- TODO: 上下中央ぞろえ -->
        <div class="search-wrapper">
            <form action="" class="search-wrapper__form">
                <div class="chips chips-placeholder">
                    <input class="input">
                    <button type="button">探す</button>
                </div>
            </form>
            <div class="search-wrapper__tags">
                <!-- TODO: タグをボタンぽくする　押すとinputへ登録できるように -->
                <div class="chip">
                    Tag
                    <i class="close material-icons">close</i>
                </div>
                <div class="chip">
                    Tag
                    <i class="close material-icons">close</i>
                </div>
                <div class="chip">
                    Tag
                    <i class="close material-icons">close</i>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed-action-btn">
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
<script type="text/javascript" src="/js/link/index.js"></script>
@endsection

@include('layouts.footer')
