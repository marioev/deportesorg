<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Inf_personal_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get inf_personal by id_inf
     */
    function get_inf_personal($id_inf)
    {
        return $this->db->get_where('inf_personal',array('id_inf'=>$id_inf))->row_array();
    }
        
    /*
     * Get all inf_personal
     */
    function get_all_inf_personal()
    {
        $this->db->order_by('id_inf', 'desc');
        return $this->db->get('inf_personal')->result_array();
    }
        
    /*
     * function to add new inf_personal
     */
    function add_inf_personal($params)
    {
        $this->db->insert('inf_personal',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update inf_personal
     */
    function update_inf_personal($id_inf,$params)
    {
        $this->db->where('id_inf',$id_inf);
        return $this->db->update('inf_personal',$params);
    }
    
    /*
     * function to delete inf_personal
     */
    function delete_inf_personal($id_inf)
    {
        return $this->db->delete('inf_personal',array('id_inf'=>$id_inf));
    }
}
