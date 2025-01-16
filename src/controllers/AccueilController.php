<?php
namespace BlogNadia\controllers;
class AccueilController extends Controller
{

    public function index()
    {

        $msg="Bonne année ".date('Y');

        $this->render('index');

    }



}
