@extends('layouts.main')

@include('layouts.sidebar')
@include('link.modal')

@section('pageCss')
@endsection

@section('content')
<div class="load-wrapper teal lighten-5">
    <div class="load">
        <hr/><hr/><hr/><hr/>
    </div>
</div>

<div class="wrapper">
    @yield('sidebar')
    <div class="contents">
        <div class="section">
            <h4 class="section__title">Link</h4>
            <div class="rank-section__items">
                <div class="card rank-section__item">
                    <div class="card-image">
                        <img src="/img/dummy.jpg">
                    </div>
                    <div class="card-content">
                        <!-- TODO: イイネボタンの配置 -->
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>

                <div class="card rank-section__item">
                    <div class="card-image">
                        <img src="/img/dummy.jpg">
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>

                <div class="card rank-section__item">
                    <div class="card-image">
                        <img src="/img/dummy.jpg">
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>

                <div class="card rank-section__item">
                    <div class="card-image">
                        <img src="/img/dummy.jpg">
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>

                <div class="card rank-section__item">
                    <div class="card-image">
                        <img src="/img/dummy.jpg">
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="">This is a link</a>
                    </div>
                </div>
            </div>

            <!-- TODO: ここにペジネーション -->
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
<script type="text/javascript" src="/js/link/load.js"></script>
@endsection
