<?php

namespace App\Http\Livewire\Bgmd;

use App\Models\ChargeSlip as ModelsChargeSlip;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;

class ChargeSlip extends Component
{
    // use PDF;
    public $cs_model;
    public $cs_id;
    public $tn;
    public $date;
    public $to;
    public $from;
    public $for;
    public $prepared_by;
    public $noted_by;
    public $grand_total;
    public $vehicle_id;
    public $author_id;
    public $author_fullname;
    public $charge_slip_items;

    public function mount($id)
    {
        $this->setFields($id);
    }

    public function setFields($id)
    {
        $this->cs_model = ModelsChargeSlip::query()
            ->with('charge_slip_items','author')
            ->find($id);
        $this->cs_id = $this->cs_model['id'];
        $this->tn = $this->cs_model['tn'];
        $this->date = $this->cs_model['date'];
        $this->to = $this->cs_model['to'];
        $this->from = $this->cs_model['from'];
        $this->for = $this->cs_model['for'];
        $this->prepared_by = $this->cs_model['prepared_by'];
        $this->noted_by = $this->cs_model['noted_by'];
        $this->grand_total = $this->cs_model['grand_total'];
        $this->vehicle_id = $this->cs_model['vehicle_id'];
        $this->author_id = $this->cs_model['author_id'];
        $this->author_fullname = $this->cs_model->author->fullname;
        $this->charge_slip_items = $this->cs_model->charge_slip_items;
    }

    public function render()
    {
        return view('livewire.bgmd.charge-slip');
    }

}
