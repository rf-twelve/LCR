<?php

namespace App\Http\Livewire\Lcr;

use App\Models\LegalInstrument;
use Livewire\Component;

class PageViewLegalInstrument extends Component
{
    public $data;

    public function mount($user_id, $id){
        $this->data = LegalInstrument::find($id);
    }

    public function render()
    {
        return view('livewire.lcr.page-view-legal-instrument');
    }
}
