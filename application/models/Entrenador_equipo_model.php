<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Entrenador_equipo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get entrenador_equipo by id_equipo
     */
    function get_entrenador_equipo($id_equipo)
    {
        return $this->db->get_where('entrenador_equipo',array('id_equipo'=>$id_equipo))->row_array();
    }
        
    /*
     * Get all entrenador_equipo
     */
    function get_all_entrenador_equipo()
    {
        $this->db->order_by('id_equipo', 'desc');
        return $this->db->get('entrenador_equipo')->result_array();
    }
        
    /*
     * function to add new entrenador_equipo
     */
    function add_entrenador_equipo($params)
    {
        $this->db->insert('entrenador_equipo',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update entrenador_equipo
     */
    function update_entrenador_equipo($id_equipo,$params)
    {
        $this->db->where('id_equipo',$id_equipo);
        return $this->db->update('entrenador_equipo',$params);
    }
    
    /*
     * function to delete entrenador_equipo
     */
    function delete_entrenador_equipo($id_equipo)
    {
        return $this->db->delete('entrenador_equipo',array('id_equipo'=>$id_equipo));
    }
}
