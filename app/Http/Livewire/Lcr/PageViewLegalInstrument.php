<?php

namespace App\Http\Livewire\Lcr;

use App\Models\LegalInstrument;
use Livewire\Component;

class PageViewLegalInstrument extends Component
{
    public $data;
    public $images;

    public function mount($user_id, $id){
        $this->data = LegalInstrument::with('file_images')->find($id);
        $this->images = $this->data->file_images->where('type','legal_instrument');
    }

    public function render()
    {
        return view('livewire.lcr.page-view-legal-instrument');
    }
}
