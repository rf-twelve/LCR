<?php

namespace App\Http\Livewire\Lcr;

use App\Models\LiveBirth;
use Livewire\Component;

class PageViewLiveBirth extends Component
{
    public $data;
    public $images;

    public function mount($user_id, $id){
        $this->data = LiveBirth::with('file_images')->find($id);
        $this->images = $this->data->file_images->where('type','live_birth');
    }
    public function render()
    {
        return view('livewire.lcr.page-view-live-birth');
    }
}
