<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->lang->line('sale') . ' ' . $inv->reference_no; ?></title>
    <link href="<?= $assets ?>styles/pdf/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $assets ?>styles/pdf/pdf.css" rel="stylesheet">
</head>

<body>
<div id="wrap">
    <div class="row">
        <div class="col-lg-12">
            <?php if ($logo) {
                $path = base_url() . 'assets/uploads/logos/' . $biller->logo;
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            ?>
            <div class="text-center" style="margin-bottom:20px;">
                <img src="<?= $base64; ?>" alt="<?= $biller->company != '-' ? $biller->company : $biller->name; ?>">
            </div>
            <?php }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4">
            <p></p>
            <table xmlns="http://www.w3.org/1999/xhtml" cellspacing="0" cellpadding="0" dir="ltr" border="1"
                   style="table-layout: fixed; font-size: 11pt; font-family: Calibri; border-collapse: collapse; border: none;">
                <colgroup>
                    <col width="65"/>
                    <col width="68"/>
                    <col width="71"/>
                    <col width="69"/>
                    <col width="67"/>
                    <col width="68"/>
                    <col width="68"/>
                    <col width="65"/>
                    <col width="64"/>
                    <col width="67"/>
                    <col width="74"/>
                    <col width="67"/>
                    <col width="69"/>
                    <col width="68"/>
                    <col width="71"/>
                </colgroup>
                <tbody>
                <tr style="height: 24px;">
                    <td style="border-color: #000000; padding: 0px 3px; vertical-align: bottom; font-weight: bold;"
                        rowspan="1" colspan="15"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;                                                               &quot;}"></td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="3"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;GSTIN of the Supplier&quot;}">GSTIN of the
                        Supplier
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="4" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="5" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Invoice No&quot;}">
                        Invoice No
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="3" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="3"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Name of the Supplier&quot;}">Name of the
                        Supplier
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="4" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="5"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Invoice Date&quot;}">Invoice Date
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="3" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="3"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Principle Place of Business&quot;}">
                        Principle Place of Business
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="4" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="5" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Inco Terms&quot;}">
                        Inco Terms
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="3" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="3"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;State Name &amp; Code&quot;}">State Name
                        &amp; Code
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="4" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="5"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Whether tax is payable in reverse charge basis Y/N &quot;}">
                        Whether tax is payable in reverse charge basis Y/N
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="3" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Place of Supply:&quot;}">Place of Supply:
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="2" colspan="13">
                        <div style="max-height: 48px;"></div>
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Details of Buyer:&quot;}">Details of Buyer:
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="5"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="3"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Details of Consignee:&quot;}">Details of
                        Consignee:
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="1" colspan="5"></td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Name:&quot;}">Name:
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="5"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Name&quot;}">Name
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="5"></td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Address:&quot;}">
                        Address:
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="2" colspan="5">
                        <div style="max-height: 48px;"></div>
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Address&quot;}">
                        Address
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="5"></td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="1" colspan="5"></td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Mandal:&quot;}">Mandal:
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;District&quot;}">District
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="3" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Mandal&quot;}">
                        Mandal
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot; &quot;}"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;District&quot;}">District
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="3" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Mobile:&quot;}">Mobile:
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Phone&quot;}">Phone
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="3" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Mobile&quot;}">
                        Mobile
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Phone&quot;}">Phone
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="3" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;GSTIN Number&quot;}">GSTIN Number
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="5" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;GSTIN Number&quot;}">GSTIN Number
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="6" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;GSTIN State Code&quot;}">GSTIN State Code
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="5" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;GSTIN State Code&quot;}">GSTIN State Code
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="6" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="1" colspan="2" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;PAN number&quot;}">
                        PAN number
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="1" colspan="5" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="1" colspan="2" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;PAN number&quot;}">
                        PAN number
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="1" colspan="6" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial; text-align: center;"
                        rowspan="3" colspan="1" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Sl. No.&quot;}">
                        <div style="max-height: 79px;">Sl. No.</div>
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="3" colspan="3"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;    Description of Goods&quot;}">
                        <div style="max-height: 79px;">Description of Goods</div>
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="3" colspan="1" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;   Grade&quot;}">
                        <div style="max-height: 79px;">Grade</div>
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="3" colspan="3"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;    Average Contents per Bag&quot;}">
                        <div style="max-height: 79px;">Average Contents per Bag</div>
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="3" colspan="2"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;   Number of Bags&quot;}">
                        <div style="max-height: 79px;">Number of Bags</div>
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="3" colspan="1" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot; Total Qty&quot;}">
                        <div style="max-height: 79px;">Total Qty</div>
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="3" colspan="1" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;   UOM&quot;}">
                        <div style="max-height: 79px;">UOM</div>
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="3" colspan="3"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;    Basic Price per MT (INR)&quot;}">
                        <div style="max-height: 79px;">Basic Price per MT (INR)</div>
                    </td>
                </tr>
                <tr style="height: 31px;"></tr>
                <tr style="height: 24px;"></tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="1" colspan="3"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="1" colspan="3"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="1" colspan="2"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="1" colspan="3"></td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;" rowspan="1"
                        colspan="3"></td>
                    <td style="border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;" rowspan="1"
                        colspan="3"></td>
                    <td style="border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;" rowspan="1"
                        colspan="2"></td>
                    <td style="border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="1" colspan="3"></td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Basic Price :&quot;}">Basic Price :
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="1" colspan="3"></td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;IGST   28% :&quot;}">IGST 28% :
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="1" colspan="3"></td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;                                                                                                                                    Total Invoice Value&quot;}">
                        Total Invoice Value
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="1" colspan="3"></td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Total Invoice Value (In Words)&quot;}">Total
                        Invoice Value (In Words)
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="1" colspan="11"></td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="3" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Party Code&quot;}">
                        Party Code
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="4" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Mode of Transport&quot;}">Mode of Transport
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="6" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="3"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Qty Despatched now&quot;}">Qty Despatched
                        now
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="3" colspan="4">
                        <div style="max-height: 72px;"></div>
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Transporter Name&quot;}">Transporter Name
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="6" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="2" colspan="3">
                        <div style="max-height: 48px;"></div>
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Transporter Code&quot;}">Transporter Code
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="6" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Vehicle Regn No.&quot;}">Vehicle Regn No.
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="6" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="4" colspan="11">
                        <div style="max-height: 96px;"></div>
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: middle; font-family: Arial;"
                        rowspan="3" colspan="1" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;For&quot;}">
                        <div style="max-height: 72px;">For</div>
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="3" colspan="3">
                        <div style="max-height: 72px;"></div>
                    </td>
                </tr>
                <tr style="height: 24px;"></tr>
                <tr style="height: 24px;"></tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom: 3px double #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="2"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Authorised Signatory&quot;}">Authorised
                        Signatory
                    </td>
                    <td style="border-right-color: #000000; border-bottom: 3px double #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="1" colspan="2"></td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial; text-align: right;"
                        rowspan="1" colspan="9"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;                                  ACKNOWLEDGEMENT&quot;}">
                        ACKNOWLEDGEMENT
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="2" colspan="5">
                        <div style="max-height: 48px;"></div>
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Invoice No &amp; Date&quot;}">Invoice No
                        &amp; Date
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="7" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Party Code &amp; Name&quot;}">Party Code
                        &amp; Name
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="7" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="5"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Received_____________Bags in Good condition&quot;}">
                        Received_____________Bags in Good condition
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Destination&quot;}">Destination
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="1" colspan="7" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="3" colspan="5">
                        <div style="max-height: 72px;"></div>
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Transporter's Name &amp; Code&quot;}">
                        Transporter's Name &amp; Code
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="7" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Truck No.&quot;}">Truck No.
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="7" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;:&quot;}">:
                    </td>
                </tr>
                <tr style="height: 24px;">
                    <td style="border-right-color: #000000; border-bottom-color: #000000; border-left-color: #000000; padding: 0px 3px; vertical-align: bottom;"
                        rowspan="1" colspan="5"></td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="4"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Bags/MTs________________&quot;}">
                        Bags/MTs________________
                    </td>
                    <td style="border-right-color: #000000; border-bottom-color: #000000; padding: 0px 3px; vertical-align: bottom; font-family: Arial;"
                        rowspan="1" colspan="6"
                        data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;          Signature of the Consignee or his Authorised Agent&quot;}">
                        Signature of the Consignee or his Authorised Agent
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>