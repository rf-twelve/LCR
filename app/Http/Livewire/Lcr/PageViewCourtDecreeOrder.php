<?php

namespace App\Http\Livewire\Lcr;

use App\Models\CourtDecreeOrder;
use Livewire\Component;

class PageViewCourtDecreeOrder extends Component
{
    public $data;

    public function mount($user_id, $id){
        $this->data = CourtDecreeOrder::find($id);
    }

    public function render()
    {
        return view('livewire.lcr.page-view-court-decree-order');
    }
}
