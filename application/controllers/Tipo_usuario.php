<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tipo_usuario extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tipo_usuario_model');
    } 

    /*
     * Listing of tipo_usuario
     */
    function index()
    {
        $data['tipo_usuario'] = $this->Tipo_usuario_model->get_all_tipo_usuario();
        
        $data['_view'] = 'tipo_usuario/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tipo_usuario
     */
    function add()
    {   
        $this->load->library('form_validation');
        $this->form_validation->set_rules('descripcion_tipousuario','Nombre','trim|required', array('required' => 'Este Campo no debe estar vacio'));
        if($this->form_validation->run())     
        {
            $params = array(
                'descripcion_tipousuario' => $this->input->post('descripcion_tipousuario'),
            );
            
            $tipo_usuario_id = $this->Tipo_usuario_model->add_tipo_usuario($params);
            redirect('tipo_usuario/index');
        }
        else
        {            
            $data['_view'] = 'tipo_usuario/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tipo_usuario
     */
    function edit($id_tipousuario)
    {   
        // check if the tipo_usuario exists before trying to edit it
        $data['tipo_usuario'] = $this->Tipo_usuario_model->get_tipo_usuario($id_tipousuario);
        
        if(isset($data['tipo_usuario']['id_tipousuario']))
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('descripcion_tipousuario','Nombre','trim|required', array('required' => 'Este Campo no debe estar vacio'));
            if($this->form_validation->run())     
            {   
                $params = array(
                    'descripcion_tipousuario' => $this->input->post('descripcion_tipousuario'),
                );

                $this->Tipo_usuario_model->update_tipo_usuario($id_tipousuario,$params);            
                redirect('tipo_usuario/index');
            }
            else
            {
                $data['_view'] = 'tipo_usuario/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tipo_usuario you are trying to edit does not exist.');
    } 

    /*
     * Deleting tipo_usuario
     */
    /*function remove($id_tipousuario)
    {
        $tipo_usuario = $this->Tipo_usuario_model->get_tipo_usuario($id_tipousuario);

        // check if the tipo_usuario exists before trying to delete it
        if(isset($tipo_usuario['id_tipousuario']))
        {
            $this->Tipo_usuario_model->delete_tipo_usuario($id_tipousuario);
            redirect('tipo_usuario/index');
        }
        else
            show_error('The tipo_usuario you are trying to delete does not exist.');
    }*/
    
}