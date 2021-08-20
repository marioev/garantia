<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Producto extends CI_Controller{
    var $session_data;
    function __construct()
    {
        parent::__construct();
        $this->load->model('Producto_model');
       if ($this->session->userdata('logged_in')) {
            $this->session_data = $this->session->userdata('logged_in');
        }else {
            redirect('', 'refresh');
        }
    }
    /*private function acceso($id_rol){
        $rolusuario = $this->session_data['rol'];
        if($rolusuario[$id_rol-1]['rolusuario_asignado'] == 1){
            return true;
        }else{
            $data['_view'] = 'login/mensajeacceso';
            $this->load->view('layouts/main',$data);
        }
    }*/

    /*
     * Listing of producto
     */
    function index()
    {
        //if($this->acceso(102)) {
        $data['tipousuario_id'] = $this->session_data['tipousuario_id'];
        $data['page_title'] = "Producto";
        $data['_view'] = 'producto/index';
        $this->load->view('layouts/main',$data);
        //}
            
    }

    /*
     * Adding a new producto
     */
    function add()
    {
        //if($this->acceso(103)) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('producto_codigo','Producto Codigo','required');
        $this->form_validation->set_rules('producto_nombre','Producto Nombre','required');
        if($this->form_validation->run())     
        {
            $producto_nombre = $this->input->post('producto_nombre');
            $resultado = $this->Producto_model->es_producto_registrado($producto_nombre);
            if($resultado > 0){
                $data['resultado'] = 1;
                $data['page_title'] = "Producto";
                $data['_view'] = 'producto/add';
                $this->load->view('layouts/main',$data);
            }else{
            /* *********************INICIO imagen***************************** */
            $foto="";
            if (!empty($_FILES['producto_foto']['name'])){
                //$producto_catalogo = 1;
		
                        $this->load->library('image_lib');
                        $config['upload_path'] = './resources/images/productos/';
                        $img_full_path = $config['upload_path'];

                        $config['allowed_types'] = 'gif|jpeg|jpg|png';
                        $config['image_library'] = 'gd2';
                        $config['max_size'] = 0;
                        $config['max_width'] = 0;
                        $config['max_height'] = 0;
                        
                        $new_name = time(); //str_replace(" ", "_", $this->input->post('proveedor_nombre'));
                        $config['file_name'] = $new_name; //.$extencion;
                        $config['file_ext_tolower'] = TRUE;

                        $this->load->library('upload', $config);
                        $this->upload->do_upload('producto_foto');

                        $img_data = $this->upload->data();
                        $extension = $img_data['file_ext'];
                        /* ********************INICIO para resize***************************** */
                        if ($img_data['file_ext'] == ".jpg" || $img_data['file_ext'] == ".png" || $img_data['file_ext'] == ".jpeg" || $img_data['file_ext'] == ".gif") {
                            $conf['image_library'] = 'gd2';
                            $conf['source_image'] = $img_data['full_path'];
                            $conf['new_image'] = './resources/images/productos/';
                            $conf['maintain_ratio'] = TRUE;
                            $conf['create_thumb'] = FALSE;
                            $conf['width'] = 800;
                            $conf['height'] = 600;
                            $this->image_lib->clear();
                            $this->image_lib->initialize($conf);
                            if(!$this->image_lib->resize()){
                                echo $this->image_lib->display_errors('','');
                            }
                        }
                        /* ********************F I N  para resize***************************** */
                        $confi['image_library'] = 'gd2';
                        $confi['source_image'] = './resources/images/productos/'.$new_name.$extension;
                        $confi['new_image'] = './resources/images/productos/'."thumb_".$new_name.$extension;
                        $confi['create_thumb'] = FALSE;
                        $confi['maintain_ratio'] = TRUE;
                        $confi['width'] = 100;
                        $confi['height'] = 100;

                        $this->image_lib->clear();
                        $this->image_lib->initialize($confi);
                        $this->image_lib->resize();

                        $foto = $new_name.$extension;
                    }
            /* *********************FIN imagen***************************** */
            // est estado sera ACTIVO
            $estado_id = 1;
            $params = array(
                'estado_id' => $estado_id,
                //'categoria_id' => $this->input->post('categoria_id'),
                //'presentacion_id' => 1,
                'moneda_id' => $this->input->post('moneda_id'),
                'producto_codigo' => $this->input->post('producto_codigo'),
                'producto_codigobarra' => $this->input->post('producto_codigobarra'),
                'producto_nombre' => $this->input->post('producto_nombre'),
                'producto_unidad' => $this->input->post('producto_unidad'),
                'producto_marca' => $this->input->post('producto_marca'),
                'producto_industria' => $this->input->post('producto_industria'),
                'producto_costo' => $this->input->post('producto_costo'),
                'producto_precio' => $this->input->post('producto_precio'),
                'producto_foto' => $foto,
                'producto_comision' => $this->input->post('producto_comision'),
                //'producto_tipocambio' => $this->input->post('producto_tipocambio'),
                /*'producto_factor' => $this->input->post('producto_factor'),
                'producto_unidadfactor' => $this->input->post('producto_unidadfactor'),
                'producto_codigofactor' => $this->input->post('producto_codigofactor'),
                'producto_preciofactor' => $this->input->post('producto_preciofactor'),
                'producto_factor1' => $this->input->post('producto_factor1'),
                'producto_unidadfactor1' => $this->input->post('producto_unidadfactor1'),
                'producto_codigofactor1' => $this->input->post('producto_codigofactor1'),
                'producto_preciofactor1' => $this->input->post('producto_preciofactor1'),
                'producto_factor2' => $this->input->post('producto_factor2'),
                'producto_unidadfactor2' => $this->input->post('producto_unidadfactor2'),
                'producto_codigofactor2' => $this->input->post('producto_codigofactor2'),
                'producto_preciofactor2' => $this->input->post('producto_preciofactor2'),
                'producto_factor3' => $this->input->post('producto_factor3'),
                'producto_unidadfactor3' => $this->input->post('producto_unidadfactor3'),
                'producto_codigofactor3' => $this->input->post('producto_codigofactor3'),
                'producto_preciofactor3' => $this->input->post('producto_preciofactor3'),
                'producto_factor4' => $this->input->post('producto_factor4'),
                'producto_unidadfactor4' => $this->input->post('producto_unidadfactor4'),
                'producto_codigofactor4' => $this->input->post('producto_codigofactor4'),
                'producto_preciofactor4' => $this->input->post('producto_preciofactor4'),
                */
                'producto_ultimocosto' => $this->input->post('producto_costo'),
                //'producto_cantidadminima' => $this->input->post('producto_cantidadminima'),
                'producto_caracteristicas' => $this->input->post('producto_caracteristicas'),
                /*'producto_envase' => $this->input->post('producto_envase'),
                'producto_nombreenvase' => $this->input->post('producto_nombreenvase'),
                'producto_costoenvase' => $this->input->post('producto_costoenvase'),
                'producto_precioenvase' => $this->input->post('producto_precioenvase'),
                'destino_id' => $this->input->post('destino_id'),
                'producto_principioact' => $this->input->post('producto_principioact'),
                'producto_accionterap' => $this->input->post('producto_accionterap'),
                'producto_cantidadenvase' => $this->input->post('producto_cantidadenvase'),
                'subcategoria_id' => $this->input->post('subcategoria_id'),
                */
                'producto_unidadentera' => $this->input->post('producto_unidadentera'),
                //'producto_catalogo' => $producto_catalogo,
            );
            
            $producto_id = $this->Producto_model->add_producto($params);
            /*$this->load->model('Inventario_model');
            $this->Inventario_model->ingresar_producto_inventario($producto_id);
            */
            redirect('producto');
        }
        }else{
            $data['resultado'] = 0;
            $data['page_title'] = "Producto";
            $data['_view'] = 'producto/add';
            $this->load->view('layouts/main',$data);
        }
        //}
          
    }  

    /*
     * Editing a producto
     */
    function edit($producto_id)
    {
        //if($this->acceso(107)) {
        // check if the producto exists before trying to edit it
        $data['producto'] = $this->Producto_model->get_esteproducto($producto_id);
        if(isset($data['producto']['producto_id']))
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('producto_codigo','Producto Codigo','required');
            $this->form_validation->set_rules('producto_nombre','Producto Nombre','required');

            if($this->form_validation->run())     
            {
                $producto_catalogo = $this->input->post('producto_catalogo');
                /* *********************INICIO imagen***************************** */
                $foto="";
                    $foto1= $this->input->post('producto_foto1');
                if (!empty($_FILES['producto_foto']['name']))
                {
                    $producto_catalogo = 1;
                    $this->load->library('image_lib');
                    $config['upload_path'] = './resources/images/productos/';
                    $config['allowed_types'] = 'gif|jpeg|jpg|png';
                    $config['max_size'] = 0;
                    $config['max_width'] = 0;
                    $config['max_height'] = 0;

                    $new_name = time(); //str_replace(" ", "_", $this->input->post('proveedor_nombre'));
                    $config['file_name'] = $new_name; //.$extencion;
                    $config['file_ext_tolower'] = TRUE;

                    $this->load->library('upload', $config);
                    $this->upload->do_upload('producto_foto');

                    $img_data = $this->upload->data();
                    $extension = $img_data['file_ext'];
                    /* ********************INICIO para resize***************************** */
                    if($img_data['file_ext'] == ".jpg" || $img_data['file_ext'] == ".png" || $img_data['file_ext'] == ".jpeg" || $img_data['file_ext'] == ".gif") {
                        $conf['image_library'] = 'gd2';
                        $conf['source_image'] = $img_data['full_path'];
                        $conf['new_image'] = './resources/images/productos/';
                        $conf['maintain_ratio'] = TRUE;
                        $conf['create_thumb'] = FALSE;
                        $conf['width'] = 800;
                        $conf['height'] = 600;
                        $this->image_lib->clear();
                        $this->image_lib->initialize($conf);
                        if(!$this->image_lib->resize()){
                            echo $this->image_lib->display_errors('','');
                        }
                    }
                    /* ********************F I N  para resize***************************** */
                    //$directorio = base_url().'resources/imagenes/';
                    $base_url = explode('/', base_url());
                    //$directorio = FCPATH.'resources\images\productos\\';
                    $directorio = $_SERVER['DOCUMENT_ROOT'].'/'.$base_url[3].'/resources/images/productos/';
                    //$directorio = $_SERVER['DOCUMENT_ROOT'].'/ximpleman_web/resources/images/productos/';
                    if(isset($foto1) && !empty($foto1)){
                      if(file_exists($directorio.$foto1)){
                          unlink($directorio.$foto1);
                          //$mimagenthumb = str_replace(".", "_thumb.", $foto1);
                          $mimagenthumb = "thumb_".$foto1;
                          if(file_exists($directorio.$mimagenthumb)){
                              unlink($directorio.$mimagenthumb);
                          }
                      }
                  }
                    $confi['image_library'] = 'gd2';
                    $confi['source_image'] = './resources/images/productos/'.$new_name.$extension;
                    $confi['new_image'] = './resources/images/productos/'."thumb_".$new_name.$extension;
                    $confi['create_thumb'] = FALSE;
                    $confi['maintain_ratio'] = TRUE;
                    $confi['width'] = 100;
                    $confi['height'] = 100;

                    $this->image_lib->clear();
                    $this->image_lib->initialize($confi);
                    $this->image_lib->resize();

                    $foto = $new_name.$extension;
                }else{
                    $foto = $foto1;
                }
            /* *********************FIN imagen***************************** */
                $params = array(
                    'estado_id' => $this->input->post('estado_id'),
                    //'categoria_id' => $this->input->post('categoria_id'),
                //'presentacion_id' => 1,
                'moneda_id' => $this->input->post('moneda_id'),
                'producto_codigo' => $this->input->post('producto_codigo'),
                'producto_codigobarra' => $this->input->post('producto_codigobarra'),
                'producto_nombre' => $this->input->post('producto_nombre'),
                'producto_unidad' => $this->input->post('producto_unidad'),
                'producto_marca' => $this->input->post('producto_marca'),
                'producto_industria' => $this->input->post('producto_industria'),
                'producto_costo' => $this->input->post('producto_costo'),
                'producto_precio' => $this->input->post('producto_precio'),
                'producto_foto' => $foto,
                'producto_comision' => $this->input->post('producto_comision'),
                //'producto_tipocambio' => $this->input->post('producto_tipocambio'),
                /*'producto_factor' => $this->input->post('producto_factor'),
                'producto_unidadfactor' => $this->input->post('producto_unidadfactor'),
                'producto_codigofactor' => $this->input->post('producto_codigofactor'),
                'producto_preciofactor' => $this->input->post('producto_preciofactor'),
                'producto_factor1' => $this->input->post('producto_factor1'),
                'producto_unidadfactor1' => $this->input->post('producto_unidadfactor1'),
                'producto_codigofactor1' => $this->input->post('producto_codigofactor1'),
                'producto_preciofactor1' => $this->input->post('producto_preciofactor1'),
                'producto_factor2' => $this->input->post('producto_factor2'),
                'producto_unidadfactor2' => $this->input->post('producto_unidadfactor2'),
                'producto_codigofactor2' => $this->input->post('producto_codigofactor2'),
                'producto_preciofactor2' => $this->input->post('producto_preciofactor2'),
                'producto_factor3' => $this->input->post('producto_factor3'),
                'producto_unidadfactor3' => $this->input->post('producto_unidadfactor3'),
                'producto_codigofactor3' => $this->input->post('producto_codigofactor3'),
                'producto_preciofactor3' => $this->input->post('producto_preciofactor3'),
                'producto_factor4' => $this->input->post('producto_factor4'),
                'producto_unidadfactor4' => $this->input->post('producto_unidadfactor4'),
                'producto_codigofactor4' => $this->input->post('producto_codigofactor4'),
                'producto_preciofactor4' => $this->input->post('producto_preciofactor4'),
                */
                'producto_ultimocosto' => $this->input->post('producto_costo'),
                //'producto_cantidadminima' => $this->input->post('producto_cantidadminima'),
                'producto_caracteristicas' => $this->input->post('producto_caracteristicas'),
                /*'producto_envase' => $this->input->post('producto_envase'),
                'producto_nombreenvase' => $this->input->post('producto_nombreenvase'),
                'producto_costoenvase' => $this->input->post('producto_costoenvase'),
                'producto_precioenvase' => $this->input->post('producto_precioenvase'),
                'destino_id' => $this->input->post('destino_id'),
                'producto_principioact' => $this->input->post('producto_principioact'),
                'producto_accionterap' => $this->input->post('producto_accionterap'),
                'producto_cantidadenvase' => $this->input->post('producto_cantidadenvase'),
                'subcategoria_id' => $this->input->post('subcategoria_id'),
                */
                'producto_unidadentera' => $this->input->post('producto_unidadentera'),
                //'producto_catalogo' => $producto_catalogo,
                );

                $this->Producto_model->update_producto($producto_id,$params);
                redirect('producto');
            }
            else
            {
                /*$this->load->model('Estado_model');
                $data['all_estado'] = $this->Estado_model->get_all_estado_activo_inactivo();

                $this->load->model('Categoria_producto_model');
                $data['all_categoria_producto'] = $this->Categoria_producto_model->get_all_categoria_producto();
                
                $this->load->model('Subcategoria_producto_model');
                $data['all_subcategoria_producto'] = $this->Subcategoria_producto_model->get_all_subcategoria_de_categoria($data['producto']['categoria_id']);
                
                $this->load->model('Presentacion_model');
                $data['all_presentacion'] = $this->Presentacion_model->get_all_presentacion();
                $data['unidades'] = $this->Producto_model->get_all_unidad();
                
                $this->load->model('Destino_producto_model');
                $data['all_destino_producto'] = $this->Destino_producto_model->get_all_destino_producto();
                
                $this->load->model('Parametro_model');
                $data['parametro'] = $this->Parametro_model->get_parametro(1);
        
                $this->load->model('Moneda_model');
                $data['all_moneda'] = $this->Moneda_model->get_all_moneda();*/
                $data['page_title'] = "Producto";
                $data['_view'] = 'producto/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The producto you are trying to edit does not exist.');
        //}
          
    }
    
    /*
    * buscar productos
    */
    function buscarproductos()
    {
        //if($this->acceso(102)) {
        //$usuario_id = $this->session_data['usuario_id'];
        if ($this->input->is_ajax_request()) {
            
            $parametro       = $this->input->post('parametro');   
            $categoriaestado = ""; //$this->input->post('categoriaestado');   
            
            //if ($parametro!=""){
                $datos = $this->Producto_model->get_busqueda_producto_parametro($parametro, $categoriaestado);
            //$datos = $this->Inventario_model->get_inventario_bloque();
            echo json_encode($datos);
            /*}else{
                $datos = $this->Producto_model->get_busqueda_producto_limite();
                echo json_encode($datos);
            } */
        }
        else
        {                 
            show_404();
        }
        //}
           
    }
    /*
    * buscar productos con LIMITE
    */
    function buscarproductoslimit()
    {
        //if($this->acceso(102)) {
        //$usuario_id = $this->session_data['usuario_id'];

        if ($this->input->is_ajax_request()) {
            
            //$parametro = $this->input->post('parametro');   
            
            $datos = $this->Producto_model->get_busqueda_producto_limite();
            //$datos = $this->Inventario_model->get_inventario_bloque();
            echo json_encode($datos);
        }
        else
        {                 
            show_404();
        }
         
        //}
    }
    /*
    * buscar productos ALL
    */
    function buscarproductosall()
    {
        //if($this->acceso(104)) {
        //$usuario_id = $this->session_data['usuario_id'];

            if ($this->input->is_ajax_request()) {

                //$parametro = $this->input->post('parametro');   

                $datos = $this->Producto_model->get_busqueda_productos_all();
                //$datos = $this->Inventario_model->get_inventario_bloque();
                echo json_encode($datos);
            }
            else
            {                 
                show_404();
            }
        //}
            
    }
}
