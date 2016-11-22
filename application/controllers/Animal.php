<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Animal extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->helper('url');
        $this->load->model('ani_model');
        $this->load->database();
    }
    
	function index()
	{
        $data = array();
        
        $id = 0;
        
        if(isset($_GET['id'])){ 
        $id = $_GET['id']+0;
        }
        
        $data['ani'] = $this->ani_model->cargarAnimal($id);
        
        $data['anis'] = $this->ani_model->listarAnimal();
        
		
		$this->load->view('animales/intro',$data);
    }
    
    function guardar()
    {
        if($_POST){            
            
            $this->ani_model->guardarAnimal($_POST);
        }
        $this->load->view('animales/mensaje');
    }
    
    function delete(){
        
        $id = (isset($_GET['id']))?$_GET['id']+0:0;
        $this->ani_model->eliminarAnimal($id);
        $this->load->view('animales/mensaje');
        
    }
}