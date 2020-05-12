<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Campeonato extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Campeonato_model');
    } 

    /*
     * Listing of campeonato
     */
    function index()
    {
        $data['campeonato'] = $this->Campeonato_model->get_all_campeonato();
        
        $data['_view'] = 'campeonato/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new campeonato
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_gestion' => $this->input->post('id_gestion'),
				'id_tipo_camp' => $this->input->post('id_tipo_camp'),
				'nombre_camp' => $this->input->post('nombre_camp'),
				'archivo_camp' => $this->input->post('archivo_camp'),
				'fecha_ini_camp' => $this->input->post('fecha_ini_camp'),
				'fecha_fin_camp' => $this->input->post('fecha_fin_camp'),
				'estado_camp' => $this->input->post('estado_camp'),
				'descripcion_camp' => $this->input->post('descripcion_camp'),
				'convocatoria_camp' => $this->input->post('convocatoria_camp'),
            );
            
            $campeonato_id = $this->Campeonato_model->add_campeonato($params);
            redirect('campeonato/index');
        }
        else
        {            
            $data['_view'] = 'campeonato/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a campeonato
     */
    function edit($id_camp)
    {   
        // check if the campeonato exists before trying to edit it
        $data['campeonato'] = $this->Campeonato_model->get_campeonato($id_camp);
        
        if(isset($data['campeonato']['id_camp']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_gestion' => $this->input->post('id_gestion'),
					'id_tipo_camp' => $this->input->post('id_tipo_camp'),
					'nombre_camp' => $this->input->post('nombre_camp'),
					'archivo_camp' => $this->input->post('archivo_camp'),
					'fecha_ini_camp' => $this->input->post('fecha_ini_camp'),
					'fecha_fin_camp' => $this->input->post('fecha_fin_camp'),
					'estado_camp' => $this->input->post('estado_camp'),
					'descripcion_camp' => $this->input->post('descripcion_camp'),
					'convocatoria_camp' => $this->input->post('convocatoria_camp'),
                );

                $this->Campeonato_model->update_campeonato($id_camp,$params);            
                redirect('campeonato/index');
            }
            else
            {
                $data['_view'] = 'campeonato/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The campeonato you are trying to edit does not exist.');
    } 

    /*
     * Deleting campeonato
     */
    function remove($id_camp)
    {
        $campeonato = $this->Campeonato_model->get_campeonato($id_camp);

        // check if the campeonato exists before trying to delete it
        if(isset($campeonato['id_camp']))
        {
            $this->Campeonato_model->delete_campeonato($id_camp);
            redirect('campeonato/index');
        }
        else
            show_error('The campeonato you are trying to delete does not exist.');
    }
    
}