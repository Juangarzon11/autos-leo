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

        if($('#nombre').val() != ""){
            if($('#apellido').val() != ""){
                if($('#cedula').val() != 0){
                    if($('#celular').val() != 0){
                        if($('#ciudad').val() != ""){
                            if($('#direccion').val() != ""){
                                if($('#correo').val() != ""){
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
                                    }

                                } else {
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Ups...',
                                        text: 'No ha ingresado el correo',
                                    });
                                    $('#correo').focus().addClass("is-invalid");
                                }
                                
                            } else {
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Ups...',
                                    text: 'No ha ingresado la dirección',
                                });
                                $('#direccion').focus().addClass("is-invalid");
                            }

                        } else {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Ups...',
                                text: 'No ha ingresado la ciudad de residencia',
                            });
                            $('#ciudad').focus().addClass("is-invalid");
                        }

                    } else {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Ups...',
                            text: 'No ha ingresado el número de celular',
                        });
                        $('#celular').focus().addClass("is-invalid");
                    }

                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Ups...',
                        text: 'No ha ingresado el número de cédula',
                    });
                    $('#cedula').focus().addClass("is-invalid");
                }

            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Ups...',
                    text: 'No ha ingresado los apellidos',
                });
                $('#apellido').focus().addClass("is-invalid");
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

    });
});