<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Jug_gol extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Jug_gol_model');
    } 

    /*
     * Listing of jug_gol
     */
    function index()
    {
        $data['jug_gol'] = $this->Jug_gol_model->get_all_jug_gol();
        
        $data['_view'] = 'jug_gol/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new jug_gol
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_jugador_planilla' => $this->input->post('id_jugador_planilla'),
				'gol_jug_gol' => $this->input->post('gol_jug_gol'),
				'minuto_jug_gol' => $this->input->post('minuto_jug_gol'),
				'estado_jug_gol' => $this->input->post('estado_jug_gol'),
				'descrip_jug_gol' => $this->input->post('descrip_jug_gol'),
            );
            
            $jug_gol_id = $this->Jug_gol_model->add_jug_gol($params);
            redirect('jug_gol/index');
        }
        else
        {            
            $data['_view'] = 'jug_gol/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a jug_gol
     */
    function edit($id_jug_gol)
    {   
        // check if the jug_gol exists before trying to edit it
        $data['jug_gol'] = $this->Jug_gol_model->get_jug_gol($id_jug_gol);
        
        if(isset($data['jug_gol']['id_jug_gol']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_jugador_planilla' => $this->input->post('id_jugador_planilla'),
					'gol_jug_gol' => $this->input->post('gol_jug_gol'),
					'minuto_jug_gol' => $this->input->post('minuto_jug_gol'),
					'estado_jug_gol' => $this->input->post('estado_jug_gol'),
					'descrip_jug_gol' => $this->input->post('descrip_jug_gol'),
                );

                $this->Jug_gol_model->update_jug_gol($id_jug_gol,$params);            
                redirect('jug_gol/index');
            }
            else
            {
                $data['_view'] = 'jug_gol/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The jug_gol you are trying to edit does not exist.');
    } 

    /*
     * Deleting jug_gol
     */
    function remove($id_jug_gol)
    {
        $jug_gol = $this->Jug_gol_model->get_jug_gol($id_jug_gol);

        // check if the jug_gol exists before trying to delete it
        if(isset($jug_gol['id_jug_gol']))
        {
            $this->Jug_gol_model->delete_jug_gol($id_jug_gol);
            redirect('jug_gol/index');
        }
        else
            show_error('The jug_gol you are trying to delete does not exist.');
    }
    
}
