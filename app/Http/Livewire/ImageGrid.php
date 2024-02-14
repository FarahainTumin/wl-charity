<?php

namespace App\Http\Livewire;

use Livewire\Components;

class ImageGrid extends Components
{
    public $images = [
        '01.jpeg', '02.jpeg', '03.jpeg', '04.jpeg', '05.jpeg', '06.jpeg'
    ];

    public function render()
    {
        return view('livewire.image-grid');
    }
}
