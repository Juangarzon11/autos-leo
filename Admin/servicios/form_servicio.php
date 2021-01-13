<?php
    include '../../conexion.php';

    /* session_start();
    if (!isset($_SESSION['rol'])){
        echo "<script> location.href='../../index.php'; </script>";

    }else{
        if($_SESSION['rol']!=1){
            echo "<script> location.href='../../index.php'; </script>";
        }
    } */
    
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
        
        <link rel="icon" type="image/png" href="../../img/icono-pag.png">

        <title>Formulario Servicios</title>
    </head>

    <body>

        <section class="fixed-top">
            <nav class="navbar navbar-expand-lg navbar-light bg-nav">
                <div class="col-12 btn-group btn-block text-center">
                    <button type="button" class="btn btn-invi dropdown-toggle" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                        Formularios
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-right" size="3">
                        <a href="form_insumo.php"><button class="dropdown-item" type="button">Insumos</button></a>
                        <a href="../proveedor/form_proveedor.php"><button class="dropdown-item" type="button">Proveedor</button></a>
                        <a href="../servicios/form_servicio.php"><button class="dropdown-item" type="button">Servicios</button></a>
                        <div class="dropdown-divider"></div>
                        <a href="<?php echo $URL; ?>vistas/login/cerrar_sesion.php"><button class="dropdown-item" type="button">Cerrar sesión</button></a>
                    </div>
                </div>
                </ul>
            </nav>
        </section>


        <div class="container formularios col-12 mt-5 p-sm-5">
            <div class="stinky text-center">
                <h2>Formulario Servicios</h2>
            </div>
            <form action="ingresar_servicio.php" name="add_form" method="post">

                <div class="form-group">
                    <label>Tipo de servicio</label>
                    <input type="text" class="form-control" id="tiposervicio" name="tiposervicio" placeholder="Tipo de servicio">
                </div>
                <div class="form-group">
                    <label>Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion Del Insumo">
                </div>
                <div class="form-group">
                    <label>Valor</label>
                    <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor">
                </div>
                <div class="form-group">
                    <label>Proveedor</label>
                    <select class="form-control" name="proveedor" id="proveedor">
                        <option value="0" selected>-Seleccionar-</option>
                        <?php
                            $sel = $conn->query("SELECT * FROM tblproveedores");
                            while($fila=$sel->fetch_assoc()){
                        ?>
                            <option value="<?php echo $fila['Id_Proveedor'] ?>"><?php echo $fila['Nombre'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group text-center mb-5">
                    <button type="submit" class="btn btn-color">Registrar</button>
                </div>

            </form>
            <div class="tabla-admin mt-4">
                <table class="table table-hover">
                    <thead class="thead">
                        <th>Id</th>
                        <th>Tipo de servicio</th>
                        <th>Descripción</th>
                        <th>Valor</th>
                        <th>Proveedor</th>
                        <th></th>
                    </thead>
                    <?php 
                        $sel = $conn ->query("SELECT `ser`.`Id_Servicio`, `ser`.`Tipo_Servicio`, `ser`.`Descripcion`, `ser`.`Valor`, `pro`.`Nombre`
                        FROM `tblservicios_ofertados` AS `ser` 
                            LEFT JOIN `tblproveedores` AS `pro` ON `ser`.`Id_Proveedor` = `pro`.`Id_Proveedor`;");
                        $cont=0;
                        while ($fila = $sel -> fetch_assoc()) {
                            $cont++;
                        ?>
                    <tr>
                        <td>
                            <?php echo $fila['Id_Servicio'] ?>
                        </td>
                        <td>
                            <?php echo $fila['Tipo_Servicio'] ?>
                        </td>
                        <td>
                            <?php echo $fila['Descripcion'] ?>
                        </td>
                        <td>
                            <?php echo $fila['Valor'] ?>
                        </td>
                        <td>
                            <?php echo $fila['Nombre'] ?>
                        </td>
                        <td><a href="#" onclick="preguntar(<?php echo $fila['Id_Servicio']?>)"><button type="button" class="btn btn-primary">ELIMINAR</button></a></td>

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
                title: "¿Eliminar Servicio?",
                text: "¿Estas seguro de eliminar el servicio?",
                icon: 'error',            
                showCancelButton: true,
                confirmButtonText: "Sí, eliminar",
                cancelButtonText: "Cancelar",
            })
            .then(resultado => {
                if (resultado.value) {
                    // Hicieron click en "Sí"
                    //console.log("*se elimina la venta*");
                    window.location.href="eliminar_servicio.php?Id_Servicio="+id
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
            Swal.fire('Servicio ingresado correctamente')
        </script>

        <?php
            }else{
                if($_GET['msg']==2){
        ?>

        <script>
            Swal.fire('No se ha podido ingresar el servicio')
        </script>

        <?php
                        }else{
                            if($_GET['msg']==5){
        ?>

        <script>
            Swal.fire('Servicio eliminado correctamente')
        </script>


        <?php
                            }else{
                                if($_GET['msg']==6){
        ?>

        <script>
            Swal.fire('Hubo un error al eliminar el servicio')
        </script>



        <?php
                        }
                    }
                }
            }
        }
        ?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    </body>

    </html>