<?php

namespace App\Http\Livewire\Lcr;

use App\Models\CourtDecreeOrder;
use Livewire\Component;

class PageViewCourtDecreeOrder extends Component
{
    public $data;
    public $images;

    public function mount($user_id, $id){
        $this->data = CourtDecreeOrder::with('file_images')->find($id);
        $this->images = $this->data->file_images->where('type','court_decree_order');
    }

    public function render()
    {
        return view('livewire.lcr.page-view-court-decree-order');
    }
}
