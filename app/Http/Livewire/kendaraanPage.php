<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kendaraan;

class kendaraanPage extends Component
{
    public $kendaraan;

    public function render()
    {
        $this->kendaraan =  Kendaraan::all();
        return view('livewire.kendaraanPage');
    }
}
