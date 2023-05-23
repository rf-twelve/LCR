<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @page {
            margin-top: 0.5in;
            margin-left: 0.5in;
            margin-right: 0.5in;
            margin-bottom: 0.5in;
            size: 8.5in 13in;
        }

        /* General
        -----------------------------------------------------------------------*/
        body {
            background-color: transparent;
            color: black;
            font-family: "verdana", "sans-serif";
            margin: 0px;
            padding-top: 0px;
            font-size: 1em;
        }

        @media print {
            p { margin: 2px; }
        }

        table {
            width:100%;
        }
        td {
            padding:2px;
        }

        .table-bordered{
            border: 1px solid black;
            border-collapse: collapse;
        }
        .table-bordered th
        {
            border: 1px solid black;
        }
        .table-bordered td, {
            border-right: 1px solid black;
            border-left: 1px solid black;
        }
        .right{
            text-align: right;
        }
        .center{
            text-align: center;
        }
        .bold{
            font-weight: bold;
        }
        .bordered {
            border: 1px solid black;
            border-collapse: collapse;
        }
        .underline {
            border-bottom: 1px solid black;
        }
        .spacing-1 {
            letter-spacing: 1px;
        }
        .spacing-2 {
            letter-spacing: 2px;
        }
        .p-2 {
            padding: 2px;
        }
        .p-4 {
            padding: 4px;
        }
        .w-50 {
            width: 50%;
        }
        .w-60 {
            width: 60%;
        }
        .page-break {
            page-break-after: always;
        }

    </style>
</head>

<body>
    <table style="font-size: 8px">
        <tbody>
            <tr>
                <td width="35%" class="right">
                    <img width="50" src="{{ url('/img/company/logo.png') }}" />
                </td>
                <td width="30%" class="center">
                    <p style="font-size:9pt;">
                        Republic of the Philippines<br>
                        Province of Aklan<br>
                    </p>
                    <p style="font-size:10pt;font-style:bold">
                        ATI-ATIHAN TOWN OF KALIBO<br>
                        MEEDO-BGMD
                    </p>
                </td>
                <td width="35%"></td>
            </tr>
        </tbody>
    </table>
    <p class="center" style="font-size:12pt;font-style:bold;padding:0pt">
       VEHICLE/EQUIPMENT MAINTENANCE REQUEST FORM
    </p>

    <table style="width:100%">
        <tr style="font-size:9pt;">
            <td width="15%"><strong>Type/Make:</strong></td>
            <td width="30%" class="underline">{{ $vehicle['type'] }}</td>
            <td width="10%"></td>
            <td width="15%"><strong>Model/Year:</strong></td>
            <td width="30%" class="underline">{{ $vehicle['model'].'/'.$vehicle['year']   }}</td>
        </tr>
        <tr style="font-size:9pt;">
            <td><strong>Plate No.:</strong></td>
            <td class="underline">{{ $vehicle['plate_no']  }}</td>
            <td></td>
            <td><strong>Engine No.:</strong></td>
            <td class="underline">{{ $vehicle['engine_no']  }}</td>
        </tr>
        <tr style="font-size:9pt;">
            <td><strong>Acquisition Date:</strong></td>
            <td class="underline">{{ $vehicle['acquisition_date'] }}</td>
            <td></td>
            <td><strong>Acquisition Cost:</strong></td>
            <td class="underline">{{ number_format($vehicle['acquisition_cost'], 2,'.',',') }}</td>
        </tr>
    </table>
    <table style="width:100%">
        <tr style="font-size:9pt;">
            <td width="20%"><strong>Date of Last Repair:</strong></td>
            <td width="25%" class="underline">{{ $vehicle['repair_date'] ?? "N/A" }}</td>
            <td width="10%"></td>
            <td width="20%"><strong>Nature of Last Repair:</strong></td>
            <td width="25%" class="underline">{{ $vehicle['repair_nature'] ?? "N/A" }}</td>
        </tr>
    </table>
    <table style="width:100%">
        <tr style="font-size:11pt;">
            <td><strong>DEFECTS/COMPLAINTS:</strong></td>
        </tr>
        <tr style="font-size:11pt;">
            <td class="underline">{{ $defects }}</td>
        </tr>
    </table>

    <table style="width:100%">
        <tr style="font-size:9pt;">
            <td width="20%"><strong>Requested by:</strong></td>
            <td width="45%" class="underline">{{ $requested_by }}</td>
            <td width="8%"></td>
            <td width="7%"><strong>Date:</strong></td>
            <td width="20%" class="underline">{{ $requested_date }}</td>
        </tr>
        <tr style="font-size:9pt;">
            <td><strong>Request Received by:</strong></td>
            <td class="underline">{{ $received_by }}</td>
            <td></td>
            <td><strong>Date:</strong></td>
            <td class="underline">{{ $received_date }}</td>
        </tr>
        <tr style="font-size:9pt;">
            <td><strong>Inspected/Validated by:</strong></td>
            <td class="underline">{{ $inspected_by }}</td>
            <td></td>
            <td><strong>Date:</strong></td>
            <td class="underline">{{ $inspected_date }}</td>
        </tr>
    </table>
    <table style="width:100%">
        <tr style="font-size:11pt;">
            <td><strong>COMMENTS:</strong></td>
        </tr>
        <tr style="font-size:11pt;">
            <td class="underline">{{ $comments }}</td>
        </tr>
    </table>
    <table class="bordered" style="font-size: 9pt;border-collapse: collapse;">
        <thead>
            <tr>
                <th class="bordered" style="width:10%">DATE</th>
                <th class="bordered" style="width:15%">WORK ORDER #</th>
                <th class="bordered" style="width:25%">WORK ASSIGNED</th>
                <th class="bordered" style="width:25%">MATERIALS/PARTS NEEDED</th>
                <th class="bordered" style="width:10%">WORK COMPLETED ON</th>
                <th class="bordered" style="width:15%">APPROVED BY</th>
            </tr>
        </thead>
        <tbody>
            <?php $num=1; ?>
            @forelse ($work_orders as $key=>$item)
                <tr class="even_row">
                    <td class="bordered center">{{ $item['date'] }}</td>
                    <td class="bordered center">{{ $item['work_order_no'] }}</td>
                    <td class="bordered left">{{ $item['assigned_worker'] }}</td>
                    <td class="bordered left">
                        <ul>
                            @forelse ($item->work_descriptions as $key=>$desc)
                            <li>{{ $desc['parts_needed'] }}</li>
                            @empty
                            @endforelse
                        </ul>
                    </td>
                    <td class="bordered left">{{ $item['date_finished'] }}</td>
                    <td class="bordered left">{{ $item['approved_by'] }}</td>
                </tr>
            @empty

            @endforelse
        </tbody>
    </table>

    {{-- <table style="width:100%">
        <tr style="font-size:9pt;">
            <td width="20%"><strong>Work Assigned to:</strong></td>
            <td width="45%"></td>
            <td width="8%"></td>
            <td width="7%"><strong>Date:</strong></td>
            <td width="20%" class="underline">{{ $inspected_date }}</td>
        </tr>
        <tr style="font-size:9pt;">
            <td colspan="5" class="underline">&nbsp;</td>
        </tr>
    </table>
    <table style="width:100%">
        <tr style="font-size:9pt;">
            <td width="20%"><strong>Materials/Parts Needed:</strong></td>
            <td width="45%"></td>
            <td width="12%"><strong>Work Order #:</strong></td>
            <td width="23%" class="underline">{{ 'sample_data' }}</td>
        </tr>
        <tr style="font-size:9pt;">
            <td colspan="4" class="underline">&nbsp;</td>
        </tr>
    </table>
    <table style="width:100%">
        <tr style="font-size:9pt;">
            <td width="20%"><strong>Approved by:</strong></td>
            <td width="45%" class="underline">{{ 'sample_only' }}</td>
            <td width="8%"></td>
            <td width="7%"><strong>Date:</strong></td>
            <td width="20%" class="underline">{{ 'sample_data' }}</td>
        </tr>
        <tr style="font-size:9pt;">
            <td><strong>Work Completed on:</strong></td>
            <td class="underline">{{ 'sample_only' }}</td>
            <td></td>
            <td><strong>Signature:</strong></td>
            <td class="underline">{{ 'sample_data' }}</td>
        </tr>
    </table> --}}

</body>

</html>
