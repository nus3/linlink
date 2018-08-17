
// const submitLink = (deviceType) => 
// {
//     // TODO: ボタンを二回押せないように
//     let formElement
//     if (deviceType == 'pc') {
//         formElement = document.getElementById('linkForm')
//     }
//     else {
//         formElement = document.getElementById('linkFormSp')
//     }

//     const formData = new FormData(formElement)

//     const tagsElement = document.getElementById('tags')
//     const tagInstance = M.Chips.getInstance(tagsElement)
//     const tags = tagInstance.chipsData
//     let tagArray = []
//     tags.forEach((tag) => {
//         tagArray.push(tag['tag'])
//     });

//     formData.append('inputTags', tagArray)

//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     })
     
//     $.ajax({
//         url: '/api/link',
//         method: 'post',
//         dataType: 'json',
//         data: formData,
//         processData: false,
//         contentType: false
//     }).done((data) => {
//         if (deviceType == 'pc') {
//             closeModal('formModal')
//         }
//         else {
//             closeModal('formModalSp')
//         }

//         // TODO: 登録し終わったら、入力内容をnullにする

//         setTimeout( () => {
//             showModal('doneModal')
//         }, 1000)

//     }).fail((jqXHR, textStatus, errorThrown) => {
//         console.log('ERROR', jqXHR, textStatus, errorThrown);
//         // TODO: エラーページへリダイレクト
//     })
// }