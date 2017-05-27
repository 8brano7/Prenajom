<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');
class Charts extends CI_Controller

{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Chart_model');

        // $this->load->library('form_validation');

        $this->load->helper('string');
        $this->load->library('session');

    }

    public

    function index()
    {
        $this->load->view('template/header.php');
        $this->load->view('template/navigation.php');
        $this->load->view('charts/chart.php');
    }

    public

    function getdata()
    {
        $response = "";
        $data = $this->Chart_model->get_uzivatelia();


        //         //data to json

        $response->cols[] = array(
            "id" => "",
            "label" => "Meno",
            "pattern" => "",
            "type" => "string"
        );
        $response->cols[] = array(
            "id" => "",
            "label" => "Cena za prenájom",
            "pattern" => "",
            "type" => "number"
        );
        foreach($data as $cd)
        {
            $response->rows[]["c"] = array(
                array(
                    "v" => "$cd->Meno" . " " . "$cd->Priezvisko",
                    "f" => null
                ) ,
                array(
                    "v" => (int)$cd->NajomCena,
                    "f" => null
                )
            );
        }

        echo json_encode($response);
    }



    function getdata2()
    {
        $response = "";
        $data = $this->Chart_model->get_prenajom();


        //         //data to json



        $response->cols[] = array(
            "id" => "",
            "label" => "Názov budovy",
            "pattern" => "",
            "type" => "string"
        );
        $response->cols[] = array(
            "id" => "",
            "label" => " m2 ",
            "pattern" => "",
            "type" => "number"
        );
        foreach($data as $cd)
        {
            $response->rows[]["c"] = array(
                array(
                    "v" => "$cd->nazov",
                    "f" => null
                ) ,
                array(
                    "v" => (int)$cd->m_stvrcovy,
                    "f" => null
                )
            );
        }

        echo json_encode($response);
    }






    function getdata3()
    {
        $response = "";
        $data = $this->Chart_model->get_uzivatel_prenajom();


        //         //data to json

        $response->cols[] = array(
            "id" => "",
            "label" => "Prevádzka",
            "pattern" => "",
            "type" => "string"
        );
        $response->cols[] = array(
            "id" => "",
            "label" => "Cena za elektrinu (€)",
            "pattern" => "",
            "type" => "number"
        );
        foreach($data as $cd)
        {
            $response->rows[]["c"] = array(
                array(
                    "v" => "$cd->Nazov",
                    "f" => null
                ) ,
                array(
                    "v" => (int)$cd->CenaVody,$cd->CenaPlynu,$cd->CenaElektriny,
                    "f" => null
                )
            );
        }

        echo json_encode($response);
    }




    function getdata4()
    {
        $response = "";
        $data = $this->Chart_model->get_budova();


        //         //data to json

        $response->cols[] = array(
            "id" => "",
            "label" => "Názov",
            "pattern" => "",
            "type" => "string"
        );


        $response->cols[] = array(
            "id" => "",
            "label" => " Cena za meter štvorcový (€) ",
            "pattern" => "",
            "type" => "number"
        );
        foreach($data as $cd)
        {
            $response->rows[]["c"] = array(
                array(
                    "v" => "$cd->Nazov",
                    "f" => null
                ) ,
                array(
                    "v" => (int)$cd->CenaM,
                    "f" => null
                )
            );
        }

        echo json_encode($response);
    }





}