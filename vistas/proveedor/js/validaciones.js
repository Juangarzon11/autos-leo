$(document).ready(function() {

    $('#con2').keyup(function() {

        var pass1 = $('#con1').val();
        var pass2 = $('#con2').val();

        if (pass1 == pass2) {
            $('#error2').text("Coinciden").css("color", "green");
        } else {
            $('#error2').text("No Coinciden").css("color", "red");
        }

    });
    $('#pass1').keyup(function() {

        var pass1 = $('#con1').val();
        var pass2 = $('#con2').val();

        if (pass1 == pass2 || pass2 == pass1) {
            $('#error2').text("Coinciden").css("color", "green");
        } else {
            $('#error2').text("No Coinciden").css("color", "red");
        }

    });

    function kotoba() {
        $("#result").val($("#nombre").val().length + " Caracteres");
        alert("campo vacio");
    }
});

$(function(){
    $(".btn-color").on('click', function(){
        var formulario= document.add_form;

        if($('#rut').val() != 0){
            if($('#nombre').val() != ""){
                if($('#celular').val() != ""){
                    if($('#telefono').val() != ""){
                        if($('#correo').val() != ""){
                            if($('#direccion').val() != ""){
                                if($('#con1').val() != ""){
                                    if($('#con2').val() != ""){
                                        if($('#con1').val() == $('#con2').val()){
                                            formulario.submit();

                                        } else {
                                            Swal.fire({
                                                icon: 'warning',
                                                title: 'Error',
                                                text: 'Las Contraseñas Ingresadas no Coinciden',
                                            });
                                        }

                                    } else {
                                        Swal.fire({
                                            icon: 'warning',
                                            title: 'Ups...',
                                            text: 'No ha confirmado la contraseña',
                                        });
                                        $('#con2').focus().addClass("is-invalid");
                                    }

                                } else {
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Ups...',
                                        text: 'No ha ingresado la contraseña',
                                    });
                                    $('#con1').focus().addClass("is-invalid");
                                    elemento.blur();
                                }

                            } else {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Ups...',
                                    text: 'No ha ingresado la dirección',
                                });
                                $('#direccion').focus().addClass("is-invalid");
                                elemento.blur();
                            }

                        } else {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Ups...',
                                text: 'No ha ingresado el correo',
                            });
                            $('#correo').focus().addClass("is-invalid");
                            elemento.blur();
                        }

                    } else {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Ups...',
                            text: 'No ha ingresado el número telefónico',
                        });
                        $('#telefono').focus().addClass("is-invalid");
                        elemento.blur();
                    }

                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Ups...',
                        text: 'No ha ingresado el número de celular',
                    });
                    $('#celular').focus().addClass("is-invalid");
                    elemento.blur();
                }

            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Ups...',
                    text: 'No ha ingresado el nombre',
                });
                $('#nombre').focus().addClass("is-invalid");
                elemento.blur();
            }


        } else {
            Swal.fire({
                icon: 'warning',
                title: 'Ups...',
                text: 'No ha ingresado el RUT de la empresa',
            });
            $('#rut').focus().addClass("is-invalid");
            elemento.blur();
        }

    });
});