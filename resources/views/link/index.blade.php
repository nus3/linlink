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

        <div class="section">
            <h4 class="section__title">アクセスランキング　Best5</h4>
            <div class="rank-section__items">
                <div class="card rank-section__item">
                    <div class="card-image">
                        <img src="/img/dummy.jpg">
                        <!-- TODO: もうちょっとランキングを目立たせる -->
                        <span class="card-title">No1</span>
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
            <!-- TODO: リンクっぽくする -->
            <a class="section__more-link" href="">もっとみる</a>
        </div>

        <div class="section current-link">
            <h4 class="section__title">最近の追加されたLink</h4>
            <table class="striped section__link-table">
                <thead>
                    <tr>
                        <th>リンク名</th>
                        <th>登録者</th>
                        <th>URL</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- TODO:該当するリンクへ飛ぶ -->
                    <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                    </tr>
                    <tr>
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td>$3.76</td>
                    </tr>
                    <tr>
                        <td>Jonathan</td>
                        <td>Lollipop</td>
                        <td>$7.00</td>
                    </tr>
                </tbody>
            </table>
            <!-- TODO: リンクっぽくする -->
            <a class="section__more-link" href="">もっとみる</a>
        </div>
    </div>
</div>
@endsection

@section('pageJs')
<script type="text/javascript">
</script>
@endsection
