<?php   
class Cosas_model extends CI_Model {
    
    public $table = 'cosas';
    public $table_id = 'id';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function find($id) {
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->table_id, $id);
        
        $query = $this->db->get();
        return $query->row();
    }

    public function findAll() {
        $this->db->select('*');
        $this->db->from('cosas');
        $query = $this->db->get();
        return $query->result();
    }


    public function insert($data){
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    
        public function update($id, $data){
        $this->db->where($this->table_id, $id);
        $this->db->update($this->table, $data);
    }
}
