@extends('layouts.main')
@include('layouts.header')
@include('layouts.sidebar')
@include('layouts.footer')

@section('pageCss')
@endsection

@section('content')

<div class="wrapper">
    @yield('sidebar')
    <div class="contents">
        <div class="top-section">
            <h3 class="top-section__title">お気に入りのリンクをシェアしよう</h3>
            <div class="top-section__btn-wrapper">
                <button class="btn waves-effect waves-light cyan darken-3 top-section__btn">シェアする</button>
            </div>
        </div>

        <div class="rank-section">
            <h4 class="rank-section__title">アクセスランキング　Best5</h4>
            <div class="rank-section__items">
                <div class="card rank-section__item">
                    <div class="card-image">
                        <img src="/img/dummy.jpg">
                        <!-- TODO: もうちょっとランキングを目立たせる -->
                        <span class="card-title">No1</span>
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
                        <span class="card-title">No2</span>
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
                        <span class="card-title">No3</span>
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
                        <span class="card-title">No4</span>
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
                        <span class="card-title">No5</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.
                        I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('pageJs')
<script type="text/javascript">
</script>
@endsection
