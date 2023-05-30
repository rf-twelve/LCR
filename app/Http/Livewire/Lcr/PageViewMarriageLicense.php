<?php

namespace App\Http\Livewire\Lcr;

use App\Models\MarriageLicense;
use Livewire\Component;

class PageViewMarriageLicense extends Component
{
    public $data;

    public function mount($user_id, $id){
        $this->data = MarriageLicense::find($id);
    }
    public function render()
    {
        return view('livewire.lcr.page-view-marriage-license');
    }
}
