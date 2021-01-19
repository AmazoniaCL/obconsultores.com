$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#form_solicitar_consulta').submit(function () {
    $.ajax({
        url: '/consultas/solicitar',
        type: 'post',
        data: $('#form_solicitar_consulta').serialize(),
        success: function (data) {
            $('#respuesta_solicitud').removeClass('d-none');
            $('#form_solicitar_consulta')[0].reset();
        }
    });

    return false;
});