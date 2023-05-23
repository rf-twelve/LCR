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
                    <span style="font-size:8pt;">Municipality of KALIBO</span><br>
                    <span class="spacing-1 bold" style="font-size:9pt;">
                        <strong>MEEDO-BGMD</strong>
                    </span><br><br>
                    {{-- <span style="font-size:8pt;">As of {{ 'date' }}</span><br> --}}
                    <span style="font-size:11pt;">
                        <strong>
                            CHARGE SLIP
                        </strong>
                    </span><br>
                </td>
            </tr>
        </tbody>
    </table>

    <table style="width: 100%; font-size: 9pt;margin-bottom: 2pt;">
        <tr>
            <td colspan="2"></td>
            <td class="" style="width: 5%"><strong>DATE:</strong></td>
            <td class="underline" style="width: 15%"><strong>{{ $date }}</strong></td>
        </tr>
        <tr>
            <td class="" style="width: 10%"><strong>TO:</strong></td>
            <td class="underline" style="width: 70%"><strong>{{ $to }}</strong></td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td class="" style="width: 10%"><strong>FROM:</strong></td>
            <td class="underline" style="width: 70%"><strong>{{ $from }}</strong></td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td class="" style="width: 10%"><strong>FOR:</strong></td>
            <td class="underline" style="width: 70%"><strong>{{ $for }}</strong></td>
            <td colspan="2"></td>
        </tr>

    </table>

    <table class="bordered" style="font-size: 9pt;border-collapse: collapse;">
        <thead>
            <tr>
                <th class="bordered" style="width:6%">ITEM #</th>
                <th class="bordered" style="width:8%">QTY</th>
                <th class="bordered" style="width:12%">UNIT</th>
                <th class="bordered" style="width:50%">PARTICULAR</th>
                <th class="bordered" style="width:12%">UNIT PRICE</th>
                <th class="bordered" style="width:12%">TOTAL PRICE</th>
            </tr>
        </thead>
        <tbody>
            <?php $num=1; ?>
            @forelse ($cs_items as $item)
                <tr class="even_row">
                    <td class="bordered left"><i>{{ $num++; }}</i></td>
                    <td class="bordered center">{{ $item['qty'] }}</td>
                    <td class="bordered center">{{ $item['unit'] }}</td>
                    <td class="bordered left">{{ $item['particular'] }}</td>
                    <td class="bordered right">{{ $item['unit_price'] }}</td>
                    <td class="bordered right">{{ $item['total_price'] }}</td>
                </tr>
            @empty

            @endforelse
            <tr class="even_row">
                <td colspan="5"><i>{{ 'Grand Total:' }}</i></td>
                <td class="right">{{ $grand_total }}</td>
            </tr>
        </tbody>
    </table>

    <p style="font-size: 9pt">The above supplies urgently needed for official use.</p>

    <table style="width:100%">
        <tr style="font-size:8pt;">
            <td style="width:25%">
                <span><i>Prepared by:</i></span>
            </td>
            <td style="width:25%">
                <span><i>Reviewed by:</i></span>
            </td>
            <td style="width:25%">
                <span><i>Noted by:</i></span>
            </td>
            <td>
                <span><i>Approved by:</i></span>
            </td>
        </tr>
        <tr>
            <td style="font-size:10pt">
                <strong>
                    <u>{{ $prepared_by }}</u>
                </strong><br>
                <span style="font-size:8pt">{{ $prepared_position }}</span><br><br>
            </td>
            <td style="font-size:10pt">
                <strong>
                    <u>{{ $reviewed_by }}</u>
                </strong><br>
                <span style="font-size:8pt">{{ $reviewed_position }}</span><br><br>
            </td>
            <td style="font-size:10pt">
                <strong>
                    <u>{{ $noted_by }}</u>
                </strong><br>
                <span style="font-size:8pt">{{ $noted_position }}</span><br><br>
            </td>
            <td style="font-size:10pt">
                <strong>
                    <u>{{ $approved_by }}</u>
                </strong><br>
                <span style="font-size:8pt">{{ $approved_position }}</span><br><br>
            </td>
        </tr>
    </table>
    <table style="width:100%">
        <tr style="font-size:8pt;">
            <td style="width:15%"><strong>TO:</strong></td>
            <td style="width:35%" class="underline"></td>
            <td style="width:25%" colspan="2"></td>
        </tr>
        <tr style="font-size:9pt;">
            <td colspan="4">Please deliver the above items to office of the Municipal General Services.</td>
        </tr>
        <tr style="font-size:8pt;">
            <td style="width:15%"><strong>INSPECTED:</strong></td>
            <td style="width:35%" class="underline"></td>
            <td colspan="2"></td>
        </tr>
        <tr><td colspan="4"></td></tr>
        <tr style="font-size:10pt;">
            <td colspan="3"></td>
            <td style="width:25%">
                <strong><u>{{ $gso_personnel }}</u></strong><br>
                <span style="font-size:8pt">{{ $gso_position }}</span><br><br>
            </td>
        </tr>
        <tr style="font-size:9pt;">
            <td colspan="4"><strong>ACKNOWLEDGEMENT RECEIPT</strong></td>
        </tr>
        <tr style="font-size:9pt;">
            <td colspan="4">
                <strong>
                    Received the above supplies as requisitioned
                </strong>
            </td>
        </tr>
        <tr style="font-size:9pt;">
            <td colspan="3"></td>
            <td>
                Supply Officer - Designated
            </td>
        </tr>
    </table>
    @forelse ($cs_items as $item)
        <div class="page-break"></div>
        <table style="font-size: 8px">
            <tbody>
                <tr>
                    <td style="width:100%; line-height:190%" class="center">
                        <span style="font-size:11pt;">
                            <strong>
                                {{ $item['particular'] }}
                            </strong>
                        </span><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img style="width: 100%" src="{{ Storage::disk('images')->url($item['image']) ?? '' }}"/>
                    </td>
                </tr>
            </tbody>
        </table>
    @empty

    @endforelse

</body>

</html>
