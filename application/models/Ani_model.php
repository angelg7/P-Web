<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ani_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }
    
    function eliminarAnimal($id){
        
        $this->db->where('id=',$id);
        $this->db->delete('animal');
    }

    function guardarAnimal($anis){

        $id = $anis['id'];
        
        if($id+0 > 0){
            //update
            $this->db->where('id=',$id);
            unset($anis['id']);
            $this->db->update('animal',$anis);
            
        }else{
         $this->db->insert('animal',$anis);
            
        }
            
        }
      
    
    function listarAnimal(){
        
        $query = $this->db->get('animal');
        
        return $query->result();
        
    }
    
    function cargarAnimal($id){
        
        $ani = new stdClass();
        $ani->id = "";
        $ani->Nombre = "";
        $ani->Nacimiento = "";
        $ani->Tipo = "";
        $ani->Raza = "";
        $ani->Peso = "";
        $ani->Color = "";                      
        $ani->Foto = "";                      
        $ani->Comentario = "";                       
                
        $query = $this->db->where('id=',$id);
        $query = $this->db->get('animal');
        
        $rs = $query->result();
        
        if(count($rs) > 0){    
            $ani = $rs[0];
        }
        return $ani;
    }
}