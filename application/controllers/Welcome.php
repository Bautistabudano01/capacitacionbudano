<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct(){
        parent::__construct();
        //$this->load->database();
		$this->load->model('Cosas_model');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    
    public function index()
    {
		
		$cosasmodel = $this->Cosas_model->findAll();
		$this->load->view('cosas', ['cosasmodel' => $cosasmodel]);
    }

	public function recibir(){
		$nombre =$this->input->post('nombre');
	}

	public function cosas()
{   

    $this->load->model('Cosas_model');
    $cosasmodel = $this->Cosas_model->findAll();
	print_r($cosasmodel);
    $this->load->view('cosas', ['cosasmodel' => $cosasmodel]);
}

}
