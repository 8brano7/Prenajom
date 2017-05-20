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
            "label" => "Topping",
            "pattern" => "",
            "type" => "string"
        );
        $response->cols[] = array(
            "id" => "",
            "label" => "Poradové číšlo",
            "pattern" => "",
            "type" => "number"
        );
        foreach($data as $cd)
        {
            $response->rows[]["c"] = array(
                array(
                    "v" => "Používateľ " . "$cd->meno",
                    "f" => null
                ) ,
                array(
                    "v" => (int)$cd->uzivatelID,
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
                    "v" => "$cd->nazov" . " " . "$cd->nazov",
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
                    "v" => (int)$cd->uzivatelID,
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




    function getdata4()
    {
        $response = "";
        $data = $this->Chart_model->get_budova();


        //         //data to json

        $response->cols[] = array(
            "id" => "",
            "label" => "ID prenájmu",
            "pattern" => "",
            "type" => "string"
        );


        $response->cols[] = array(
            "id" => "",
            "label" => " Cena za elektrinu ",
            "pattern" => "",
            "type" => "number"
        );
        foreach($data as $cd)
        {
            $response->rows[]["c"] = array(
                array(
                    "v" => (int)$cd->CenaElektriny,
                    "f" => null
                ) ,
                array(
                    "v" => (int)$cd->prenajomID,
                    "f" => null
                )
            );
        }

        echo json_encode($response);
    }





}