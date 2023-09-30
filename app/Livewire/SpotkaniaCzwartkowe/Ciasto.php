<?php

namespace App\Livewire\SpotkaniaCzwartkowe;

use Livewire\Component;
use App\Models\Cookies;
class Ciasto extends Component
{
    public $fullName; 
    public $bring; 
    public function rules() 
    {
        return [
            'fullName' => 'required|regex:/^[\pL\s]+$/u|min:3',
            'bring' => 'required|min:3',
        ];
    }
    public function save() 
    {
        $validated = $this->validate();
        $person = Cookies::create([
            'fullName' => $this->fullName,
            'bring' => $this->bring,
        ]);

        session()->flash('status', 'Twoja pomoc została zgłoszona.');

        $this->fullName = '';
        $this->bring = '';
        // $this->redirect('/spotkania-czwartkowe#ciasto');
 
        // return redirect()->to('/spotkania-czwartkowe')
        //      ->with('status', 'Zapisane!');
    }
    public function delete($x){
  
        Cookies::where('id', $x)->delete();
        session()->flash('status', 'Dane zostały usunięte');

        $this->fullName = '';
        $this->bring = '';
    } 
    public function render()
    {
        return view('livewire.spotkania-czwartkowe.ciasto')->with([
            'person' => Cookies::all()
        ]);
    }
}
