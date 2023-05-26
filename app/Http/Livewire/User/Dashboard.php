<?php

namespace App\Http\Livewire\User;

use App\Models\AuditTrail;
use App\Models\ChargeSlip;
use App\Models\CourtDecreeOrder;
use App\Models\Death;
use App\Models\Doc;
use App\Models\FetalDeath;
use App\Models\LegalInstrument;
use App\Models\LiveBirth;
use App\Models\Marriage;
use App\Models\MarriageLicense;
use Livewire\Component;

class Dashboard extends Component
{
    public $search_court_decree_order;
    public $search_death;
    public $search_fetal_death;
    public $search_legal_instrument;
    public $search_live_birth;
    public $search_marriage;
    public $search_marriage_license;

    public function mount(){
    $this->search_court_decree_order = null;
    $this->search_death = null;
    $this->search_fetal_death = null;
    $this->search_legal_instrument = null;
    $this->search_live_birth = null;
    $this->search_marriage = null;
    $this->search_marriage_license = null;
    }

    public function searchCourtDecreeOrder(){
        $data = CourtDecreeOrder::where('lcr_no',$this->search_court_decree_order)->first();
        return isset($data) ? $this->notify('Data Found') : $this->notify('Record not found!');
    }
    public function search_death(){
        $data = Death::where('lcr_no',$this->search_death)->first();
        return isset($data) ? $this->notify('Data Found') : $this->notify('Record not found!');
    }
    public function searchFetalDeath(){
        $data = FetalDeath::where('lcr_no',$this->search_fetal_death)->first();
        return isset($data) ? $this->notify('Data Found') : $this->notify('Record not found!');
    }
    public function searchLegalInstrument(){
        $data = LegalInstrument::where('lcr_no',$this->search_legal_instrument)->first();
        return isset($data) ? $this->notify('Data Found') : $this->notify('Record not found!');
    }
    public function searchLiveBirth(){
        $data = LiveBirth::where('lcr_no',$this->search_live_birth)->first();
        return isset($data) ? $this->notify('Data Found') : $this->notify('Record not found!');
    }
    public function searchMarriage(){
        $data = Marriage::where('lcr_no',$this->search_marriage)->first();
        return isset($data) ? $this->notify('Data Found') : $this->notify('Record not found!');
    }
    public function search_marriage_license(){
        $data = MarriageLicense::where('register_no',$this->search_marriage_license)->first();
        return isset($data) ? $this->notify('Data Found') : $this->notify('Record not found!');
    }

    public function render()
    {
        // dd(date("Y-m-d-His") ); // Generate Tracking Number
        return view('livewire.user.dashboard',[
        ]);
    }

    public function logout() {
        auth()->logout(); return redirect('/');
    }
}
