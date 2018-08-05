
const submitLink = (deviceType) => 
{
    // TODO: ボタンを二回押せないように
    let formElement
    if (deviceType == 'pc') {
        formElement = document.getElementById('linkForm')
    }
    else {
        formElement = document.getElementById('linkFormSp')
    }

    const formData = new FormData(formElement)

    // formData.forEach(function (value, name) {
    //     console.log(value, name);
    // });

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

        setTimeout( () => {
            showModal('doneModal')
            setTimeout(() => {
                closeModal('doneModal')
            }, 3000)
        }, 1000)

    }).fail((jqXHR, textStatus, errorThrown) => {
        console.log('ERROR', jqXHR, textStatus, errorThrown);
        // TODO: エラーページへリダイレクト
    })
}