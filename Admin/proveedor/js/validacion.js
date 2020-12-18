$(function(){
    $(".btn-color").on('click', function(){
        var formulario=document.add_form;

        if($('#id').val() != ""){
            if($('#nombre').val() != ""){
                if($('#descripcion').val() != ""){
                    if($('#direccion').val() != ""){
                        if($('#tel').val() != ""){
                            if($('#corr').val() != ""){
                                formulario.submit();
                            }else{
                            Swal.fire({
                            icon: 'warning',
                            title: 'Error',
                            text: 'No ha ingresado el correo',
                            });
                            $('#valorunitario').focus().addClass("is-invalid");
                            }
                        }else{
                        Swal.fire({
                        icon: 'warning',
                        title: 'Error',
                        text: 'No ha ingresado el telefono',
                        });
                        $('#valorunitario').focus().addClass("is-invalid");
                        }
                    }else{
                    Swal.fire({
                    icon: 'warning',
                    title: 'Error',
                    text: 'No ha ingresado la direccion',
                    });
                    $('#valorunitario').focus().addClass("is-invalid");
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
                $('#cantidad').focus().addClass("is-invalid");
            }

        }else {
            Swal.fire({
            icon: 'warning',
            title: 'Error',
            text: 'No ha ingresado la identificación',
            });
            $('#cantidad').focus().addClass("is-invalid");
        }

    });
});