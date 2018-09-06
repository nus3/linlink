
/*
|--------------------------------------------------------------------------
|  materializecss
|--------------------------------------------------------------------------
*/

$(document).ready(function () {
    $('.sidenav').sidenav()
    $('.modal').modal()
    $('.chips').chips()
    $('.chips-placeholder').chips({
        placeholder: 'Enterでタグ追加',
        secondaryPlaceholder: '+タグ',
    })
})


/*
|--------------------------------------------------------------------------
|  navigation
|--------------------------------------------------------------------------
*/

const showFormModal = (modalName, deviceType) => {
    $(`#${modalName}`).modal('open')

    // HACK: 初期値の設定をもっとスマートに
    document.getElementById(`inputTitleError${deviceType}`).innerText = ''
    document.getElementById(`inputUrlError${deviceType}`).innerText = ''
    document.getElementById(`inputDescriptionError${deviceType}`).innerText = ''
    document.getElementById(`inputTagsError${deviceType}`).innerText = ''
    document.getElementById(`inputNameError${deviceType}`).innerText = ''
}

const showModal = (modalName) => {
    $(`#${modalName}`).modal('open')
}

const closeModal = (modalName) => {
    $(`#${modalName}`).modal('close')
}

const moveToTop = () => {
    const moveTo = new MoveTo()
    const target = document.getElementById('top')
    moveTo.move(target)
}

/*
|--------------------------------------------------------------------------
|  modal
|--------------------------------------------------------------------------
*/

const changeTagTitleColor = (eventType) => {
    let colorCode
    if (eventType == 'focus') {
        colorCode = "#ffcc43"
    }else {
        colorCode = "#9e9e9e"
    }

    const tagTitleElements = document.querySelectorAll('.form-modal__tag-title')
    tagTitleElements.forEach(tagTitleElement => {
        tagTitleElement.style.color = colorCode
    })
}


const submitLink = (deviceType) => {
    // TODO: ボタンを二回押せないように
    let formElement
    let tagsElement

    if (deviceType == 'Pc') {
        formElement = document.getElementById('linkForm')
        tagsElement = document.getElementById('tagsPc')
    }
    else {
        formElement = document.getElementById('linkFormSp')
        tagsElement = document.getElementById('tagsSp')
    }

    const tagInstance = M.Chips.getInstance(tagsElement)
    const tags = tagInstance.chipsData
    let tagArray = []
    tags.forEach((tag) => {
        tagArray.push(tag['tag'])
    })
    
    const formData = new FormData(formElement)
    formData.append('inputTags', tagArray)

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    $.ajax({
        url: _createLinkPostUrl,
        method: 'post',
        dataType: 'json',
        data: formData,
        processData: false,
        contentType: false
    }).done((data) => {
        if (deviceType == 'Pc') {
            closeModal('formModal')
        }
        else {
            closeModal('formModalSp')
        }

        // TODO: 登録し終わったら、入力内容をnullにする
        clearLinkForm(deviceType)

        setTimeout(() => {
            showModal('doneModal')
        }, 1000)

    }).fail((data) => {
        const errors = data.responseJSON.errors

        Object.keys(errors).forEach((key) => {
            document.getElementById(`${key}Error${deviceType}`).innerText = errors[key]
        })

        // HACK: errorじゃなかった処理のテキスト消すのスマートにしたい
        if (!errors.hasOwnProperty('inputTitle')) {
            document.getElementById(`inputTitleError${deviceType}`).innerText = ''
        }
        if (!errors.hasOwnProperty('inputUrl')) {
            document.getElementById(`inputUrlError${deviceType}`).innerText = ''
        }
        if (!errors.hasOwnProperty('inputDescription')) {
            document.getElementById(`inputDescriptionError${deviceType}`).innerText = ''
        }
        if (!errors.hasOwnProperty('inputTags')) {
            document.getElementById(`inputTagsError${deviceType}`).innerText = ''
        }
        if (!errors.hasOwnProperty('inputName')) {
            document.getElementById(`inputNameError${deviceType}`).innerText = ''
        }
    })
}

const clearLinkForm = (deviceType) => {
    let formElement
    if (deviceType == 'pc') {
        formElement = document.getElementById('linkForm')
    }
    else {
        formElement = document.getElementById('linkFormSp')
    }
    const formData = new FormData(formElement)

    formData.forEach((value, name) => {
        let elements = document.getElementsByName(name)
        elements.forEach(element => {
            element.value = ''
        })
    })
    M.updateTextFields();

    $('.chips').chips()
    $('.chips-placeholder').chips({
        placeholder: 'Enterでタグ追加',
        secondaryPlaceholder: '+タグ',
    })

}


/*
|--------------------------------------------------------------------------
|  other
|--------------------------------------------------------------------------
*/

const redirectLink = (redirectUrl, linkId) => {
    window.open(redirectUrl)

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    $.ajax({
        url: _accessPostUrl,
        method: 'post',
        dataType: 'json',
        data: {
            'link_id': linkId
        },
    }).done((data) => {
    }).fail((jqXHR, textStatus, errorThrown) => {
        // TODO: エラーをslackに投げる
    })
}