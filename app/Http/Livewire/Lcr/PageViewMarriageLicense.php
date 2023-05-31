<?php

namespace App\Http\Livewire\Lcr;

use App\Models\MarriageLicense;
use Livewire\Component;

class PageViewMarriageLicense extends Component
{
    public $data;
    public $images;

    public function mount($user_id, $id){
        $this->data = MarriageLicense::with('file_images')->find($id);
        $this->images = $this->data->file_images->where('type','marriage_license');
    }
    public function render()
    {
        return view('livewire.lcr.page-view-marriage-license');
    }
}
