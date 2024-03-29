<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Equipo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get equipo by id_equipo
     */
    function get_equipo($id_equipo)
    {
        return $this->db->get_where('equipo',array('id_equipo'=>$id_equipo))->row_array();
    }
        
    /*
     * Get all equipo
     */
    function get_all_equipo()
    {
        $this->db->order_by('id_equipo', 'desc');
        return $this->db->get('equipo')->result_array();
    }
        
    /*
     * function to add new equipo
     */
    function add_equipo($params)
    {
        $this->db->insert('equipo',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update equipo
     */
    function update_equipo($id_equipo,$params)
    {
        $this->db->where('id_equipo',$id_equipo);
        return $this->db->update('equipo',$params);
    }
    
    /*
     * function to delete equipo
     */
    function delete_equipo($id_equipo)
    {
        return $this->db->delete('equipo',array('id_equipo'=>$id_equipo));
    }
}
