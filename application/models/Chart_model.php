<?php
class Chart_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    //get fruts data
    public function get_uzivatelia()
    {
        return $this->db->get('uzivatel')->result();
    }

    public function get_prenajom()
    {
        return $this->db->get('prenajom')->result();
    }



    public function get_uzivatel_prenajom()
    {

        return $this->db->get('uzivatel_has_prenajom')->result();

    }



    public function get_budova()
    {

        return $this->db->get('uzivatel_has_prenajom')->result();

    }

}