<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function pdf($request)
    {
        parse_str($request, $output);

        $dataArray = $output['aParam'];

        // dd($dataArray);
        // For File name
        $today = date("Y-m-d");

        $dataArray['pdf'] = strtoupper($dataArray['form']).'_'.$today;

        $temp = $this->getRecord($dataArray);

        $data = collect($temp)->merge($dataArray)->toArray();

        dd($data);

        // $pdf = Pdf::loadView('pdf.'.'sample_table', $data);
        $pdf = Pdf::loadView('pdf.'.$dataArray['form'], $data);

        return $pdf->download($dataArray['pdf'].'.pdf');
    }

    public function getRecord($data)
    {
        switch ($data['form']) {
            case 'assessment_roll_report':
                return $this->generateAssessmentRoll($data['date']);;
                break;

            case 'collectible_report':
                return $this->generateCollectibles($data['date']);;
                break;

            case 'delinquency_report':
                return $this->generateDelinquencies($data['start_year'], $data['end_year']);
                break;

            case 'collection_deposit_report':
                return $this->setCollectionAndDeposit($data['officer'], $data['from'], $data['to']);
                break;

            default:
                # code...
                break;
        }

    }

public function index()
{
    $data = [
        'invoice_number' => 'INV-123',
        'customer_name' => 'John Doe',
        'total_amount' => '$100'
    ];

    $pdf = PDF::loadView('pdf.invoice', $data);

    return $pdf->stream('invoice.pdf');
}

}
