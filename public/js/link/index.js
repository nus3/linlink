
const submitLink = (deviceType) => 
{
    let formElement

    // formDataの取得
    if (deviceType == 'pc') {
        formElement = document.getElementById('linkForm')
    }
    else {
        formElement = document.getElementById('linkFormSp')
    }

    const formData = new FormData(formElement)

    formData.forEach(function (value, name) {
        console.log(value, name);
    });

    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // })
     
    // $.ajax({
    //     url: postsUrl,
    //     method: 'post',
    //     dataType: 'json',
    //     data: formData,
    //     //ajaxがdataを整形しない指定
    //     processData: false,
    //     contentType: false
    // }).done(function (data) {
    //     concole.log(data)

    // }).fail(function (jqXHR, textStatus, errorThrown) {
    //     console.log('ERROR', jqXHR, textStatus, errorThrown);
    //     showErrorMessage(jqXHR);
    // })
}