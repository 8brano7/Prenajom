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
        $q = $this->db->query("SELECT k.meno as Meno, k.priezvisko as Priezvisko, u.NajomCena as NajomCena FROM uzivatel k INNER JOIN uzivatel_has_prenajom 
u ON (k.uzivatelID = u.uzivatelID) GROUP BY k.meno");
        return $q->result();
    }

    public function get_prenajom()
    {
        return $this->db->get('prenajom')->result();
    }



    public function get_uzivatel_prenajom()
    {

        $q = $this->db->query(" SELECT k.nazov as Nazov, u.CenaVody AS CenaVody, u.CenaPlynu as CenaPlynu, u.cenaElektriny as CenaElektriny FROM prenajom k INNER JOIN uzivatel_has_prenajom 
u ON (k.prenajomID = u.prenajomID) 

GROUP BY k.nazov");
        return $q->result();



    }



    public function get_budova()
    {

        $q = $this->db->query("SELECT k.nazov as Nazov, u.cena_m_stvorcovy as CenaM FROM prenajom k INNER JOIN poschodie 
u ON (k.poschodieID = u.poschodieID) GROUP BY k.nazov");
        return $q->result();

    }






}