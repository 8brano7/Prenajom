<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Databaza extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');

        $this->load->library('grocery_CRUD');
    }

    public function _example_output($output = null)
    {
        $this->load->view('example.php',(array)$output);
    }

    public function offices()
    {
        $output = $this->grocery_crud->render();

        $this->_example_output($output);
    }

    public function index()
    {

        $this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
    }





    public function pouzivatelia()
    {

        $this->load->view('template/header');
        $this->load->view('template/navigation');


        $crud = new grocery_CRUD();

        $crud->set_table('uzivatel');
        $crud->columns('uzivatelID','meno','priezvisko','spolocnost','email',"kontakt");
        $crud->display_as('uzivatelID','Poradie');
        $crud->display_as('kontakt','Telefone číslo')
            ->display_as('meno','Meno')
            ->display_as('spolocnost','Názov spoločnosti')
            ->display_as('priezvisko');

        $crud->set_subject('používateľa');


        $output = $crud->render();

        $this->_example_output($output);

    }












    public function poschodie()
    {

        $this->load->view('template/header');
        $this->load->view('template/navigation');


        $crud = new grocery_CRUD();

        $crud->set_table('poschodie');
        $crud->columns('poschodieID','budovaID','poschodie','cena_m_stvorcovy');
        $crud->display_as('poschodieID','ID poschodia');
        $crud->display_as('budovaID','ID budovy');
        $crud->display_as('poschodie','Ktoré poschodie');
        $crud->display_as('cena_m_stvorcovy','Cena za m2');
        $crud->set_subject('poschodie');
        $crud->set_relation('budovaID','budova','nazov');



        $output = $crud->render();

        $this->_example_output($output);

    }










    public function budova()
    {

        $this->load->view('template/header');
        $this->load->view('template/navigation');


        $crud = new grocery_CRUD();

        $crud->set_table('budova');
        $crud->columns('budovaID','nazov','mesto','adresa');
        $crud->display_as('budovaID','ID budovy');
        $crud->display_as('nazov','Názov budovy');
        $crud->display_as('mesto','Mesto');
        $crud->display_as('adresa','Adresa');
        $crud->set_subject('budovu');



        $output = $crud->render();

        $this->_example_output($output);

    }






    public function prenajom2()
    {

        $this->load->view('template/header');
        $this->load->view('template/navigation');


        $crud = new grocery_CRUD();

        $crud->set_table('prenajom');
        $crud->columns('prenajomID','poschodieID','nazov','m_stvrcovy');
        $crud->display_as('prenajomID','ID prenájmu');
        $crud->display_as('poschodieID','ID budovy');
        $crud->display_as('nazov','Názov prenájmu');
        $crud->display_as('m_stvrcovy','m2');
        $crud->set_relation('poschodieID','budova','nazov');


        $crud->set_subject('nový prenájom');


        $output = $crud->render();



        $this->_example_output($output);

    }



    function prenajom()
    {
        $this->config->load('grocery_crud');


        $output1 = $this->prenajom2();
        $output2 = $this->poschodie();








    }






    public function platby()
    {

        $this->load->view('template/header');
        $this->load->view('template/navigation');


        $crud = new grocery_CRUD();

        $crud->set_table('uzivatel_has_prenajom');
        $crud->columns('uzivatelID','prenajomID','zaciatok','koniec','NajomCena','CenaVody','CenaElektriny','CenaPlynu','DatumPlatby');
        $crud->display_as('uzivatelID','ID používateľa');
        $crud->display_as('prenajomID','ID prenájmu');
        $crud->display_as('zaciatok','Začiatok prenájmu');
        $crud->display_as('koniec','Koniec prenájmu');
        $crud->display_as('NajomCena','Cena za nájom');
        $crud->display_as('CenaVody','Cena za vodu');
        $crud->display_as('CenaElektriny','Cena za elektriku');
        $crud->display_as('CenaPlynu','Cena za plyn');
        $crud->display_as('DatumPlatby','Dátum platby');
        $crud->set_relation('prenajomID','prenajom','nazov');

        $crud->set_subject('Platbu');




        $output = $crud->render();



        $this->_example_output($output);

    }








    public function valueToEuro($value, $row)
    {
        return $value.' &euro;';
    }











}
