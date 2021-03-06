<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Producto_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
     /*
     * function to add new producto
     */
    function add_producto($params)
    {
        $this->db->insert('producto',$params);
        return $this->db->insert_id();
    }
    
    /*
     * Get producto by producto_id en ROW
     */
    function get_esteproducto($producto_id)
    {
        $producto = $this->db->query("
            SELECT
                *

            FROM
                `producto`

            WHERE
                `producto_id` = ?
        ",array($producto_id))->row_array();

        return $producto;
    }
    /*
     * function to update producto
     */
    function update_producto($producto_id,$params)
    {
        $this->db->where('producto_id',$producto_id);
        return $this->db->update('producto',$params);
    }
    /*
     * Verifica si ya hay un producto registrado con un nombre
     */
    function es_producto_registrado($producto_nombre)
    {
        $sql = "SELECT
                      count(p.producto_id) as resultado
                  FROM
                      producto p
                 WHERE
                      p.producto_nombre = '".$producto_nombre."'";

        $producto = $this->db->query($sql)->row_array();
        return $producto['resultado'];
    }
    
    function get_busqueda_producto_parametro($parametro, $categoriaestado)
    {
        $sql = "SELECT
                     p.*, p.producto_id as miprod_id
                      FROM
                      producto p
                      WHERE 
                        1 = 1
                           and(p.producto_nombre like '%".$parametro."%' or p.producto_codigobarra like '%".$parametro."%'
                           or p.producto_codigo like '%".$parametro."%' or p.producto_marca like '%".$parametro."%'
                           or p.producto_industria like '%".$parametro."%' or p.producto_caracteristicas like '%".$parametro."%')
                           ".$categoriaestado."
                      GROUP By p.producto_id
                      ORDER By p.producto_nombre
                ";

        $producto = $this->db->query($sql)->result_array();
        return $producto;

    }
    function get_busqueda_producto_limite()
    {
        $sql = "SELECT
                     p.*
                      FROM
                      producto p
                      ORDER By p.producto_nombre LIMIT 50
                      ";

        $producto = $this->db->query($sql)->result_array();
        return $producto;

    }
    /* *****Buscar todos los productos****** */
    function get_busqueda_productos_all()
    {
        $sql = "SELECT
                     p.*, p.producto_id as miprod_id
                      FROM
                      producto p
                order by p.producto_nombre asc";

        $producto = $this->db->query($sql)->result_array();
        return $producto;

    }
     /* *****Buscar todos los productos activos****** */
    function get_productos_activos()
    {
        $sql = "SELECT
                    p.*, p.producto_id as miprod_id
                    FROM
                        producto p
                    WHERE
                        p.estado_id = 1
                order by p.producto_nombre asc";

        $producto = $this->db->query($sql)->result_array();
        return $producto;

    }
}
