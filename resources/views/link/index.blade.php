@extends('layouts.main')
@include('layouts.header')
@include('layouts.sidebar')

@section('pageCss')
@endsection

@section('content')

<div class="wrapper">
    @yield('sidebar')
    <div class="contents">
        <div class="top-section">
            <h3 class="top-section__title">お気に入りのリンクをシェアしよう</h3>
            <div class="top-section__btn-wrapper">
                <button class="btn waves-effect waves-light cyan darken-3 top-section__btn pc" type="button" onclick="showFormModal()">シェアする</button>
                <button class="btn waves-effect waves-light cyan darken-3 top-section__btn sp" type="button" onclick="showFormModalSp()">シェアする</button>
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
                        <a href="">This is a link</a>
                    </div>
                </div>
            </div>
            <!-- TODO: リンクっぽくする -->
            <a class="section__more-link" href="">もっとみる</a>
        </div>

        <div class="section current-link">
            <h4 class="section__title">最近追加されたLink</h4>
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

    <!-- modal -->
    <div id="formModal" class="modal blue-grey darken-3">
        <div class="modal-content">
            <h4 class="form-modal__title">Linkをシェアする</h4>
            <form action="">
                <div class="row form-modal__input-wrapper">
                    <div class="input-field col s12 form-modal__input-text">
                        <input id="inputUrl" name="inputUrl" type="url" class="validate grey-text">
                        <label for="inputUrl">シェアするURL</label>
                    </div>
                </div>
                <div class="row form-modal__input-wrapper">
                    <div class="input-field col s6 form-modal__input-text">
                        <input id="inputName" name="inputName" type="text" class="validate grey-text">
                        <label for="inputName">名前</label>
                    </div>
                </div>
                <div class="row form-modal__input-wrapper">
                    <div class="input-field col s12 form-modal__input-text">
                        <textarea name="inputDescription" id="inputDescription" class="materialize-textarea"></textarea>
                        <label for="inputDescription">Linkの説明</label>
                    </div>
                </div>

                <div class="form-modal__footer">
                    <button type="button" class="btn waves-effect waves-light cyan darken-3 form-modal__btn">シェアする</button>
                    <div style="width: 20px;"></div>
                    <button type="button" class="btn waves-effect waves-light cyan darken-3 form-modal__btn" onclick="closeFormModal()">キャンセル</button>
                </div>
            </form>
        </div>
    </div>

    <div id="formModalSp" class="modal bottom-sheet blue-grey darken-3">
        <div class="modal-content">
            <h4 class="form-modal__title">Linkをシェアする</h4>
            <form action="">
                <div class="row form-modal__input-wrapper">
                    <div class="input-field col s12 form-modal__input-text">
                        <input id="inputUrlSp" name="inputUrlSp" type="url" class="validate grey-text">
                        <label for="inputUrlSp">シェアするURL</label>
                    </div>
                </div>
                <div class="row form-modal__input-wrapper">
                    <div class="input-field col s6 form-modal__input-text">
                        <input id="inputNameSp" name="inputNameSp" type="text" class="validate grey-text">
                        <label for="inputNameSp">名前</label>
                    </div>
                </div>
                <div class="row form-modal__input-wrapper">
                    <div class="input-field col s12 form-modal__input-text">
                        <textarea name="inputDescriptionSp" id="inputDescriptionSp" class="materialize-textarea"></textarea>
                        <label for="inputDescriptionSp">Linkの説明</label>
                    </div>
                </div>

                <div class="form-modal__footer">
                    <button type="button" class="btn waves-effect waves-light cyan darken-3 form-modal__btn">シェアする</button>
                    <div style="width: 20px;"></div>
                    <button type="button" class="btn waves-effect waves-light cyan darken-3 form-modal__btn" onclick="closeFormModalSp()">キャンセル</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('pageJs')
<script type="text/javascript">
</script>
<script type="text/javascript" src="/js/link/index.js"></script>
@endsection

@include('layouts.footer')
