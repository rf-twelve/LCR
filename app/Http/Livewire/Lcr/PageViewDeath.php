<?php

namespace App\Http\Livewire\Lcr;

use App\Models\Death;
use Livewire\Component;

class PageViewDeath extends Component
{
    public $data;
    public $images;

    public function mount($user_id, $id){
        $this->data = Death::with('file_images')->find($id);
        $this->images = $this->data->file_images->where('type','death');
    }

    public function render()
    {
        return view('livewire.lcr.page-view-death');
    }
}
