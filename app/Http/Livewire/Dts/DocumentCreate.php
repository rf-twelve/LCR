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
    public $office_id;
    public $created_by;
    public $updated_by;

    public Doc $editing;
    public $recipient_office;
    public $recipient_person;
    public $file_images = [];
    public $temp_images = [];
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
        'office_id' => 'nullable',
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
        $this->office_id = '';
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
        $this->office_id = '';
        $this->created_by = '';
        $this->updated_by = '';
    }

    public function mount($user_id, $tn) {
        $this->tn = $tn;
        }

    public function makeTemporaryFormData($user_id, $tn)
    {
        return Doc::make([
            'tn' => $tn,
            'date' => date('Y-m-d'),
            'created_by' => Auth::user()->id,
        ]);
    }

    public function saveAsDraft()
    {
        dd('draft');
    }

    public function save()
    {
        $this->validate(11);
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

    public function render()
    {
        return view('livewire.dts.document-create');
    }
}
