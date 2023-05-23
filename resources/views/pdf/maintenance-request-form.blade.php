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
                        ATI-ATIHAN TOWN OF KALIBO<br>
                    </p>
                </td>
                <td width="35%"></td>
            </tr>
            <tr>
                <td colspan="3" class="center">
                    <p style="font-size:10pt;font-style:bold">
                        MUNICIPAL ECONOMIC ENTERPRISE DEVELOPMENT OFFICE<br>
                        SOLID WASTE MANAGEMENT (EQUIPEMT)
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
    <p class="center" style="font-size:12pt;font-style:bold;padding:0pt">
       VEHICLE/EQUIPMENT MAINTENANCE REQUEST FORM
    </p>

    <table class="bordered" style="font-size: 9pt;border-collapse: collapse;">
        <thead>
            <tr>
                <th class="bordered" style="width:10%">NO.</th>
                <th class="bordered" style="width:15%">SWM EQUIPMENT</th>
                <th class="bordered" style="width:25%">ACQUISITION COST</th>
                <th class="bordered" style="width:25%">ACQUISITION DATE</th>
                <th class="bordered" style="width:10%">CAPACITY</th>
                <th class="bordered" style="width:15%">LOCATION</th>
                <th class="bordered" style="width:15%">STATUS/REMARKS</th>
            </tr>
        </thead>
        <tbody>
            <?php $num=1; ?>
            @forelse ($work_orders as $key=>$item)
                <tr class="even_row">
                    <td class="bordered center">1.</td>
                    <td class="bordered center">SinoTruck 01</td>
                    <td class="bordered left">2,524,255.00</td>
                    <td class="bordered left">MARCH 27, 2018</td>
                    <td class="bordered left">6 CUVIC METRIC TONS</td>
                    <td class="bordered left">MOTORPOOL</td>
                    <td class="bordered left">OPERATIONAL/SERVICEABLE</td>
                </tr>
            @empty

            @endforelse
        </tbody>
    </table>
    <br>
    <table style="width:100%">
        <tr style="font-size:9pt;">
            <td width="20%"><strong>Prepared by:</strong></td>
            <td width="45%" class="underline">{{ $requested_by }}</td>
            <td width="8%"></td>
            <td width="7%"><strong>Date:</strong></td>
            <td width="20%" class="underline">{{ $requested_date }}</td>
        </tr>
    </table>

</body>

</html>
