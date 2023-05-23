<?php

namespace App\Http\Livewire\Bgmd;

use App\Models\WorkDescription;
use App\Models\WorkOrder;
use Livewire\Component;
use Livewire\WithFileUploads;

class WorkOrderSlipEdit extends Component
{
    use WithFileUploads;

    public $wos_id;
    public $work_order_no;
    public $assigned_worker;
    public $date_started;
    public $date_finished;
    public $supervised_by;
    public $supervised_date;
    public $approved_by;
    public $approved_date;
    public $received_by;
    public $received_date;
    public $status;
    public $author_id;
    public $created_at;
    public $updated_at;
    public $maintenance_request_id;

    public $work_descriptions;
    public $items;
    public $add_work_desc;

    public $temp_image;
    public $display_temp_images;

    public function rules() { return [
        'items.description' => 'required',
        'items.estimated_man_hours' => 'required',
        'items.parts_needed' => 'required',
        'items.remarks' => 'required',
    ]; }

    public function mount($id){
        $this->setFields($id);
        $this->add_work_desc = false;
        // $this->maintenance_request_id = ($id == 0) ? '' : $id;
        $this->items = $this->makeTemporaryItems();
    }
    public function makeTemporaryItems()
    {
        return WorkDescription::make([
            // 'work_descriptions' => '',
            // 'estimated_man_hours' => '',
            // 'remarks' => '',
        ]);
    }

    public function closeWorkDescription()
    {
        $this->add_work_desc = false;
    }

    public function saveWorkDescription()
    {
        $this->validate();
        array_push($this->work_descriptions, $this->items);
        $this->add_work_desc = false;
    }


    public function addItem()
    {
        $this->items = $this->makeTemporaryItems();
        $this->add_work_desc = true;
    }

    public function removeItem($index)
    {
        unset($this->work_descriptions[$index]);
    }

    public function save()
    {
        $validated = $this->validate([
            'maintenance_request_id' => 'required',
            'work_order_no' => 'required',
            'assigned_worker' => 'required',
            'date_started' => 'required',
            'date_finished' => 'required',
            'supervised_by' => 'required',
            'supervised_date' => 'required',
            'approved_by' => 'required',
            'approved_date' => 'required',
            'received_by' => 'required',
            'received_date' => 'required',
        ]);
        $validated['author_id'] = auth()->user()->id;
        if(count($this->work_descriptions) < 1){
            return $this->alert('Please check work description.');
        }
        $wos = WorkOrder::find($this->wos_id)->update($validated);


        if(count($this->work_descriptions)){
            foreach($this->work_descriptions as $item){
                WorkDescription::updateOrCreate(
                ['description' => $item['description']],
                ['work_order_id' => $this->wos_id,
                'description' => $item['description'],
                'estimated_man_hours' => $item['estimated_man_hours'],
                'parts_needed' => $item['parts_needed'],
                'remarks' => $item['remarks'],
                ]);
            }
        }
        $this->notify('Work order added, Successfully!');
        return redirect()->route('work-order-slips',['user_id'=>auth()->user()->id]);

    }

    public function setFields($id)
    {
        $wos = WorkOrder::query()
            ->with('author','maintenance_request','work_descriptions','vehicle')
            ->find($id);
        $this->wos_id = $wos['id'];
        $this->work_order_no = $wos['work_order_no'];
        $this->assigned_worker = $wos['assigned_worker'];
        $this->date_started = $wos['date_started'];
        $this->date_finished = $wos['date_finished'];
        $this->supervised_by = $wos['supervised_by'];
        $this->supervised_date = $wos['supervised_date'];
        $this->approved_by = $wos['approved_by'];
        $this->approved_date = $wos['approved_date'];
        $this->received_by = $wos['received_by'];
        $this->received_date = $wos['received_date'];
        $this->status = $wos['status'];
        $this->author_id = $wos['author_id'];
        $this->created_at = $wos['created_at'];
        $this->updated_at = $wos['updated_at'];
        $this->maintenance_request_id = $wos['maintenance_request_id'];
        $this->work_descriptions = $wos->work_descriptions->toArray();
    }


    public function render()
    {
        return view('livewire.bgmd.work-order-slip-edit');
    }
}
