<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Camp_equipo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get camp_equipo by id_equi_camp
     */
    function get_camp_equipo($id_equi_camp)
    {
        return $this->db->get_where('camp_equipo',array('id_equi_camp'=>$id_equi_camp))->row_array();
    }
        
    /*
     * Get all camp_equipo
     */
    function get_all_camp_equipo()
    {
        $this->db->order_by('id_equi_camp', 'desc');
        return $this->db->get('camp_equipo')->result_array();
    }
        
    /*
     * function to add new camp_equipo
     */
    function add_camp_equipo($params)
    {
        $this->db->insert('camp_equipo',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update camp_equipo
     */
    function update_camp_equipo($id_equi_camp,$params)
    {
        $this->db->where('id_equi_camp',$id_equi_camp);
        return $this->db->update('camp_equipo',$params);
    }
    
    /*
     * function to delete camp_equipo
     */
    function delete_camp_equipo($id_equi_camp)
    {
        return $this->db->delete('camp_equipo',array('id_equi_camp'=>$id_equi_camp));
    }
}
