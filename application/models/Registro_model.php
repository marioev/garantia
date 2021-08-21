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
    
    /* *****Buscar todos los productos****** */
    function get_registrosproducto($producto_id)
    {
        $sql = "SELECT
                    r.*, p.producto_nombre, u.usuario_nombre
                    FROM
                        registro r
                        left join producto p on r.producto_id = p.producto_id
                        left join usuario u on r.usuario_id = u.usuario_id
                    WHERE
                        r.producto_id = $producto_id
                   order by r.registro_id desc";
        $registro = $this->db->query($sql)->result_array();
        return $registro;

    }
    
    function get_detalle_serie($serie){
        $producto = $this->db->query(
            "SELECT r.*, p.producto_foto,p.`producto_nombre`,p.producto_marca, p.producto_caracteristicas
            from registro as r
            left join producto as p on r.`producto_id` = p.`producto_id`
            where r.`registro_serie` = '$serie'
            ")->result_array();
        return $producto;
    }
}
