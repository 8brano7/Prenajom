<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function get_user($email, $heslo)
	{
		$this->db->where('email', $email);
		$this->db->where('heslo', md5($heslo));
        $query = $this->db->get('uzivatel');
		return $query->result();
	}

    function get_user_by_mail($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('uzivatel');
        return $query->result();
    }
	
	// get user
	function get_user_by_id($id)
	{
		$this->db->where('uzivatelID', $id);
        $query = $this->db->get('uzivatel');
		return $query->result();
	}
	
	// insert
	function insert_user($data)
    {
		return $this->db->insert('uzivatel', $data);
	}
}?>