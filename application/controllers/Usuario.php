<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->model('usuario_model');
        $this->load->database();
    }
    
	function index()
	{
                
        $data = array();
        
        $id = 0;
        
        if(isset($_GET['id'])){ 
        $id = $_GET['id']+0;
        }
        
        $data['usuario'] = $this->usuario_model->cargarUsuario($id);
        
        $data['usuarios'] = $this->usuario_model->listarUsuario();
        
		$this->load->view('usuarios/registro',$data);
	}
    
    
    function delete(){
        
        $id = (isset($_GET['id']))?$_GET['id']+0:0;
        $this->usuario_model->eliminarUsuario($id);
        $this->load->view('usuarios/umensaje');
        
    }
}