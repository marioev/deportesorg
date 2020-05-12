<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Equipo extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Equipo_model');
    } 

    /*
     * Listing of equipo
     */
    function index()
    {
        $data['equipo'] = $this->Equipo_model->get_all_equipo();
        
        $data['_view'] = 'equipo/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new equipo
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_club' => $this->input->post('id_club'),
				'nombre_equipo' => $this->input->post('nombre_equipo'),
				'estado_equipo' => $this->input->post('estado_equipo'),
            );
            
            $equipo_id = $this->Equipo_model->add_equipo($params);
            redirect('equipo/index');
        }
        else
        {            
            $data['_view'] = 'equipo/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a equipo
     */
    function edit($id_equipo)
    {   
        // check if the equipo exists before trying to edit it
        $data['equipo'] = $this->Equipo_model->get_equipo($id_equipo);
        
        if(isset($data['equipo']['id_equipo']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_club' => $this->input->post('id_club'),
					'nombre_equipo' => $this->input->post('nombre_equipo'),
					'estado_equipo' => $this->input->post('estado_equipo'),
                );

                $this->Equipo_model->update_equipo($id_equipo,$params);            
                redirect('equipo/index');
            }
            else
            {
                $data['_view'] = 'equipo/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The equipo you are trying to edit does not exist.');
    } 

    /*
     * Deleting equipo
     */
    function remove($id_equipo)
    {
        $equipo = $this->Equipo_model->get_equipo($id_equipo);

        // check if the equipo exists before trying to delete it
        if(isset($equipo['id_equipo']))
        {
            $this->Equipo_model->delete_equipo($id_equipo);
            redirect('equipo/index');
        }
        else
            show_error('The equipo you are trying to delete does not exist.');
    }
    
}
