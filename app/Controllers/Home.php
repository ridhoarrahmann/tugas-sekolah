<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = array(
            "firstName" => "Ridho",
            "lastName"=> "Arrahman",
            "career"=>"programmer"

        );
        

        echo view('templates/header.php');
        echo view('home/index.php', $data);
        echo view('templates/footer.php');
        // return view('home/index.php');
    }
}
