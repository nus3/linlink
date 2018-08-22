
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
        console.log(data)
        window.open(redirectUrl)

    }).fail((jqXHR, textStatus, errorThrown) => {
        console.log('ERROR', jqXHR, textStatus, errorThrown);
        // TODO: エラーページへリダイレクト
    })
}