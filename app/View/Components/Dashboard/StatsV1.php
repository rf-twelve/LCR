<?php

namespace App\View\Components\Dashboard;

use App\Models\Doc;
use Illuminate\View\Component;

class StatsV1 extends Component
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
        $docs = Doc::get();
        return view('components.dashboard.stats-v1',[
            'my_docs_count' => $docs->where('author_id', auth()->user()->id)->where('type','draft')->count(),
            'office_docs_count' => $docs->where('type','office')->count(),
        ]);
    }
}
