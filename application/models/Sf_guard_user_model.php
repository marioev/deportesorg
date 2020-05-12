<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Sf_guard_user_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get sf_guard_user by user_id
     */
    function get_sf_guard_user($user_id)
    {
        return $this->db->get_where('sf_guard_user',array('user_id'=>$user_id))->row_array();
    }
        
    /*
     * Get all sf_guard_user
     */
    function get_all_sf_guard_user()
    {
        $this->db->order_by('user_id', 'desc');
        return $this->db->get('sf_guard_user')->result_array();
    }
        
    /*
     * function to add new sf_guard_user
     */
    function add_sf_guard_user($params)
    {
        $this->db->insert('sf_guard_user',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update sf_guard_user
     */
    function update_sf_guard_user($user_id,$params)
    {
        $this->db->where('user_id',$user_id);
        return $this->db->update('sf_guard_user',$params);
    }
    
    /*
     * function to delete sf_guard_user
     */
    function delete_sf_guard_user($user_id)
    {
        return $this->db->delete('sf_guard_user',array('user_id'=>$user_id));
    }
}
