<?php

namespace App\Http\Livewire\Lcr;

use App\Models\Marriage;
use Livewire\Component;

class PageViewMarriage extends Component
{
    public $data;
    public $images;

    public function mount($user_id, $id){
        $this->data = Marriage::with('file_images')->find($id);
        $this->images = $this->data->file_images->where('type','marriage');
    }
    public function render()
    {
        return view('livewire.lcr.page-view-marriage');
    }
}
