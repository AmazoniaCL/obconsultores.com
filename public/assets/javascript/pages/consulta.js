$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#form_solicitar_consulta').submit(function () {
    if($('#numero_validar2').val() == 123 && $('#numero_validar').val() == ''){
        $.ajax({
            url: '/consultas/solicitar',
            type: 'post',
            data: $('#form_solicitar_consulta').serialize(),
            success: function (data) {
                $('#respuesta_solicitud').removeClass('d-none');
                $('#form_solicitar_consulta')[0].reset();
            }
        });
    }else{
        $('#respuesta_solicitud_failed').removeClass('d-none');
        $('#form_solicitar_consulta')[0].reset();
    }
    

    return false;
});

$('#form_contacto_env').submit(function () {
    if($('#numero_validar2').val() == 123 && $('#numero_validar').val() == ''){
        $('#respuesta_solicitud').removeClass('d-none');
        $('#form_contacto_env')[0].reset();
    }else{
        $('#respuesta_solicitud_failed').removeClass('d-none');
        $('#form_contacto_env')[0].reset();
    }
    
    return false;
});