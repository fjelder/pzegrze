<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SpotkaniaCzwartkowe as spotkania;
class SpotkaniaCzwartkowe extends Component
{
    public $ciasto;
    public $przygotowanie;
    public $sprzatanie;
    public $date;

    public $count = 0;
    public $name = 'dupa3';
    public $bring = 'dupa';
    public $message;
    
    public function render()
    {
        $this->ciasto = spotkania::where('function', '0')->get();
        $this->przygotowanie = spotkania::where('function', '1')->get();
        $this->sprzatanie = spotkania::where('function', '2')->get();
        return view('livewire.spotkania-czwartkowe');
    }
}
