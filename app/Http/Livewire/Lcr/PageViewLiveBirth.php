<?php

namespace App\Http\Livewire\Lcr;

use App\Models\LiveBirth;
use Livewire\Component;

class PageViewLiveBirth extends Component
{
    public $data;

    public function mount($user_id, $id){
        $this->data = LiveBirth::find($id);
    }

    public function render()
    {
        return view('livewire.lcr.page-view-live-birth');
    }
}
