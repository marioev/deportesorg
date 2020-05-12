<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Fixture_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get fixture by id_fix
     */
    function get_fixture($id_fix)
    {
        return $this->db->get_where('fixture',array('id_fix'=>$id_fix))->row_array();
    }
        
    /*
     * Get all fixture
     */
    function get_all_fixture()
    {
        $this->db->order_by('id_fix', 'desc');
        return $this->db->get('fixture')->result_array();
    }
        
    /*
     * function to add new fixture
     */
    function add_fixture($params)
    {
        $this->db->insert('fixture',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update fixture
     */
    function update_fixture($id_fix,$params)
    {
        $this->db->where('id_fix',$id_fix);
        return $this->db->update('fixture',$params);
    }
    
    /*
     * function to delete fixture
     */
    function delete_fixture($id_fix)
    {
        return $this->db->delete('fixture',array('id_fix'=>$id_fix));
    }
}