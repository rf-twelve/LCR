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
        th {
            padding:8px;
        }
        td {
            padding:4px;
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
                <td style="width:100%; line-height:190%" class="center">
                    <img width="50" src="{{ url('/img/company/logo.png') }}" /><br>
                    <span style="font-size:8pt;">Republic of the Philippines</span><br>
                    <span style="font-size:8pt;">Province of Aklan</span><br>
                    <span style="font-size:8pt;">Ati-Atihan Town of Kalibo</span><br>
                    <span class="spacing-1 bold" style="font-size:9pt;">
                        Office of the Municipal Economic Enterprise Development Office
                    </span><br>
                    <span class="spacing-1" style="font-size:9pt;">
                        Public Affairs Information and Communications Division (PAICD)
                    </span><br><br>
                    <span class="bold" style="font-size:11pt;text-decoration: underline;">
                        BILLING STATEMENT
                    </span><br>
                </td>
            </tr>
        </tbody>
    </table>

    <table style="width: 100%; font-size: 9pt;margin-bottom: 2pt;">
        <tr>
            <td colspan="2"></td>
            <td class="" style="width: 5%">DATE:</td>
            <td class="underline" style="width: 15%"><strong>date_number</strong></td>
        </tr>
        <tr>
            <td class="" style="width: 12%">Control No.:</td>
            <td class="underline" style="width: 70%"><strong>control_number</strong></td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td class="" style="width: 12%">Charge to:</td>
            <td class="underline" style="width: 70%"><strong>Company_offices</strong></td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td class="" style="width: 12%">Address:</td>
            <td class="underline" style="width: 70%"><strong>Kalibo_aklan</strong></td>
            <td colspan="2"></td>
        </tr>

    </table><br>

    <table class="bordered" style="font-size: 9pt;border-collapse: collapse;">
        <thead>
            <tr>
                <th class="bordered" style="width:6%"><span style="padding: 4px;">#</span></th>
                <th class="bordered" style="width:50%">Service Charge on Repair of IT Equipment</th>
                <th class="bordered" style="width:12%">No. of Repair</th>
                <th class="bordered" style="width:12%">Rate</th>
                <th class="bordered" style="width:12%">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php $num=1; ?>
            {{-- @forelse ($cs_items as $item) --}}
                <tr class="even_row">
                    <td class="bordered right"><i>1</i></td>
                    <td class="bordered left">MS Office Installation</td>
                    <td class="bordered center">4</td>
                    <td class="bordered right">500.00</td>
                    <td class="bordered right">2,000.00</td>
                </tr>
            {{-- @empty

            @endforelse --}}
            <tr class="even_row bold">
                <td colspan="4"><i>{{ __('Total Payable:') }}</i></td>
                <td style="font-size:12pt" class="right">2,000.00</td>
            </tr>
        </tbody>
    </table><br><br>

    <table style="width:100%">
        <tr style="font-size:8pt;">
            <td style="width:50%">
                <span><i>Assessed by:</i></span>
            </td>
            <td style="width:50%">
                <span><i>Reviewed by:</i></span>
            </td>
        </tr>
        <tr>
            <td style="font-size:10pt">
                <strong>
                    <u>Fullname</u>
                </strong><br>
                <span style="font-size:8pt">Designation</span><br><br>
            </td>
            <td style="font-size:10pt">
                <strong>
                    <u>Fullname</u>
                </strong><br>
                <span style="font-size:8pt">Designation</span><br><br>
            </td>
        </tr>
    </table>
    <table style="width:100%">
        <tr style="font-size:8pt;">
            <td style="width:10%">OR Number:</td>
            <td style="width:20%" class="underline"></td>
            <td style="width:70%" colspan="2"></td>
        </tr>
        <tr style="font-size:8pt;">
            <td style="width:10%">Date:</td>
            <td style="width:20%" class="underline"></td>
            <td style="width:70%" colspan="2"></td>
        </tr>
        <tr style="font-size:8pt;">
            <td colspan="3"><u><i>Note: Payable to Kalibo Municipal Treasurer's Office</i></u></td>
        </tr>
    </table>

</body>

</html>
