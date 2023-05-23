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
       VEHICLE MAINTENANCE LOG
    </p>

    <table style="width:100%">
        <tr style="font-size:11pt;">
            <td colspan="5"><strong>Vehicle Description:</strong></td>
        </tr>
        <tr style="font-size:9pt;">
            <td width="18%"><strong>Brand/Model:</strong></td>
            <td width="30%" class="underline">{{ $brand.'/'.$model }}</td>
            <td width="4%"></td>
            <td width="18%"><strong>Serial No.:</strong></td>
            <td width="30%" class="underline">{{ $serial_no }}</td>
        </tr>
        <tr style="font-size:9pt;">
            <td><strong>Plate No.:</strong></td>
            <td class="underline">{{ $plate_no }}</td>
            <td></td>
            <td><strong>Engine No.:</strong></td>
            <td class="underline">{{ $engine_no }}</td>
        </tr>
        <tr style="font-size:9pt;">
            <td><strong>Acquisition Date:</strong></td>
            <td class="underline">{{ $acquisition_date }}</td>
            <td></td>
            <td><strong>Acquisition Cost:</strong></td>
            <td class="underline">{{ $acquisition_cost }}</td>
        </tr>
    </table><br>
    <table style="width:100%" class="table-bordered">
        <tr style="font-size:9pt;">
            <td class="table-bordered center" width="12%"><strong>Date of Service</strong></td>
            <td class="table-bordered center" width="15%"><strong>Mileage at Service</strong></td>
            <td class="table-bordered center" width="30%"><strong>Work Performed and Service Schedule</strong></td>
            <td class="table-bordered center" width="15%"><strong>Performed By</strong></td>
            <td class="table-bordered center" width="10%"><strong>Cost</strong></td>
            <td class="table-bordered center" width="18%"><strong>Notes/Remarks</strong></td>
        </tr>

        @forelse ($maintenances as $item)
            <tr style="font-size:9pt;">
                <td class="table-bordered"> {{ $item['requested_date'] }} </td>
                <td class="table-bordered"> {{ 'N/A' }} </td>
                <td class="table-bordered">
                    <?php $order_num = 1; ?>
                    @forelse ($item->work_orders as $order)
                        @forelse ($order->work_descriptions as $desc)
                            <span> {{$order_num++.'.) '.$desc->description }}</span><br>
                        @empty
                        @endforelse
                    @empty
                    @endforelse
                </td>
                <td class="table-bordered">
                    <?php $order_num2 = 1; ?>
                    @foreach ($item->work_orders as $order)
                        <span>{{$order_num2++.'.) '.$order->assigned_worker }}</span><br>
                    @endforeach
                </td>
                <td class="table-bordered">
                    <?php $order_num3 = 1; ?>
                    @forelse ($item->work_orders as $order)
                        @forelse ($order->work_descriptions as $desc)
                            <span>{{$order_num3++.'.) '. number_format($desc->cost,2,'.',',') }}</span><br>
                        @empty
                        @endforelse
                    @empty
                    @endforelse
                </td>
                <td class="table-bordered"> {{ $item['comments'] }} </td>
            </tr>
        @empty

        @endforelse

    </table>

</body>

</html>
