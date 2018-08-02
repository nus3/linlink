@section('link.modal')
<div id="formModal" class="modal blue-grey darken-3">
    <div class="modal-content">
        <h4 class="form-modal__title">Linkをシェアする</h4>
        <form id="linkForm" name="linkForm">
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

            <div class="form-modal__tag-wrapper">
                <p class="form-modal__tag-title">タグ</p>
                <div class="chips chips-placeholder">
                    <input class="input" onfocus="changeTagTitleColor(event.type)" onblur="changeTagTitleColor(event.type)">
                </div>
                <!-- TODO: 入力されたタグの取得 -->
            </div>

            <div class="form-modal__footer">
                <button type="button" class="btn waves-effect waves-light cyan darken-3 form-modal__btn" onclick="submitLink('pc')">シェアする</button>
                <div style="width: 20px;"></div>
                <button type="button" class="btn waves-effect waves-light cyan darken-3 form-modal__btn" onclick="closeFormModal()">キャンセル</button>
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
                    <input id="inputUrlSp" name="inputUrl" type="url" class="validate grey-text">
                    <label for="inputUrlSp">シェアするURL</label>
                </div>
            </div>
            
            <div class="row form-modal__input-wrapper">
                <div class="input-field col s6 form-modal__input-text">
                    <input id="inputNameSp" name="inputName" type="text" class="validate grey-text">
                    <label for="inputNameSp">名前</label>
                </div>
            </div>

            <div class="row form-modal__input-wrapper">
                <div class="input-field col s12 form-modal__input-text">
                    <textarea name="inputDescription" id="inputDescriptionSp" class="materialize-textarea"></textarea>
                    <label for="inputDescriptionSp">Linkの説明</label>
                </div>
            </div>

            <div class="form-modal__tag-wrapper">
                <p class="form-modal__tag-title">タグ</p>
                <div class="chips chips-placeholder">
                    <input class="input" onfocus="changeTagTitleColor(event.type)" onblur="changeTagTitleColor(event.type)">
                </div>
            </div>

            <div class="form-modal__footer">
                <button type="button" class="btn waves-effect waves-light cyan darken-3 form-modal__btn" onclick="submitLink('sp')">シェアする</button>
                <div style="width: 20px;"></div>
                <button type="button" class="btn waves-effect waves-light cyan darken-3 form-modal__btn" onclick="closeFormModalSp()">キャンセル</button>
            </div>
        </form>
    </div>
</div>
@endsection
