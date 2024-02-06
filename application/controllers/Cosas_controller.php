<?php

class Cosas_controller extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper('form'); 
        $this->load->helper('url');
        $this->load->model('Cosas_model');
        $this->load->database();
    }

    public function index(){

    }
    
    public function listado(){

    }

    public function guardar(){
        
    
        if($this->input->server("REQUEST_METHOD") == "POST"){
            $data["nombre"] = $this->input->post("nombre");
            $data["cantidad"] = $this->input->post("cantidad");
            $this->Cosas_model->insert($data);
            return redirect(base_url());
        }
    }
    

    public function borrar(){
        
    }
}
