<?php
    include '../../conexion.php';

    session_start();
    if(!isset($_SESSION['rol'])){
        header( 'location:'.$URL.'vistas/login/login.php');
    }else{
        if($_SESSION['rol'] !=1 ){
            header( 'location:'.$URL.'vistas/login/login.php');
        }
    }
    
?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootrap inportacion -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="../../css/estilo.css">
        <!-- Ionic icons -->
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

        <!-- Sweet alerts -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        
        <link rel="icon" type="image/png" href="<?php echo $URL;?>img/icon.png">

        <title>Formulario Proveedor</title>
    </head>

    <body>

        <section class="fixed-top">
            <nav class="navbar navbar-expand-lg navbar-light bg-nav">
                <div class="col-12 btn-group btn-block text-center">
                    <button type="button" class="btn btn-invi dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                                Formularios
                            </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-right" size="3">
                        <a href="../insumos/form_insumo.php"><button class="dropdown-item" type="button">Insumos</button></a>
                        <a href="form_proveedor.php"><button class="dropdown-item" type="button">Proveedor</button></a>
                        <a href="../servicios/form_servicio.php"><button class="dropdown-item" type="button">Servicios</button></a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo $URL; ?>"><button class="dropdown-item" type="button">Inicio</button></a>
                        <a href="<?php echo $URL; ?>/vistas/login/cerrar_sesion.php"><button class="dropdown-item" type="button">Cerrar sesión</button></a>
                    </div>
                </div>
                </ul>
            </nav>
        </section>


        <div class="container formularios col-12 mt-5 p-sm-5">
            <div class="stinky text-center">
                <h2>Formulario Proveedor</h2>
            </div>
            <form action="ingresar_proveedor.php" name="add_form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Identificacion</label>
                    <input type="text" class="form-control" id="id" name="id" placeholder="Identificacion (NIT o CC)">
                </div>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del proveedor">
                </div>
                <div class="form-group">
                    <label>Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" rows="5" placeholder="Ingrese una descripcion del proveedor"></textarea>
                </div>
                <div class="form-group">
                    <label>Imagen</label>
                    <input type="file" class="input-file" id="img1" name="img1" placeholder="Imagen proveedor">
                </div>
                <div class="form-group">
                    <label>Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion del proveedor">
                </div>
                <div class="form-group">
                    <label>Teléfono</label>
                    <input type="text" class="form-control" id="tel" name="tel" placeholder="Telefono del proveedor">
                </div>
                <div class="form-group">
                    <label>Correo</label>
                    <input type="email" class="form-control" id="corr" name="corr" placeholder="Correo del proveedor">
                </div>
                <div class="form-group">
                    <label>Latitud</label>
                    <input type="text" class="form-control" id="lat" name="lat" placeholder="Latitud de la ubicación del proveedor">
                </div>
                <div class="form-group">
                    <label>Longitud</label>
                    <input type="text" class="form-control" id="long" name="long" placeholder="Longitud de la ubicación del proveedor">
                </div>

                <div class="form-group text-center mb-5">
                    <button type="button" class="btn btn-color">Registrar</button>
                </div>

            </form>
            <div class="tabla-admin mt-4">
                <table class="table table-hover">
                    <thead class="thead">
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Latitud</th>
                        <th>Longitud</th>
                        <th></th>
                    </thead>
                    <?php 
                        $sel = $conn ->query("SELECT * FROM tblproveedores");
                        $cont=0;
                        while ($fila = $sel -> fetch_assoc()) {
                            $cont++;
                        ?>
                    <tr>
                        <td>
                            <?php echo $fila['Id_Proveedor'] ?>
                        </td>
                        <td>
                            <?php echo $fila['Nombre'] ?>
                        </td>
                        <td>
                            <?php echo $fila['Descripcion'] ?>
                        </td>
                        <td>
                            <?php echo $fila['Direccion'] ?>
                        </td>
                        <td>
                            <?php echo $fila['Telefono'] ?>
                        </td>
                        <td>
                            <?php echo $fila['Correo'] ?>
                        </td>
                        <td>
                            <?php echo $fila['Latitud'] ?>
                        </td>
                        <td>
                            <?php echo $fila['Longitud'] ?>
                        </td>
                        <td><a href="#" onclick="preguntar(<?php echo $fila['Id_Proveedor']?>)"><button type="button" class="btn btn-primary">ELIMINAR</button></a></td>

                    </tr>
                    <?php } ?>
                </table>
            </div>


        </div>

        </div>
        </div>


        <script type="text/javascript">
        function preguntar(id){
        Swal
            .fire({
                title: "¿Estas seguro de eliminar el proveedor?",
                text: "Esta acción es irreversible, se eliminan todos los insumos y servicios relacionados a este proveedor ¿Desea eliminarlo?",
                icon: 'error',            
                showCancelButton: true,
                confirmButtonText: "Sí, eliminar",
                cancelButtonText: "Cancelar",
            })
            .then(resultado => {
                if (resultado.value) {
                    // Hicieron click en "Sí"
                    //console.log("*se elimina la venta*");
                    window.location.href="eliminar_proveedor.php?Id_Proveedor="+id
                } else {
                    // Dijeron que no
                    console.log("*NO se elimina*");
                }
            });

        }
        </script>


        <?php
        if(isset($_GET['msg'])){
            if($_GET['msg']==1){
        ?>

        <script>
            Swal.fire('Proveedor ingresado correctamente')
        </script>

        <?php
            }else{
                if($_GET['msg']==2){
        ?>

        <script>
            Swal.fire('No se ha podido ingresar el proveedor')
        </script>

        <?php
                }else{
                    if($_GET['msg']==3){
        ?>

        <script>
            Swal.fire('Salida del proveedor hecha correctamente')
        </script>

        <?php
                    }else{
                        if($_GET['msg']==4){
        ?>

        <script>
            Swal.fire('Error en la salida del proveedor')
        </script>

        <?php
                        }else{
                            if($_GET['msg']==5){
        ?>

        <script>
            Swal.fire('Proveedor eliminado correctamente')
        </script>


        <?php
                            }else{
                                if($_GET['msg']==6){
        ?>

        <script>
            Swal.fire('Hubo un error al eliminar el proveedor')
        </script>

        <?php
                            }else{
                                if($_GET['msg']==7){
        ?>

        <script>
            Swal.fire('Proveedor agregado correctamente')
        </script>

        <?php
                            }else{
                                if($_GET['msg']==8){
        ?>

        <script>
            Swal.fire('Hubo un error al agregar el proveedor')
        </script>


        <?php
                                        }   
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        ?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

        <!--validacion de capos vacios-->
        <script type="text/javascript" src="js/validacion.js"></script>
    </body>

    </html>