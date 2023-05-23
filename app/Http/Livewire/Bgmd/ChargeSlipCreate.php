<?php

namespace App\Http\Livewire\Bgmd;

use App\Models\ChargeSlip;
use App\Models\ChargeSlipItem;
use Livewire\Component;
use Livewire\WithFileUploads;

class ChargeSlipCreate extends Component
{
    use WithFileUploads;
    public $tn;
    public $date;
    public $to;
    public $from;
    public $for;
    public $prepared_by;
    public $noted_by;
    public $grand_total;
    public $vehicle_id;

    ## CHARGE SLIP VARIABLES
    public $add_charge_slip_item;
    public $charge_slip_items;
    public $items;

    public $temp_image;
    public $display_temp_images;

    public function rules() { return [
        'items.particular' => 'required',
        'items.qty' => 'required',
        'items.unit' => 'required',
        'items.unit_price' => 'required',
        'items.total_price' => 'required',
        'items.image' => 'nullable',
    ]; }

    public function mount($id){
        $this->tn = $id;
        $this->temp_image = null;
        $this->grand_total = '0.00';
        $this->add_charge_slip_item = false;
        $this->items = $this->makeTemporaryItems();
        $this->charge_slip_items = [];
    }
    public function makeTemporaryItems()
    {
        return ChargeSlipItem::make([
            'qty' => 0,
            'unit_price' => 0,
            'total_price' => '0.00',
            'image' => null,
        ]);
    }

    public function closeChargeSlipItem()
    {
        $this->add_charge_slip_item = false;
    }

    public function computeTotalPrice()
    {
        $this->items['total_price'] = $this->items['qty'] * $this->items['unit_price'];
        // $this->items['total_price'] = number_format($value,2,'.',',');
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'items.qty') {
            $this->items['qty'] = (empty($this->items['qty'])) ? 0 : $this->items['qty'];
            $this->computeTotalPrice();

        }
        if ($propertyName === 'items.unit_price') {
            $this->items['unit_price'] = (empty($this->items['unit_price'])) ? 0 : $this->items['unit_price'];
            $this->computeTotalPrice();

        }
        if ($propertyName === 'items.total_price') {
            $this->computeTotalPrice();
        }
    }

    public function saveChargeSlipItem()
    {
        $this->validate();
        $filename = $this->temp_image->store('/','images');
        $this->items['image'] = $filename;
        array_push($this->charge_slip_items, $this->items);
        $this->grand_total = collect($this->charge_slip_items)->sum('total_price');
        $this->add_charge_slip_item = false;
    }


    public function addItem()
    {
        $this->temp_image = null;
        $this->items = $this->makeTemporaryItems();
        $this->add_charge_slip_item = true;
    }

    public function removeItem($index)
    {
        unset($this->charge_slip_items[$index]);
        $this->grand_total = collect($this->charge_slip_items)->sum('total_price');
    }

    public function save()
    {
        $validated = $this->validate([
            'date' => 'required',
            'to' => 'required',
            'from' => 'required',
            'for' => 'required',
            'prepared_by' => 'required',
            'noted_by' => 'required',
        ]);

        $validated['grand_total'] = $this->grand_total;
        $validated['author_id'] = auth()->user()->id;
        $validated['vehicle_id'] = $this->for;
        $validated['tn'] = $this->tn;
        $cslip = ChargeSlip::create($validated);

        if(count($this->charge_slip_items)){
            foreach($this->charge_slip_items as $item){
                $cslip->charge_slip_items()->create([
                    'particular' => $item['particular'],
                    'qty' => $item['qty'],
                    'unit' => $item['unit'],
                    'unit_price' => $item['unit_price'],
                    'total_price' => $item['total_price'],
                    'image' => $item['image'],
                ]);
            }
        }
        return redirect()->route('charge-slips',['user_id'=>auth()->user()->id]);
        $this->notify('Charge Slips added, Successfully!');
    }

    public function render()
    {
        return view('livewire.bgmd.charge-slip-create');
    }
}
