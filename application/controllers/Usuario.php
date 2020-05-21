<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Usuario extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_model');
        $this->load->model('Tipo_usuario_model');
    } 

    /*
     * Listing of usuario
     */
    function index()
    {
        $data['usuario'] = $this->Usuario_model->get_all_usuario();
        
        $data['_view'] = 'usuario/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new usuario
     */
    function add()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre_usuario', 'Nombre', 'trim|required|min_length[3]|max_length[150]', array('required' => 'Este Campo no debe estar vacio', 'min_length' => 'deberian ser 3 caracteres como mínimo', 'max_length' => 'se excedio de los 150 caracteres'));
        $this->form_validation->set_rules('email_usuario', 'Correo Electronico', 'trim|required|valid_email|min_length[7]|max_length[100]|callback_hay_email2', array('required' => 'Este Campo no debe estar vacio', 'min_length' => 'deberian ser 7 caracteres como mínimo', 'max_length' => 'se excedio de los 100 caracteres'));//OJO
        $this->form_validation->set_message('hay_email2', 'El correo electronico ya se registro, escriba uno diferente');
        $this->form_validation->set_rules('clave_usuario', 'Contraseña', 'trim|required|matches[rclave_usuario]', array('required' => 'Este Campo no debe estar vacio'));
        $this->form_validation->set_rules('rclave_usuario', 'Repetir Password', 'trim|required', array('required' => 'Este Campo no debe estar vacio'));
        $this->form_validation->set_rules('login_usuario', 'Usuario(login)', 'trim|required|min_length[1]|max_length[50]|callback_hay_login2', array('required' => 'Este Campo no debe estar vacio'));//OJO
        $this->form_validation->set_message('hay_login2', 'El login(usuario) ya se registro, escriba uno diferente');
        if($this->form_validation->run())
        {
            /* *********************INICIO imagen***************************** */
            $foto="";
            if (!empty($_FILES['imagen_usuario']['name'])){
                $this->load->library('image_lib');
                $config['upload_path'] = './resources/images/usuario/';
                $img_full_path = $config['upload_path'];

                $config['allowed_types'] = 'gif|jpeg|jpg|png';
                $config['image_library'] = 'gd2';
                $config['max_size'] = 0;
                $config['max_width'] = 0;
                $config['max_height'] = 0;

                $new_name = time(); //str_replace(" ", "_", $this->input->post('proveedor_nombre'));
                $config['file_name'] = $new_name; //.$extencion;
                $config['file_ext_tolower'] = TRUE;

                $this->load->library('upload', $config);
                $this->upload->do_upload('imagen_usuario');

                $img_data = $this->upload->data();
                $extension = $img_data['file_ext'];
                /* ********************INICIO para resize***************************** */
                if ($img_data['file_ext'] == ".jpg" || $img_data['file_ext'] == ".png" || $img_data['file_ext'] == ".jpeg" || $img_data['file_ext'] == ".gif") {
                    $conf['image_library'] = 'gd2';
                    $conf['source_image'] = $img_data['full_path'];
                    $conf['new_image'] = './resources/images/usuario/';
                    $conf['maintain_ratio'] = TRUE;
                    $conf['create_thumb'] = FALSE;
                    $conf['width'] = 800;
                    $conf['height'] = 600;
                    $this->image_lib->clear();
                    $this->image_lib->initialize($conf);
                    if(!$this->image_lib->resize()){
                        echo $this->image_lib->display_errors('','');
                    }
                }
                /* ********************F I N  para resize***************************** */
                $confi['image_library'] = 'gd2';
                $confi['source_image'] = './resources/images/usuario/'.$new_name.$extension;
                $confi['new_image'] = './resources/images/usuario/'."thumb_".$new_name.$extension;
                $confi['create_thumb'] = FALSE;
                $confi['maintain_ratio'] = TRUE;
                $confi['width'] = 50;
                $confi['height'] = 37;

                $this->image_lib->clear();
                $this->image_lib->initialize($confi);
                $this->image_lib->resize();

                $foto = $new_name.$extension;
            }
            /* *********************FIN imagen***************************** */
            $estado = "ACTIVO";
            $params = array(
                'id_estado' => $estado,
                'id_tipousuario' => $this->input->post('id_tipousuario'),
                'nombre_usuario' => $this->input->post('nombre_usuario'),
                'email_usuario' => $this->input->post('email_usuario'),
                'login_usuario' => $this->input->post('login_usuario'),
                'clave_usuario' => md5($this->input->post('clave_usuario')),
                'telefono_usuario' => $this->input->post('telefono_usuario'),
                'imagen_usuario' => $foto,
                //'is_super_admin' => $this->input->post('is_super_admin'),
            );
            
            $usuario_id = $this->Usuario_model->add_usuario($params);
            redirect('usuario/index');
        }
        else
        {
            $data['all_tipo_usuario'] = $this->Tipo_usuario_model->get_all_tipo_usuario();
            $data['_view'] = 'usuario/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a usuario
     */
    function edit($id_usuario)
    {   
        // check if the usuario exists before trying to edit it
        $data['usuario'] = $this->Usuario_model->get_usuario($id_usuario);
        
        if(isset($data['usuario']['id_usuario']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                    'id_estado' => $this->input->post('id_estado'),
                    'id_tipousuario' => $this->input->post('id_tipousuario'),
                    'nombre_usuario' => $this->input->post('nombre_usuario'),
                    'email_usuario' => $this->input->post('email_usuario'),
                    'login_usuario' => $this->input->post('login_usuario'),
                    'clave_usuario' => $this->input->post('clave_usuario'),
                    'telefono_usuario' => $this->input->post('telefono_usuario'),
                    'imagen_usuario' => $this->input->post('imagen_usuario'),
                    'is_super_admin' => $this->input->post('is_super_admin'),
                );

                $this->Usuario_model->update_usuario($id_usuario,$params);            
                redirect('usuario/index');
            }
            else
            {
                $data['_view'] = 'usuario/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The usuario you are trying to edit does not exist.');
    } 

    /*
     * Deleting usuario
     */
    function remove($id_usuario)
    {
        $usuario = $this->Usuario_model->get_usuario($id_usuario);

        // check if the usuario exists before trying to delete it
        if(isset($usuario['id_usuario']))
        {
            $this->Usuario_model->delete_usuario($id_usuario);
            redirect('usuario/index');
        }
        else
            show_error('The usuario you are trying to delete does not exist.');
    }
    public function haylogin1()
    {
        //if ($this->session->userdata('logged_in')) {

            //$session_data = $this->session->userdata('logged_in');

            //if ($session_data['tipousuario_id'] == 1) {

                $login = $this->input->post('login');

                $res = $this->Usuario_model->hay_login1($login);
                echo $res;

            /*} else {
                redirect('alerta');
            }*/
        /*} else {
            redirect('', 'refresh');
        }*/
    }
    /* verifica si ya existe ese correo electronico registrado */
    public function hay_email2($email_field)
    {
        $idu = $this->input->post('userid');
        if ($this->Usuario_model->email_repeat2($email_field, $idu)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
    /* verifica si ya hay otro usuario con ese login */
    public function hay_login2($login_field)
    {
        $idu = $this->input->post('userid');
        if ($this->Usuario_model->login_repeat2($login_field, $idu)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
    
}
