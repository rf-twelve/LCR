<?php

namespace App\Http\Livewire\Lcr;

use App\Models\FetalDeath;
use Livewire\Component;

class PageViewFetalDeath extends Component
{
    public $data;
    public $images;

    public function mount($user_id, $id){
        $this->data = FetalDeath::with('file_images')->find($id);
        $this->images = $this->data->file_images->where('type','fetal_death');
    }

    public function render()
    {
        return view('livewire.lcr.page-view-fetal-death');
    }
}
