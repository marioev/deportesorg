<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Delegado extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Delegado_model');
    } 

    /*
     * Listing of delegado
     */
    function index()
    {
        $data['delegado'] = $this->Delegado_model->get_all_delegado();
        
        $data['_view'] = 'delegado/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new delegado
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_jug' => $this->input->post('id_jug'),
				'id_inf' => $this->input->post('id_inf'),
				'estado_delegado' => $this->input->post('estado_delegado'),
            );
            
            $delegado_id = $this->Delegado_model->add_delegado($params);
            redirect('delegado/index');
        }
        else
        {            
            $data['_view'] = 'delegado/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a delegado
     */
    function edit($id_delegado)
    {   
        // check if the delegado exists before trying to edit it
        $data['delegado'] = $this->Delegado_model->get_delegado($id_delegado);
        
        if(isset($data['delegado']['id_delegado']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_jug' => $this->input->post('id_jug'),
					'id_inf' => $this->input->post('id_inf'),
					'estado_delegado' => $this->input->post('estado_delegado'),
                );

                $this->Delegado_model->update_delegado($id_delegado,$params);            
                redirect('delegado/index');
            }
            else
            {
                $data['_view'] = 'delegado/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The delegado you are trying to edit does not exist.');
    } 

    /*
     * Deleting delegado
     */
    function remove($id_delegado)
    {
        $delegado = $this->Delegado_model->get_delegado($id_delegado);

        // check if the delegado exists before trying to delete it
        if(isset($delegado['id_delegado']))
        {
            $this->Delegado_model->delete_delegado($id_delegado);
            redirect('delegado/index');
        }
        else
            show_error('The delegado you are trying to delete does not exist.');
    }
    
}
