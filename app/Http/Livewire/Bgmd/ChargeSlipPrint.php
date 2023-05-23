<?php

namespace App\Http\Livewire\Bgmd;

use App\Models\ChargeSlip;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;

class ChargeSlipPrint extends Component
{
    public function print($user_id,$id)
    {
        $cs = ChargeSlip::with('charge_slip_items','vehicle', 'author')
        ->find($id);
        $data = [
            'date' => $cs['date'],
            'to' => $cs['to'],
            'from' => $cs['from'],
            'for' => $cs->vehicle->brand.'/'.$cs->vehicle->model,
            'grand_total' => $cs['grand_total'],
            'prepared_by' => $cs['prepared_by'],
            'prepared_position' => 'Engineer I',
            'reviewed_by' => 'ADORADA T. REYNALDO',
            'reviewed_position' => 'Public Services Officer III',
            'noted_by' => 'MARY GAY Q. JOEL',
            'noted_position' => 'MGDH I/MEEDO Head',
            'approved_by' => 'JURIS B. SUCRO',
            'approved_position' => 'Municipal Mayor',
            'gso_personnel' => 'EDITHA L. DE LEMOS',
            'gso_position' => 'Municipal General Services Officer',
            'author_id' => $cs['author_id'],
            'cs_items' => $cs->charge_slip_items,
        ];

        $pdf = Pdf::loadView('pdf.charge-slip', $data);

        return $pdf->stream('charge-slip.pdf');
    }

    public function render()
    {
        return view('livewire.bgmd.charge-slip-print');
    }
}
