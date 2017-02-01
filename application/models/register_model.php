<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class register_model extends CI_Model {
	function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->helper('form');
    }

public function insert($data)
	{
		$this->db->insert('sample', $data);
		echo "insert";
    }
    // public function view()
    // {

    // 	$query = $this->db->get('sample');
    //     return $query->result();
    // }
    // public function edit($id)
    // {
    // 	$query = $this->db->get_where('sample', array('id' => $id));
    //     return $query->result();
    // }
    
	
}






