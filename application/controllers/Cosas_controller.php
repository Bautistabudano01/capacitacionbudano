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
    

    public function guardar(){
        
    
        if($this->input->server("REQUEST_METHOD") == "POST"){
            $data["nombre"] = $this->input->post("nombre");
            $data["cantidad"] = $this->input->post("cantidad");
            $this->Cosas_model->insert($data);
            return redirect(base_url());
        }
    }
    

    public function borrar(){
        $id = $this->input->get("id");

        $data = array('borrado_logico' => 1);
        $this->Cosas_model->update($id, $data);

        redirect(base_url());

    }

    public function actualizar_cantidad() {
        $id = $this->input->get("id");
        $data['cosa'] = $this->Cosas_model->find($id);
        // print_r($data);
        return $this->load->view('actualizar_cantidad', $data);
    }
    
    
}
