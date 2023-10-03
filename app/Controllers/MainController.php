<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MainController extends BaseController
{
    private $eletronic;
    private $fasion;
    private $jellewery;

    public function __construct()
    {
        $this->electronics = new \App\Models\ElectronicModel();
        $this->fasion = new \App\Models\FasionModel();
        $this->jewellery = new \App\Models\JewelleryModel();

    }
    
    public function nice()
    {
        $data = [
            'electronic' => $this->electronics->findAll(),
            'fasion' => $this->fasion->findAll(),
            'jewellery' => $this->jewellery->findAll(),
        ];
        
        return view('view', $data);
    }
    public function fasion()
    {
        $data = [
            'electronic' => $this->electronics->findAll(),
            'fasion' => $this->fasion->findAll(),
            'jewellery' => $this->jewellery->findAll(),
        ];
        return view ('fasion');

    }
    public function electronic()
    {
        $data = [
            'electronic' => $this->electronics->findAll(),
            'fasion' => $this->fasion->findAll(),
            'jewellery' => $this->jewellery->findAll(),
        ];
        return view ('electronic');

    }
    public function jewelry()
    {
        $data = [
            'electronic' => $this->electronics->findAll(),
            'fasion' => $this->fasion->findAll(),
            'jewellery' => $this->jewellery->findAll(),
        ];
        return view ('jewelry');

    }
}
