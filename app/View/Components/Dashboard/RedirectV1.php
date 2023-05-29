<?php

namespace App\View\Components\Dashboard;

use App\Models\CourtDecreeOrder;
use App\Models\Death;
use App\Models\FetalDeath;
use App\Models\LegalInstrument;
use App\Models\LiveBirth;
use App\Models\Marriage;
use App\Models\MarriageLicense;
use Illuminate\View\Component;

class RedirectV1 extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.redirect-v1',[
            'court_decree_order_count' => CourtDecreeOrder::count(),
            'death_count' => Death::count(),
            'fetal_death_count' => FetalDeath::count(),
            'legal_instrument_count' => LegalInstrument::count(),
            'live_birth_count' => LiveBirth::count(),
            'marriage_count' => Marriage::count(),
            'marriage_license_count' => MarriageLicense::count(),
        ]);
    }
}
