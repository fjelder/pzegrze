<?php

namespace App\Livewire\SpotkaniaCzwartkowe;

use Livewire\Component;
use App\Models\Preperation;
class Przygotowanie extends Component
{
    public $fullName; 
    public function rules() 
    {
        return [
            'fullName' => 'required|regex:/^[\pL\s]+$/u|min:3',
        ];
    }
    public function save() 
    {
        $validated = $this->validate();
        $person = Preperation::create([
            'fullName' => $this->fullName,
        ]);

        session()->flash('status', 'Twoja pomoc została zgłoszona.');

        $this->fullName = '';
    }
    public function delete($x){
  
        Preperation::where('id', $x)->delete();
        session()->flash('status', 'Dane zostały usunięte');

        $this->fullName = '';
    } 
    public function render()
    {
        return view('livewire.spotkania-czwartkowe.przygotowanie')->with([
            'person' => Preperation::all()
        ]);
    }
}
