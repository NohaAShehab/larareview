<?php


namespace App\Http\Controllers;


class FirstController
{
    function testController(){
        return "Welcome to my first controller";
    }

    function myfunction($operator){
        return $operator;
    }

    function returnView(){
        return view("myview");
    }

    function sendparamtoview(){
        $info =[
            "name"=>"Noha",
            "email" => "nshehab@iti.gov.eg",
            "track"=> "Opensource"
        ];

        return view("viewparam",["myname"=>"Noha","info"=>$info]);
    }

    function testtemplate(){
        return view("iti");
    }

}
