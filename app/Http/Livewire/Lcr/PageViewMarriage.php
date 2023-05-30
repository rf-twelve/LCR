<?php

namespace App\Http\Livewire\Lcr;

use App\Models\Marriage;
use Livewire\Component;

class PageViewMarriage extends Component
{
    public $data;

    public function mount($user_id, $id){
        $this->data = Marriage::find($id);
    }

    public function render()
    {
        return view('livewire.lcr.page-view-marriage');
    }
}
