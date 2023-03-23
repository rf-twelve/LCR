<?php

namespace App\Http\Livewire\Dts;

use App\Models\Doc;
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
    public $type;
    public $status;
    public $remarks;
    public $author_id;
    public $author_office;
    public $updated_by;
    public $file_images = [];
    public $temp_images = [];
    public $display_temp_images = [];

    public $recipient_office;
    public $recipient_person;
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
        'received_by' => 'nullable',
        'title' => 'nullable',
        'origin' => 'nullable',
        'nature' => 'nullable',
        'class' => 'required',
        'for' => 'required',
        'type' => 'required',
        'status' => 'nullable',
        'remarks' => 'nullable',
        'updated_by' => 'nullable'
    ]; }

    // public function setFields()
    // {
    //     $this->date = '';
    //     $this->received_by = '';
    //     $this->title = '';
    //     $this->origin = '';
    //     $this->nature = '';
    //     $this->class = '';
    //     $this->for = '';
    //     $this->status = '';
    //     $this->remarks = '';
    //     $this->author_id = '';
    //     $this->updated_by = '';
    // }
    // public function resetFields()
    // {
    //     $this->date = '';
    //     $this->received_by = '';
    //     $this->title = '';
    //     $this->origin = '';
    //     $this->nature = '';
    //     $this->class = '';
    //     $this->for = '';
    //     $this->status = '';
    //     $this->remarks = '';
    //     $this->author_id = '';
    //     $this->updated_by = '';
    //     $this->file_images = [];
    // }

    public function mount($user_id, $tn)
    {
        $this->tn = $tn;
        $this->date = date('Y-m-d');
        $this->file_images = [];
        $this->temp_images = [];

    }

    public function updatedTempImages(){
        // $this->validate(['temp_images' => 'image|mimes:jpg,png,jpeg']);
        $this->display_temp_images = $this->temp_images;
    }

    public function saveAsDraft()
    {
        $data = $this->validate();
        // $data['author_id'] = auth()->user()->id;
        // $data['author_office'] = auth()->user()->office_id;
        // $data['status'] = 'origin';
        // $data['type'] = 'draft';
        // $doc = Doc::create($data);
        // if(count($this->temp_images)){
        //     foreach($this->temp_images as $item){
        //         $filename = $item->store('/','images');
        //         $doc->images()->create(['name'=>$filename]);
        //     }
        // }
        // return redirect()->route('my-documents',['user_id'=>auth()->user()->id]);
    }

    public function save()
    {
        $data = $this->validate();
        $data['status'] = 'origin';
        $data['author_id'] = auth()->user()->id;
        $data['author_office'] = auth()->user()->office_id;

        $doc = Doc::create($data);
        if(count($this->temp_images)){
            foreach($this->temp_images as $item){
                $filename = $item->store('/','images');
                $doc->images()->create(['name'=>$filename]);
            }
        }
        return redirect()->route('my-documents',['user_id'=>auth()->user()->id]);
    }

    // public function save()
    // {
    //     $this->validate();
    //     dd($this->validate());
    //     if($this->is_draft){
    //         if(empty($this->editing['title'])){$this->editing['title'] = '(Empty Field)';}
    //         if(empty($this->editing['origin'])){$this->editing['origin'] = '(Empty Field)';}
    //         if(empty($this->editing['nature'])){$this->editing['nature'] = '(Empty Field)';}
    //         $this->editing['is_draft'] = 1;
    //         // $this->editing['status'] = "originated";
    //         $this->editing->save();
    //         $this->notify('Record saved successfully.');
    //         return redirect()->route('Documents');
    //     }
    //     // DRAFT: Save only on document
    //     // is_draft column set to true
    //     // no document trail being save
    //     // dd($this->is_draft);
    //     // if($this->is_draft == false){
    //     //     $v = $this->validate([
    //     //         'recipient_office' => 'required'
    //     //     ]);
    //     // }

    //     dump('Saved');
    //     // dump($all);
    //     // dd($v);
    // }

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }

    public function render()
    {
        return view('livewire.dts.document-create');
    }
}
