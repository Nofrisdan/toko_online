<?php


namespace App\Controllers;


class Testing extends BaseController
{
    protected $requestData;


    public function index()
    {
        return view("Testing/TesSession");
    }
}
