<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tipo_campeonato_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tipo_campeonato by id_tipo_camp
     */
    function get_tipo_campeonato($id_tipo_camp)
    {
        return $this->db->get_where('tipo_campeonato',array('id_tipo_camp'=>$id_tipo_camp))->row_array();
    }
        
    /*
     * Get all tipo_campeonato
     */
    function get_all_tipo_campeonato()
    {
        $this->db->order_by('id_tipo_camp', 'desc');
        return $this->db->get('tipo_campeonato')->result_array();
    }
        
    /*
     * function to add new tipo_campeonato
     */
    function add_tipo_campeonato($params)
    {
        $this->db->insert('tipo_campeonato',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tipo_campeonato
     */
    function update_tipo_campeonato($id_tipo_camp,$params)
    {
        $this->db->where('id_tipo_camp',$id_tipo_camp);
        return $this->db->update('tipo_campeonato',$params);
    }
    
    /*
     * function to delete tipo_campeonato
     */
    function delete_tipo_campeonato($id_tipo_camp)
    {
        return $this->db->delete('tipo_campeonato',array('id_tipo_camp'=>$id_tipo_camp));
    }
}
