<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Registro_model');
        
    }

    function index()
    {
        $data['_view'] = 'dashboard/index';
        $this->load->view('layouts/app',$data);
    }

    function buscarSerie(){
        
        if ($this->input->is_ajax_request()) {

            $serie = $this->input->post('serie');

            $datos = $this->Registro_model->get_detalle_serie($serie);

            echo json_encode($datos);
        }   
        else
        {                 
            show_404();
        }
        
    }
}
