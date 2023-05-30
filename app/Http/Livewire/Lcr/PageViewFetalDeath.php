<?php

namespace App\Http\Livewire\Lcr;

use App\Models\FetalDeath;
use Livewire\Component;

class PageViewFetalDeath extends Component
{
    public $data;

    public function mount($user_id, $id){
        $this->data = FetalDeath::find($id);
    }

    public function render()
    {
        return view('livewire.lcr.page-view-fetal-death');
    }
}
