<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <!--Scrip css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datatables.min.css">
    <link rel="stylesheet" href="css/bootstrap-clockpicker.css">
    <link rel="stylesheet" href="fullcalendar/main.css">
    <link href="css1/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="css1/tiny-slider.css" rel="stylesheet">
	<link href="css1/style.css" rel="stylesheet">
    <!--Scrip js-->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/datatables.min.js"></script>
    <script src="js/bootstrap-clockpicker.js"></script>
    <script src="js/moment-with-locales.js"></script>
    <script src="fullcalendar/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.5/locales-all.min.js"></script>
</head>

<body>

    <div class="">
        <section class="content-header">
        <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

<div class="container   ">
    <a class="navbar-brand" href="index.html">R. A. S.<span></span></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsFurni">
        <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
            <li >
                <a class="nav-link" href="index.html">Inicio</a>
            </li>
            <li class="nav-item active"><a class="nav-link" href="index.php">Reservar</a></li>
            <li><a class="nav-link" href="comentarios.php">Reseñas eventos</a></li>
            <li><a class="nav-link" href="soporte.php">Soporte</a></li>
            <li><a class="nav-link" href="login/Login.html">Cerrar sesion</a></li>
        </ul>

        <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
            
            <li><img style="height: 80px;" src="imagenes/logo.png" alt="logo"></li>
        </ul>
    </div>
</div>
    
</nav>
        </section>
        
        <div class="row">
            <div class="col-10">
                <div id="Calendario1" style="border: 1px solid black; padding: 2px;"></div>
            </div>

            <div class="col-2">
                <div id="external-events" style="margin-bottom:1em; height: 350px; border: 1px solid black; overflow: auto; padding:1em">
                    <h4 class="text-center">Eventos predefinidos</h4>
                    <div id="listaeventospredefinidos">
                        <?php

                        require("conexion.php");
                        $conexion = regresarConexion(); 

                        $datos = mysqli_query($conexion,"SELECT id, titulo, hora_inicio, hora_fin, color_texto, color_fondo from eventos_definidos");
                        $ep = mysqli_fetch_all($datos, MYSQLI_ASSOC);
                        foreach($ep as $fila){
                            echo "<div class = 'fc-event' data-titulo = '$fila[titulo]' data-hora_fin = '$fila[hora_fin]' data-hora_inicio = '$fila[hora_inicio]' data-color_fondo = '$fila[color_fondo]' data-color_texto = '$fila[color_texto]'
                        style='border-color:$fila[color_fondo];color:$fila[color_texto];background-color:$fila[color_fondo];margin:10px'>
                        $fila[titulo] [" . substr($fila['hora_inicio'],0,5) . " a " .substr($fila['hora_fin'],0,5) . "]
                        </div>";
                        }
                        ?>
                        
                    </div>
                </div>
                <hr>
                <div class="" style="text-align: center;">
                    <button type="button" id="BotonEventosPredefinidos" class="btn btn-success">
                        Administrar eventos prefedinidos
                    </button>
                </div>
            </div>
        </div>
    </div>
  
    <div id="Calendario1" style="border: 1px solid black; padding: 2px;"></div>

    <!-- Formulario de eventos -->
     <div class="modal fade" id ="FormularioEventos" tabindex="-1" role="dialog">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">

                        <span aria-hidden="true">X</span>

                    </button>

                </div>

                    <div class="modal-body">

                        <input type="hidden" id="Id">

                        <div class="form-row">

                            <div class="form-group col-md-12">

                                <label for="">Titulo del Evento:</label>
                                <input type="text" id="Titulo" class="form-control" placeholder="">

                            </div>

                        </div>

                            <div class="form-row">
                                
                                <div class="form-group col-md-6">

                                    <label for="">Fecha de inicio</label>

                                        <div class="input-group" data-autoclose="true">
                                            
                                    <input type="date" id="FechaInicio" class="form-control" value="">

                                </div>

                            </div>
                            <div class="form-group col-md-6" id="TituloHoraInicio">

                                <label for="">Hora de inicio:</label>

                                    <div class="input-group clockpicker" data-autoclose="true">

                                        <input type="text" id="HoraInicio" class="form-control" autocomplete="off">

                                    </div>
                            </div>
                            <div class="form-row">
                                
                                <div class="form-group col-md-6">

                                    <label for="">Fecha de fin:</label>

                                        <div class="input-group" data-autoclose="true">
                                            
                                        <input type="date" id="FechaFin" class="form-control" value="">

                                </div>

                            </div>
                            <div class="form-group col-md-6" id="TituloHoraFin">

                                    <label for="">Hora de fin:</label>

                                        <div class="input-group clockpicker" data-autoclose="true">
                                            
                                    <input type="text" id="HoraFin" class="form-control" autocomplete="off">

                                </div>
                            </div>
                        </div>
                    <div class="form-row">
                         <label for="">Descripcion:</label>
                         <textarea id="Descripcion" class="form-control" rows="3"></textarea>
                    </div>
                    
                    <div class="form-row">
                        <label for="">Color del fondo:</label>
                        <input type="color" value="#3788D8" id="ColorFondo" class="form-control" style="height: 36px;">
                    </div>
                   
                    <div class="form-row">
                        <label for="">Color del texto:</label>
                        <input type="color" value="#ffffff" id="ColorTexto" class="form-control" style="height: 36px;">
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" id="BotonAgregar" class="btn btn-success">Agregar</button>
                <button type="button" id="BotonModificar" class="btn btn-success">Modificar</button>
                <button type="button" id="BotonBorrar" class="btn btn-success">Borrar</button>
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
            </div>

        </div>
    </div>
                        
    <script>

        $('.clockpicker').clockpicker();

        let calendario1 = new FullCalendar.Calendar(document.getElementById('Calendario1'),{
            events: 'datoseventos.php?accion=listar',
            dateClick: function(info){
                limpiarFormurlario()
                $('#BotonAgregar').show();
                $('#BotonModificar').hide();
                $('#BotonBorrar').hide();

                if(info.allDay){
                    $('#FechaInicio').val(info.dateStr);
                    $('#FechaFin').val(info.dateStr);
                }else{
                    let fechaHora = info.dateStr.split("T");
                    $('FechaInicio').val(fechaHora[0]);
                    $('FechaFin').val(fechaHora[0]);
                    $('HoraInicio').val(fechaHora[1].substring(0,5));
                }

                $("#FormularioEventos").modal('show');
            }
        }
        
    );
        calendario1.render();
        
        $('#BotonAgregar').click(function(){
            let registro = recuperarDatosFormulario();
            agregarRegistro(registro);
            $('#FormularioEventos').modal('hide'); 
        });

        function agregarRegistro(registro){
            $.ajax({
                type: 'POST',
                url: 'datoseventos.php?accion=agregar',
                data: registro,
                success: function(msg){
                    calendario1.fetchEvents();
                },
                error: function(error){
                    alert("Hubo un error!: " + error);
                }
            })
        }

        function limpiarFormurlario(){
            $('#Id').val('');
            $('#Titulo').val('');
            $('#Descripcion').val('');
            $('#FechaFin').val('');
            $('#FechaInicio').val('');
            $('#HoraInicio').val('');
            $('#HoraFin').val('');
            $('#ColorFondo').val('#3788D8');
            $('#ColorTexto').val('#ffffff');
        }

        function recuperarDatosFormulario(){
            let registro = {
                id: $('#Id').val(),
                titulo: $('#Titulo').val(),
                descripcion: $('#Descripcion').val(),
                inicio: $('#FechaInicio').val() + ' ' + $('#HoraInicio').val(),
                fin: $('#FechaFin').val() + ' ' + $('#HoraFin').val(),
                color_fondo: $('#ColorFondo').val(),
                color_texto: $('#ColorTexto').val()
            }
            return registro;
        }
        
    </script>


</body>

</html>