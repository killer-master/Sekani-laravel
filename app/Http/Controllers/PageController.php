<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function contact()
    {
        return view('contact');
    }
    public function eatry()
    {
        return view('eatry');
    }
    public function game()
    {
        return view('game');
    }
    public function fitness()
    {
        return view('fitness');
    }
    public function pastry()
    {
        return view('pastry');
    }
    public function planning()
    {
        return view('planning');
    }
    public function pool()
    {
        return view('pool');
    }
    public function rooftop()
    {
        return view('rooftop');
    }
    public function saloon()
    {
        return view('saloon');
    }
    public function vip()
    {
        return view('vip');
    }
}
