function limpiar(){
    document.getElementById('modal_garantia_producto').innerHTML ="";
}

function buscador() {
    limpiar();
    document.getElementById('modal_garantia_producto').innerHTML += "<div class='input-group'><input type='text' class='form-control' id='n_garantia' placeholder='Escribe el número de seria del producto' required><span class='input-group-btn'><button class='btn btn-default' type='button' onclick='validarCampos()'>Buscar</button></span> </div><span id='mensaje' class='oculto' style='color: rgb(223, 28, 28);'>Se debe de rellenar este campo</span>";
}

function validarCampos(){
    var serie = document.getElementById('n_garantia').value;
    var input = document.getElementById('n_garantia');
    var mensaje = document.getElementById('mensaje');
    console.log("valor de serie: "+serie)
    if(serie != null && serie != ''){
        console.log("se valido");
        buscarGarantia();
    }else{
        input.className += ' border-danger';
        mensaje.className += 'none';

        console.log("se valido los campos");
    }
}

function buscarGarantia(){
    var serie = document.getElementById('n_garantia').value;
    limpiar();
    var base_url    = document.getElementById('base_url').value;
    var controlador = "Dashboard/buscarSerie";
    $.ajax({url: controlador,
        type:"POST",
        data:{serie:serie},

        success:function(result){
            var resultado =  JSON.parse(result);
            var fecha_actual = document.getElementById('fecha_actual').value;
            if(resultado[0] != null){
                html = "";
                html += "<div class='row'>"
                html +=    "<div class='col-md-12'>"
                if(fecha_actual >= resultado[0]['registro_fecha'] && fecha_actual <= resultado[0]['registro_vigencia']){
                    html +=        "<div class='panel panel-success'>"
                }else{
                    html +=        "<div class='panel panel-danger'>"
                }
                html +=             "<div class='panel-heading'>"
                html +=                  "<h3 class='text-center'>"
                html +=                         ""+resultado[0]['producto_nombre']+" - "+resultado[0]['producto_marca']+" br>"
                html +=                         "<span style='color: #706F6F; font-size: 15pt;'>Serie N° "+resultado[0]['registro_serie']+"</span>"
                html +=                     "</h3>"
                html +=                 "</div>"
                html +=                 "<div class='panel-body'>"
                html +=                     "<div class='row'>"
                html +=                         "<div class='col-md-4'>"
                html +=                             "<img class='img-responsive img-rounded' src='resources/images/productos/"+resultado[0]['producto_foto']+"' alt=''>"
                html +=                         "</div>"
                html +=                        "<div class='col-md-8'>"
                html +=                            "<p class='color-text'> "+resultado[0]['producto_caracteristicas']+" </p>"
                html +=                        "</div>"
                html +=                    "</div>"
                html +=                "</div>"
                html +=                "<div class='panel-footer "
                if(fecha_actual >= resultado[0]['registro_fecha'] && fecha_actual <= resultado[0]['registro_vigencia']){
                    html+=                  "garantia-success'>"
                    html +=                "LA GARANTIA ESTA VIGENTE"
                }else{
                    html+=                  "garantia-danger'>"
                    html +=                "LA GARANTIA YA NO ESTA VIGENTE"
                }
                html +=                "</div>"
                html +=            "</div>"
                html +=        "</div>"
                html +=    "</div>"
            }else{
                html = "";
                html += "<div class='row'>"
                html +=    "<div class='col-md-12'>"
                html +=        "<div class='panel panel-danger'>"
                html +=             "<div class='panel-heading'>"
                html +=                  "<h3 class='text-center'>"
                html +=                         "PRODUCTO NO ENCONTRADO <br>"
                html +=                     "</h3>"
                html +=                 "</div>"
                html +=                 "<div class='panel-body'>"
                html +=                     "<div class='row'>"
                html +=                         "<div class='col-md-4'>"
                html +=                             "<img class='img-responsive img-rounded' src='http://hoyquiero.com.mx/images/noencontrado.png' alt=''>"
                html +=                         "</div>"
                html +=                        "<div class='col-md-8'>"
                html +=                            "<h3 class='text-center'>PRODUCTO DESCONOCIDO <br> O <br>    INEXISTENTE</h3>"
                html +=                        "</div>"
                html +=                    "</div>"
                html +=                "</div>"
                html +=            "</div>"
                html +=        "</div>"
                html +=    "</div>"
            }
            
            $('#modal_garantia_producto').html(html);
        },
        error:function(resul){
            html = "<div class='row'>"
                html +=    "<div class='col-md-12'>"
                html +=        "<div class='panel panel-info'>"
                html +=             "<div class='panel-heading'>"
                html +=                  "<h3 class='text-center'>"
                html +=                         "A ocurrido un error intente de nuevo"
                html +=                  "</h3>"
                html +=            "</div>"
                html +=        "</div>"
                html +=    "</div>"

            $('#modal_garantia_producto').html(html);
        }
    });
}