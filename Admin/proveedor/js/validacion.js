$(function(){
    $(".btn-color").on('click', function(){
        var formulario=document.add_form;

        if($('#id').val() != ""){
            if($('#nombre').val() != ""){
                if($('#descripcion').val() != ""){
                    if($('#direccion').val() != ""){
                        if($('#tel').val() != ""){
                            if($('#corr').val() != ""){
                                if($('#lat').val() != ""){
                                    if($('#long').val() != ""){
                                        formulario.submit();
                                    }else{
                                    Swal.fire({
                                    icon: 'warning',
                                    title: 'Error',
                                    text: 'No ha ingresado la longitud',
                                    });
                                    $('#corr').focus().addClass("is-invalid");
                                    }
                                }else{
                                Swal.fire({
                                icon: 'warning',
                                title: 'Error',
                                text: 'No ha ingresado la latitud',
                                });
                                $('#corr').focus().addClass("is-invalid");
                                }
                            }else{
                            Swal.fire({
                            icon: 'warning',
                            title: 'Error',
                            text: 'No ha ingresado el correo',
                            });
                            $('#corr').focus().addClass("is-invalid");
                            }
                        }else{
                        Swal.fire({
                        icon: 'warning',
                        title: 'Error',
                        text: 'No ha ingresado el telefono',
                        });
                        $('#tel').focus().addClass("is-invalid");
                        }
                    }else{
                    Swal.fire({
                    icon: 'warning',
                    title: 'Error',
                    text: 'No ha ingresado la direccion',
                    });
                    $('#direccion').focus().addClass("is-invalid");
                    }
    
                }else{
                    Swal.fire({
                    icon: 'warning',
                    title: 'Error',
                    text: 'No ha ingresado la descripción del producto',
                    });
                    $('#descripcion').focus().addClass("is-invalid");
                }
    
            }else {
                Swal.fire({
                icon: 'warning',
                title: 'Error',
                text: 'No ha ingresado la el nombre',
                });
                $('#nombre').focus().addClass("is-invalid");
            }

        }else {
            Swal.fire({
            icon: 'warning',
            title: 'Error',
            text: 'No ha ingresado la identificación',
            });
            $('#id').focus().addClass("is-invalid");
        }

    });
});