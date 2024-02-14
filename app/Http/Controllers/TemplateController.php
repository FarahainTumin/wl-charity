<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        return view('livewire.frontend.home');
    }
    public function index2()
    {
        return view('livewire.frontend.qr');
    }
    public function index3()
    {
        return view('livewire.frontend.program');
    }
    public function index4()
    {
        return view('livewire.frontend.past_program');
    }
}
