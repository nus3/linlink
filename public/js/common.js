
/*
|--------------------------------------------------------------------------
|  materializecss
|--------------------------------------------------------------------------
*/

$(document).ready(function () {
    $('.sidenav').sidenav();
    $('.modal').modal();
    $('.chips').chips();
    $('.chips-placeholder').chips({
        placeholder: 'Enter a tag',
        secondaryPlaceholder: '+Tag',
    });
});


/*
|--------------------------------------------------------------------------
|  navigation
|--------------------------------------------------------------------------
*/

const showModal = (modalName) => {
    $(`#${modalName}`).modal('open')
}

const closeModal = (modalName) => {
    $(`#${modalName}`).modal('close')
}

const moveToTop = () => {
    const moveTo = new MoveTo();
    const target = document.getElementById('top');
    moveTo.move(target);
}

/*
|--------------------------------------------------------------------------
|  modal
|--------------------------------------------------------------------------
*/

const changeTagTitleColor = (eventType) => {
    let colorCode;
    if (eventType == 'focus') {
        colorCode = "#ffcc43";
    }else {
        colorCode = "#9e9e9e";
    }

    const tagTitleElements = document.querySelectorAll('.form-modal__tag-title');
    tagTitleElements.forEach(tagTitleElement => {
        tagTitleElement.style.color = colorCode;
    });
}


const submitLink = (deviceType) => {
    // TODO: ボタンを二回押せないように
    let formElement
    if (deviceType == 'pc') {
        formElement = document.getElementById('linkForm')
    }
    else {
        formElement = document.getElementById('linkFormSp')
    }

    const formData = new FormData(formElement)

    const tagsElement = document.getElementById('tags')
    const tagInstance = M.Chips.getInstance(tagsElement)
    const tags = tagInstance.chipsData
    let tagArray = []
    tags.forEach((tag) => {
        tagArray.push(tag['tag'])
    });

    console.log(tagArray)

    formData.append('inputTags', tagArray)

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    $.ajax({
        url: '/api/link',
        method: 'post',
        dataType: 'json',
        data: formData,
        processData: false,
        contentType: false
    }).done((data) => {
        if (deviceType == 'pc') {
            closeModal('formModal')
        }
        else {
            closeModal('formModalSp')
        }

        // TODO: 登録し終わったら、入力内容をnullにする

        setTimeout(() => {
            showModal('doneModal')
        }, 1000)

    }).fail((jqXHR, textStatus, errorThrown) => {
        console.log('ERROR', jqXHR, textStatus, errorThrown);
        // TODO: エラーページへリダイレクト
    })
}

/*
|--------------------------------------------------------------------------
|  other
|--------------------------------------------------------------------------
*/

const redirectLink = (redirectUrl, linkId) => {
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
        // console.log(data)
        window.open(redirectUrl)

    }).fail((jqXHR, textStatus, errorThrown) => {
        // console.log('ERROR', jqXHR, textStatus, errorThrown);
        // TODO: エラーページへリダイレクト
    })
}