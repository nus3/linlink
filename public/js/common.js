
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

const showFormModal = () => {
    $('#formModal').modal('open');
}

const closeFormModal = () => {
    $('#formModal').modal('close');
}

const showFormModalSp = () => {
    $('#formModalSp').modal('open');
}

const closeFormModalSp = () => {
    $('#formModalSp').modal('close');
}

const moveToTop = () => {
    const moveTo = new MoveTo();
    const target = document.getElementById('top');
    moveTo.move(target);
}