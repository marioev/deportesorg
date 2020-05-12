<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Camp_equipo extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Camp_equipo_model');
    } 

    /*
     * Listing of camp_equipo
     */
    function index()
    {
        $data['camp_equipo'] = $this->Camp_equipo_model->get_all_camp_equipo();
        
        $data['_view'] = 'camp_equipo/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new camp_equipo
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_equipo' => $this->input->post('id_equipo'),
				'id_camp' => $this->input->post('id_camp'),
				'etapa_equi_camp' => $this->input->post('etapa_equi_camp'),
				'categoria_equi_camp' => $this->input->post('categoria_equi_camp'),
				'serie_equi_camp' => $this->input->post('serie_equi_camp'),
				'inscripcion' => $this->input->post('inscripcion'),
				'garantia' => $this->input->post('garantia'),
				'dev_garantia' => $this->input->post('dev_garantia'),
				'estado_equi_camp' => $this->input->post('estado_equi_camp'),
            );
            
            $camp_equipo_id = $this->Camp_equipo_model->add_camp_equipo($params);
            redirect('camp_equipo/index');
        }
        else
        {            
            $data['_view'] = 'camp_equipo/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a camp_equipo
     */
    function edit($id_equi_camp)
    {   
        // check if the camp_equipo exists before trying to edit it
        $data['camp_equipo'] = $this->Camp_equipo_model->get_camp_equipo($id_equi_camp);
        
        if(isset($data['camp_equipo']['id_equi_camp']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_equipo' => $this->input->post('id_equipo'),
					'id_camp' => $this->input->post('id_camp'),
					'etapa_equi_camp' => $this->input->post('etapa_equi_camp'),
					'categoria_equi_camp' => $this->input->post('categoria_equi_camp'),
					'serie_equi_camp' => $this->input->post('serie_equi_camp'),
					'inscripcion' => $this->input->post('inscripcion'),
					'garantia' => $this->input->post('garantia'),
					'dev_garantia' => $this->input->post('dev_garantia'),
					'estado_equi_camp' => $this->input->post('estado_equi_camp'),
                );

                $this->Camp_equipo_model->update_camp_equipo($id_equi_camp,$params);            
                redirect('camp_equipo/index');
            }
            else
            {
                $data['_view'] = 'camp_equipo/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The camp_equipo you are trying to edit does not exist.');
    } 

    /*
     * Deleting camp_equipo
     */
    function remove($id_equi_camp)
    {
        $camp_equipo = $this->Camp_equipo_model->get_camp_equipo($id_equi_camp);

        // check if the camp_equipo exists before trying to delete it
        if(isset($camp_equipo['id_equi_camp']))
        {
            $this->Camp_equipo_model->delete_camp_equipo($id_equi_camp);
            redirect('camp_equipo/index');
        }
        else
            show_error('The camp_equipo you are trying to delete does not exist.');
    }
    
}