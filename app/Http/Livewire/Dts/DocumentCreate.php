<?php

namespace App\Http\Livewire\Dts;

use App\Models\AuditTrail;
use App\Models\Doc;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class DocumentCreate extends Component
{
    use WithFileUploads;
    public $tn;
    public $date;
    public $received_by;
    public $title;
    public $origin;
    public $nature;
    public $class;
    public $for;
    public $status;
    public $remarks;
    public $created_by;
    public $updated_by;
    public $file_images = [];
    public $temp_images;
    public $display_temp_images = [];

    public $recipient_office;
    public $recipient_person;
    public $is_draft = true;
    // office_origin
    // office_recipient
    // action_by
    // received_at
    // released_at
    // elapsed
    // action
    // remarks
    // status
    // attachments
    // encoder

    public function rules() { return [
        // 'editing.type' => 'required|in:'.collect(VmsPar::TYPES)->keys()->implode(','),
        'tn' => 'required',
        'date' => 'required',
        'received_by' => 'required',
        'title' => 'nullable',
        'origin' => 'nullable',
        'nature' => 'nullable',
        'class' => 'required',
        'for' => 'required',
        'status' => 'nullable',
        'remarks' => 'nullable',
        'created_by' => 'nullable',
        'updated_by' => 'nullable'
    ]; }

    public function setFields()
    {
        $this->date = '';
        $this->received_by = '';
        $this->title = '';
        $this->origin = '';
        $this->nature = '';
        $this->class = '';
        $this->for = '';
        $this->status = '';
        $this->remarks = '';
        $this->created_by = '';
        $this->updated_by = '';
    }
    public function resetFields()
    {
        $this->date = '';
        $this->received_by = '';
        $this->title = '';
        $this->origin = '';
        $this->nature = '';
        $this->class = '';
        $this->for = '';
        $this->status = '';
        $this->remarks = '';
        $this->created_by = '';
        $this->updated_by = '';
        $this->file_images = [];
    }

    public function mount($user_id, $tn)
    {
        $this->tn = $tn;
        $this->date = date('Y-m-d');
        $this->created_by = auth()->user()->id;
        $this->file_images = [];
    }

    public function makeTemporaryFormData($user_id, $tn)
    {
        return Doc::make([
            'tn' => $tn,
            'date' => date('Y-m-d'),
            'created_by' => Auth::user()->id,
        ]);
    }

    public function updatedTempImages(){
        // $this->validate(['temp_images' => 'image|mimes:jpg,png,jpeg']);
        $this->display_temp_images = $this->temp_images;
    }

    public function saveAsDraft()
    {
        $data = $this->validate();
        $data['type'] = 'draft';
        // dd($data);
        $doc = Doc::create($data);
        if(count($this->temp_images)){
            foreach($this->temp_images as $item){
                $filename = $item->store('/','images');
                $doc->images->create(['name'=>$filename]);
            }
        }
        return redirect()->route('my-documents');
        // dd($data);

    }

    public function save()
    {
        $this->validate();
        dd($this->validate());
        if($this->is_draft){
            if(empty($this->editing['title'])){$this->editing['title'] = '(Empty Field)';}
            if(empty($this->editing['origin'])){$this->editing['origin'] = '(Empty Field)';}
            if(empty($this->editing['nature'])){$this->editing['nature'] = '(Empty Field)';}
            $this->editing['is_draft'] = 1;
            // $this->editing['status'] = "originated";
            $this->editing->save();
            $this->notify('Record saved successfully.');
            return redirect()->route('Documents');
        }
        // DRAFT: Save only on document
        // is_draft column set to true
        // no document trail being save
        // dd($this->is_draft);
        // if($this->is_draft == false){
        //     $v = $this->validate([
        //         'recipient_office' => 'required'
        //     ]);
        // }

        dump('Saved');
        // dump($all);
        // dd($v);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.dts.document-create');
    }
}
