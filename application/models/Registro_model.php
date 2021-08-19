<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Registro_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get registro by registro_id
     */
    function get_registro($registro_id)
    {
        return $this->db->get_where('registro',array('registro_id'=>$registro_id))->row_array();
    }
        
    /*
     * Get all registro
     */
    function get_all_registro()
    {
        $this->db->order_by('registro_id', 'desc');
        return $this->db->get('registro')->result_array();
    }
        
    /*
     * function to add new registro
     */
    function add_registro($params)
    {
        $this->db->insert('registro',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update registro
     */
    function update_registro($registro_id,$params)
    {
        $this->db->where('registro_id',$registro_id);
        return $this->db->update('registro',$params);
    }
    
    /*
     * function to delete registro
     */
    function delete_registro($registro_id)
    {
        return $this->db->delete('registro',array('registro_id'=>$registro_id));
    }
}
