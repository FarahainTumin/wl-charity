<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function welcome(){
        return view('livewire.frontend.welcome');
    }
    public function vid(){
        return view('livewire.frontend.vid');
    }
    public function doa(){
        return view('livewire.frontend.doa');
    }
    public function doa_penutup(){
        return view('livewire.frontend.doa_penutup');
    }
    public function index(){
        return view('livewire.frontend.home');
    }
    public function qr(){
        return view('livewire.frontend.qr');
    }
    public function qr2(){
        return view('livewire.frontend.qr2');
    }
    public function qr3(){
        return view('livewire.frontend.qr3');
    }
    public function qr4(){
        return view('livewire.frontend.qr4');
    }
    public function qr5(){
        return view('livewire.frontend.qr5');
    }
    public function qr6(){
        return view('livewire.frontend.qr6');
    }
    public function index3(){
        return view('livewire.frontend.program');
    }
    public function index4(){
        return view('livewire.frontend.past_program');
    }
}
