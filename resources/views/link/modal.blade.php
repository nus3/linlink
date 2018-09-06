@section('link.modal')
<div id="formModal" class="modal blue-grey darken-3">
    <div class="modal-content">
        <h4 class="form-modal__title">Linkをシェアする</h4>
        <form id="linkForm" name="linkForm">
            <div class="row form-modal__input-wrapper">
                <div class="input-field col s12 form-modal__input-text">
                    <input id="inputTitle" name="inputTitle" type="text" class="validate grey-text">
                    <label for="inputTitle">リンク名</label>
                    <span class="invalid-feedback" role="alert">
                        <strong id="inputTitleErrorPc" class="deep-orange-text"></strong>
                    </span>
                </div>
            </div>

            <div class="row form-modal__input-wrapper">
                <div class="input-field col s12 form-modal__input-text">
                    <input id="inputUrl" name="inputUrl" type="url" class="validate grey-text">
                    <label for="inputUrl">シェアするURL</label>
                    <span class="invalid-feedback" role="alert">
                        <strong id="inputUrlErrorPc" class="deep-orange-text"></strong>
                    </span>
                </div>
            </div>

            <div class="row form-modal__input-wrapper">
                <div class="input-field col s12 form-modal__input-text">
                    <textarea name="inputDescription" id="inputDescription" class="materialize-textarea"></textarea>
                    <label for="inputDescription">Linkの説明</label>
                    <span class="invalid-feedback" role="alert">
                        <strong id="inputDescriptionErrorPc" class="deep-orange-text"></strong>
                    </span>
                </div>
            </div>

            <div class="form-modal__tag-wrapper">
                <p class="form-modal__tag-title">タグ</p>
                <div id="tagsPc" class="chips chips-placeholder">
                    <input class="input" onfocus="changeTagTitleColor(event.type)" onblur="changeTagTitleColor(event.type)">
                </div>
                <span class="invalid-feedback" role="alert">
                    <strong id="inputTagsErrorPc" class="deep-orange-text"></strong>
                </span>
            </div>

            <div class="row form-modal__input-wrapper">
                <div class="input-field col s6 form-modal__input-text">
                    <input id="inputName" name="inputName" type="text" class="validate grey-text">
                    <label for="inputName">ニックネーム</label>
                    <span class="invalid-feedback" role="alert">
                        <strong id="inputNameErrorPc" class="deep-orange-text"></strong>
                    </span>
                </div>
            </div>

            <div class="form-modal__footer">
                <button type="button" class="btn waves-effect waves-light cyan darken-3 form-modal__btn" onclick="submitLink('Pc')">シェアする</button>
                <div style="width: 20px;"></div>
                <button type="button" class="btn waves-effect waves-light cyan darken-3 form-modal__btn" onclick="closeModal('formModal')">キャンセル</button>
            </div>
        </form>
    </div>
</div>

<div id="formModalSp" class="modal bottom-sheet blue-grey darken-3">
    <div class="modal-content">
        <h4 class="form-modal__title">Linkをシェアする</h4>
        <form id="linkFormSp" name="linkFormSp">
            <div class="row form-modal__input-wrapper">
                <div class="input-field col s12 form-modal__input-text">
                    <input id="inputTitleSp" name="inputTitle" type="text" class="validate grey-text">
                    <label for="inputTitleSp">リンク名</label>
                    <span class="invalid-feedback" role="alert">
                        <strong id="inputTitleErrorSp" class="deep-orange-text"></strong>
                    </span>
                </div>
            </div>
            <div class="row form-modal__input-wrapper">
                <div class="input-field col s12 form-modal__input-text">
                    <input id="inputUrlSp" name="inputUrl" type="url" class="validate grey-text">
                    <label for="inputUrlSp">シェアするURL</label>
                    <span class="invalid-feedback" role="alert">
                        <strong id="inputUrlErrorSp" class="deep-orange-text"></strong>
                    </span>
                </div>
            </div>

            <div class="row form-modal__input-wrapper">
                <div class="input-field col s12 form-modal__input-text">
                    <textarea name="inputDescription" id="inputDescriptionSp" class="materialize-textarea"></textarea>
                    <label for="inputDescriptionSp">Linkの説明</label>
                    <span class="invalid-feedback" role="alert">
                        <strong id="inputDescriptionErrorSp" class="deep-orange-text"></strong>
                    </span>
                </div>
            </div>

            <div class="form-modal__tag-wrapper">
                <p class="form-modal__tag-title">タグ</p>
                <div id="tagsSp" class="chips chips-placeholder">
                    <input class="input" onfocus="changeTagTitleColor(event.type)" onblur="changeTagTitleColor(event.type)">
                </div>
                <span class="invalid-feedback" role="alert">
                    <strong id="inputTagsErrorSp" class="deep-orange-text"></strong>
                </span>
            </div>

            <div class="row form-modal__input-wrapper">
                <div class="input-field col s12 form-modal__input-text">
                    <input id="inputNameSp" name="inputName" type="text" class="validate grey-text">
                    <label for="inputNameSp">ニックネーム</label>
                    <span class="invalid-feedback" role="alert">
                        <strong id="inputNameErrorSp" class="deep-orange-text"></strong>
                    </span>
                </div>
            </div>

            <div class="form-modal__footer">
                <button type="button" class="btn waves-effect waves-light cyan darken-3 form-modal__btn" onclick="submitLink('Sp')">シェアする</button>
                <div style="width: 20px;"></div>
                <button type="button" class="btn waves-effect waves-light cyan darken-3 form-modal__btn" onclick="closeModal('formModalSp')">キャンセル</button>
            </div>
        </form>
    </div>
</div>

<div id="doneModal" class="modal blue-grey darken-3">
    <div class="modal-content">
        <p class="form-modal__title done-modal__text">リンクをシェアしました</p>
    </div>
    <div class="common-modal__footer">
        <button type="button" class="btn waves-effect waves-light cyan darken-3 form-modal__btn" onclick="closeModal('doneModal')">閉じる</button>
    </div>
</div>

<div id="errorModal" class="modal blue-grey darken-3">
    <div class="modal-content">
        <p id="errorModalMessage" class="form-modal__title done-modal__text"></p>
    </div>
    <div class="common-modal__footer">
        <button type="button" class="btn waves-effect waves-light cyan darken-3 form-modal__btn" onclick="closeModal('errorModal')">閉じる</button>
    </div>
</div>

<script type="text/javascript">
    var _createLinkPostUrl = "{{ route('LinkCreate') }}";
</script>
@endsection
