<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Email extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Email_model');
    } 

    /*
     * Listing of email
     */
    function index()
    {
        $data['email'] = $this->Email_model->get_all_email();
        
        $data['_view'] = 'email/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new email
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_inf' => $this->input->post('id_inf'),
				'email' => $this->input->post('email'),
            );
            
            $email_id = $this->Email_model->add_email($params);
            redirect('email/index');
        }
        else
        {            
            $data['_view'] = 'email/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a email
     */
    function edit($id_email)
    {   
        // check if the email exists before trying to edit it
        $data['email'] = $this->Email_model->get_email($id_email);
        
        if(isset($data['email']['id_email']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_inf' => $this->input->post('id_inf'),
					'email' => $this->input->post('email'),
                );

                $this->Email_model->update_email($id_email,$params);            
                redirect('email/index');
            }
            else
            {
                $data['_view'] = 'email/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The email you are trying to edit does not exist.');
    } 

    /*
     * Deleting email
     */
    function remove($id_email)
    {
        $email = $this->Email_model->get_email($id_email);

        // check if the email exists before trying to delete it
        if(isset($email['id_email']))
        {
            $this->Email_model->delete_email($id_email);
            redirect('email/index');
        }
        else
            show_error('The email you are trying to delete does not exist.');
    }
    
}