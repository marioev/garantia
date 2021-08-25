$(document).on("ready",inicio);
function inicio(){
    var producto_id = document.getElementById('producto_id').value;
    tablaresultadosregistro(producto_id);
}

/*
 * Funcion que verifica si se apreto la tecla enter
 */
function verificar_enter(e) {
  tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==13){
        registrar_serie();
    }else{
        document.getElementById('mensaje').style.display = 'none';
    }
}
/*
 * Funcion que busca registros de un producto
 */
function buscar_productos(op) {
    if(op == 1){
        document.getElementById('mensaje').style.display = 'none';
    }
    $("#mensaje_producto").html("");
    $("#mensaje_serie").html("");
    $("#mensaje_vigencia").html("");
    var producto_id = document.getElementById('producto_id').value;
    tablaresultadosregistro(producto_id);
}
//funcion que registra la serie de un producto
function registrar_serie(){
    document.getElementById('mensaje').style.display = 'none';
    $("#mensaje_producto").html("");
    $("#mensaje_serie").html("");
    $("#mensaje_vigencia").html("");
    var base_url          = document.getElementById('base_url').value;
    var producto_id       = document.getElementById('producto_id').value;
    var serie_orig        = document.getElementById('serie').value;
    var registro_vigencia = document.getElementById('registro_vigencia').value;
    if(producto_id <= 0){
        $("#mensaje_producto").html("<br>debe elegir un producto");
    }else if(serie_orig.trim() == ""){
        $("#mensaje_serie").html("<br>debe ingresar la serie del producto");
        $("#serie").val("");
    }else if(registro_vigencia == "0000-00-00"){
        $("#mensaje_vigencia").html("<br>debe elegir una fecha");
    }else{
        var serie = serie_orig;
        if(serie_orig.substring(0,3) == "SNÑ"){
            serie = serie_orig.substring(3)
        }
        var controlador = base_url+'registro/registrar_serie';
        document.getElementById('loader').style.display = 'block'; //muestra el bloque del loader
        $.ajax({url: controlador,
                type:"POST",
                data:{producto_id:producto_id, serie:serie, registro_vigencia:registro_vigencia},
                success:function(respuesta){
                    var registros =  JSON.parse(respuesta);
                    if (registros != null){
                        if(registros == "duplicado"){
                            $("#mensaje_serie").html("<br>esta serie ya se encuentra registrado!");
                            $("#serie").focus();
                            $("#serie").select();
                        }else{
                            document.getElementById('mensaje').style.display = 'block'; //muestra el bloque del loader
                            $("#serie").val("");
                            $("#serie").focus();
                            buscar_productos(2);
                            //document.getElementById('mensaje').style.display = 'none';
                            document.getElementById('loader').style.display = 'none';
                        }

                }
                //document.getElementById('mensaje').style.display = 'none';
                document.getElementById('loader').style.display = 'none'; //ocultar el bloque del loader
            },
            error:function(respuesta){
               // alert("Algo salio mal...!!!");
               html = "";
               $("#tablaresultados").html(html);
            },
            complete: function (jqXHR, textStatus) {
                //document.getElementById('mensaje').style.display = 'none';
                document.getElementById('loader').style.display = 'none'; //ocultar el bloque del loader 
                //tabla_inventario();
            }

        });
    }
}
//Tabla resultados de los registros de serie de un producto!.....
function tablaresultadosregistro(producto_id){
    var base_url = document.getElementById('base_url').value;
    controlador = base_url+'registro/buscar_registroproductos';
    document.getElementById('loader').style.display = 'block'; //muestra el bloque del loader
    $.ajax({url: controlador,
            type:"POST",
            data:{producto_id:producto_id},
            success:function(respuesta){
                //$("#encontrados").val("- 0 -");
                var registros =  JSON.parse(respuesta);
                if (registros != null){
                    var n = registros.length; //tamaño del arreglo de la consulta
                    //$("#encontrados").html("Registros Encontrados: "+n+" ");
                    html = "";
                    for (var i = 0; i < n ; i++){
                        html += "<tr>";
                        html += "<td>"+(i+1)+"</td>";
                        html += "<td>"+registros[i]["registro_serie"]+"</td>";
                        html += "<td>"+registros[i]["registro_fecha"]+"</td>";
                        html += "<td>"+registros[i]["registro_hora"]+"</td>";
                        html += "<td>"+registros[i]["registro_vigencia"]+"</td>";
                        html += "<td>"+registros[i]["usuario_nombre"]+"</td>";
                        html += "<td>";
                        html += "<a href='"+base_url+"registro/edit/"+registros[i]["registro_id"]+"' class='btn btn-info btn-xs' title='Modificar Información'><span class='fa fa-pencil'></span></a>";
                        html += "<a onclick='mostrarmodaleliminar("+registros[i]["registro_id"]+", "+JSON.stringify(registros[i]["registro_serie"])+")' class='btn btn-danger btn-xs' title='Eliminar registro'><span class='fa fa-trash'></span></a>";
                        html += "</td>";
                        html += "</tr>";
                   }
                   $("#tablaresultados").html(html);
                   document.getElementById('loader').style.display = 'none';
            }
            document.getElementById('loader').style.display = 'none'; //ocultar el bloque del loader
        },
        error:function(respuesta){
           // alert("Algo salio mal...!!!");
           html = "";
           $("#tablaresultados").html(html);
        },
        complete: function (jqXHR, textStatus) {
            document.getElementById('loader').style.display = 'none'; //ocultar el bloque del loader 
            //tabla_inventario();
        }
    });
}
/* mostrar modal para confirmar eliinacion de un registro */
function mostrarmodaleliminar(registro_id, serie){
    $("#elregistro_id").html(registro_id);
    $("#serie_unica").html(serie);
    $("#modaleliminar").modal('show');
}

function eliminar_registro(){
    document.getElementById('mensaje').style.display = 'none';
    $("#mensaje_producto").html("");
    $("#mensaje_serie").html("");
    $("#mensaje_vigencia").html("");
    var base_url          = document.getElementById('base_url').value;
    var registro_id       = $("#elregistro_id").html();
    var controlador = base_url+'registro/eliminar';
    document.getElementById('loader').style.display = 'block'; //muestra el bloque del loader
    $.ajax({url: controlador,
            type:"POST",
            data:{registro_id:registro_id},
            success:function(respuesta){
                var registros =  JSON.parse(respuesta);
                if (registros != null){
                    buscar_productos(2);
                    document.getElementById('loader').style.display = 'none';
                }
            document.getElementById('loader').style.display = 'none'; //ocultar el bloque del loader
        },
        error:function(respuesta){
           html = "";
           $("#tablaresultados").html(html);
        },
        complete: function (jqXHR, textStatus) {
            document.getElementById('loader').style.display = 'none'; //ocultar el bloque del loader
        }
    });
}