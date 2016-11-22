<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    function eliminarUsuario($id){
        
        $this->db->where('id=',$id);
        $this->db->delete('busuario');
    }

    function iniciarSesion($usr,$clv){
  
        
        $this->db->where('usuario=',$usr);
        $this->db->where('clave=',$clv);
        
        $query = $this->db->get('busuario');
        $rs = $query->result();
        
        if(count($rs) > 0){
            
        $usuario = $rs[0];
            return $usuario->id;  
        }
        
        return false;
   
        
    }
    
    function listarUsuario(){
        
        $query = $this->db->get('busuario');
        
        return $query->result();
        
    }
    
    function cargarUsuario($id){
        
        $usuario = new stdClass();
        $usuario->id = "";
        $usuario->usuario = "";
        $usuario->clave = "";
        $usuario->nombre = "";
        $usuario->correo = "";
        
        $query = $this->db->where('id=',$id);
        $query = $this->db->get('busuario');
        
        $rs = $query->result();
        
        if(count($rs) > 0){    
            $usuario = $rs[0];
        }
        return $usuario;
    }
    
}