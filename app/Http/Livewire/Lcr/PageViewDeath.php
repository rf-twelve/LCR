<?php

namespace App\Http\Livewire\Lcr;

use App\Models\Death;
use Livewire\Component;

class PageViewDeath extends Component
{
    public $data;

    public function mount($user_id, $id){
        $this->data = Death::find($id);
    }

    public function render()
    {
        return view('livewire.lcr.page-view-death');
    }
}
