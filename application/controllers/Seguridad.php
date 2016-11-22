<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguridad extends CI_Controller {
    
    public function __construct()
    {
        define('NOLOGIN',true);
        parent::__construct();
        
        $this->load->model('Usuario_model');
    }
    
    function index(){
        $this->load->view('usuarios/login');
    }
    
    function salir(){
        session_destroy();
        redirect('seguridad');
    }
    
    function registrate(){
        $this->load->view('usuarios/registro');
    }
    
    function registro(){ 
        $this->db->insert('busuario',$_POST);
        redirect('seguridad');
    }
    
    function login(){        
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        
        $tmp = $this->Usuario_model->iniciarSesion($usuario, $clave);

        if($tmp){
            $_SESSION['usuario'] = $tmp;
            redirect('animal');
        }
        else{
            $this->load->view('usuarios/error');
        }
    }
    

}