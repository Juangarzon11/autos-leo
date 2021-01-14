$(function(){
    $(".btn-color").on('click', function(){
        var formulario=document.add_form;

        if($('#tiposervicio').val() != ""){
            if($('#descripcion').val() != ""){
                if($('#valor').val() != ""){
                    if($('#proveedor').val() != "0"){
                        formulario.submit();
                    }else{
                    Swal.fire({
                    icon: 'warning',
                    title: 'Error',
                    text: 'No ha seleccionado un proveedor',
                    });
                    $('#proveedor').focus().addClass("is-invalid");
                    }
                }else{
                Swal.fire({
                icon: 'warning',
                title: 'Error',
                text: 'No ha ingresado el valor del servicio',
                });
                $('#valor').focus().addClass("is-invalid");
                }

            }else{
                Swal.fire({
                icon: 'warning',
                title: 'Error',
                text: 'No ha ingresado la descripción del servicio',
                });
                $('#descripcion').focus().addClass("is-invalid");
            }

        }else {
            Swal.fire({
            icon: 'warning',
            title: 'Error',
            text: 'No ha ingresado el tipo de servicio',
            });
            $('#tiposervicio').focus().addClass("is-invalid");
        }

    });
});