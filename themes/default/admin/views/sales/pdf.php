<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->lang->line('sale') . ' ' . $inv->reference_no; ?></title>
    <link href="<?= $assets ?>styles/pdf/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $assets ?>styles/pdf/pdf.css" rel="stylesheet">
    <style>
        table, th, td {
            border: 1px solid black !important;
            border-collapse: collapse !important;
        }
    </style>
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
            <div class="clearfix"></div>
            <div class="padding10">
                <div class="col-xs-5"
                     style="border:1px solid #000 !important; height:100px!important;margin:0px!important">
                    GSTIN of the Supplier :
                    <br>
                    Name of the Supplier :
                    <br>
                    Principle Place of Business :
                    <br>
                    State Name & Code :
                </div>
                <div class="col-xs-5"
                     style="border:1px solid #000 !important;height:100px!important;margin:0px!important">
                    Invoice No:
                    <br>
                    Invoice Date:
                    <br>
                    Inco Terms:
                    <br>
                    Whether tax is payable in reverse charge basis Y/N :
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="padding10">
                <div class="col-md-8"
                     style="border:1px solid #000 !important; height:20px!important;margin:0px!important;width:91.5%!important;">
                    Place of supply:
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="padding10">
                <div class="col-xs-5"
                     style="border:1px solid #000 !important; height:200px!important;margin:0px!important;">
                    Details of Buyer:
                    <br>
                    Name: Name :
                    <br>
                    Address: Address :
                    <br>
                    Mandal: District :
                    <br>
                    Mobile: Phone :
                    <br>
                    GSTIN Number :
                    <br>
                    GSTIN State Code :
                    <br>
                    <div class="clearfix"></div>
                </div>
                <div class="col-xs-5"
                     style="border:1px solid #000 !important; height:200px!important;margin:0px!important;">
                    Details of Consignee:
                    <br>
                    Name: Name :
                    <br>
                    Address: Address :
                    <br>
                    Mandal: District :
                    <br>
                    Mobile: Phone :
                    <br>
                    GSTIN Number :
                    <br>
                    GSTIN State Code :
                    <br>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="padding10">
                <div class="col-xs-10  pull-left" style="width:91.5%!important;">
                    <table style="width:100%; margin:0px!important;padding:0px!important;">
                        <tr>
                            <th>SI. No.</th>
                            <th>Description of Goods</th>
                            <th>Grade</th>
                            <th>Average Contents Per Bag</th>
                            <th>No. of Bags</th>
                            <th>Total Qty</th>
                            <th>UOM</th>
                            <th>Basic Price per MT (INR)</th>
                        </tr>
                        <?php $r = 1;
                        foreach ($rows as $row):
                            ?>
                            <tr>
                                <td style="text-align:center; width:40px; vertical-align:middle;"><?= $r; ?></td>
                                <td style="vertical-align:middle;">
                                    <?= $row->product_code.' - '.$row->product_name . ($row->variant ? ' (' . $row->variant . ')' : ''); ?>
                                    <?= $row->details ? '<br>' . $row->details : ''; ?>
                                    <?= $row->serial_no ? '<br>' . $row->serial_no : ''; ?>
                                </td>
                                <td style="width: 80px; text-align:center; vertical-align:middle;"><?= $this->sma->formatQuantity($row->unit_quantity).' '.$row->product_unit_code; ?></td>
                                <td style="text-align:right; width:90px;"><?= $this->sma->formatMoney($row->real_unit_price); ?></td>
                                <?php
                                    if ($Settings->tax1 && $inv->product_tax > 0) {
                                        echo '<td style="width: 90px; text-align:right; vertical-align:middle;">' . ($row->item_tax != 0 && $row->tax_code ? '<small>(' . $row->tax_code . ')</small> ' : '') . $this->sma->formatMoney($row->item_tax) . '</td>';
                                    }
                                    if ( $Settings->product_discount && $inv->product_discount != 0) {
                                        echo '<td style="width: 90px; text-align:right; vertical-align:middle;">' . ($row->discount != 0 ? '<small>(' . $row->discount . ')</small> ' : '') . $this->sma->formatMoney($row->item_discount) . '</td>';
                                    }
                                ?>
                                <td style="vertical-align:middle; text-align:right; width:110px;"><?= $this->sma->formatMoney($row->subtotal); ?>
                                </td>
                                 <td></td>
                            <td></td>
                            <td></td>
                            </tr>
                            <?php
                            $r++;
                        endforeach;
                        if ($return_rows) {
                            echo '<tr class="warning"><td colspan="'.($col+1).'" class="no-border"><strong>'.lang('returned_items').'</strong></td></tr>';
                            foreach ($return_rows as $row):
                            ?>
                                <tr class="warning">
                                    <td style="text-align:center; width:40px; vertical-align:middle;"><?= $r; ?></td>
                                    <td style="vertical-align:middle;">
                                        <?= $row->product_code.' - '.$row->product_name . ($row->variant ? ' (' . $row->variant . ')' : ''); ?>
                                        <?= $row->details ? '<br>' . $row->details : ''; ?>
                                        <?= $row->serial_no ? '<br>' . $row->serial_no : ''; ?>
                                    </td>
                                    <td style="width: 80px; text-align:center; vertical-align:middle;"><?= $this->sma->formatQuantity($row->quantity).' '.$row->product_unit_code; ?></td>
                                    <td style="text-align:right; width:90px;"><?= $this->sma->formatMoney($row->real_unit_price); ?></td>
                                    <?php
                                    if ($Settings->tax1 && $inv->product_tax > 0) {
                                        echo '<td style="text-align:right; vertical-align:middle;">' . ($row->item_tax != 0 && $row->tax_code ? '<small>('.$row->tax_code.')</small>' : '') . ' ' . $this->sma->formatMoney($row->item_tax) . '</td>';
                                    }
                                    if ($Settings->product_discount && $inv->product_discount != 0) {
                                        echo '<td style="text-align:right; vertical-align:middle;">' . ($row->discount != 0 ? '<small>(' . $row->discount . ')</small> ' : '') . $this->sma->formatMoney($row->item_discount) . '</td>';
                                    }
                                    ?>
                                    <td style="text-align:right; width:110px;"><?= $this->sma->formatMoney($row->subtotal); ?></td>
                                </tr>
                                <?php
                                $r++;
                            endforeach;
                        }
                    ?>
                

                    </table>

                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-xs-4 pull-left">
                <p style="height: 80px;"><?= lang('seller'); ?>
                    : <?= $biller->company != '-' ? $biller->company : $biller->name; ?> </p>
                <hr>
                <p><?= lang('stamp_sign'); ?></p>
            </div>
            <div class="col-xs-4 pull-right">
                <p style="height: 80px;"><?= lang('customer'); ?>
                    : <?= $customer->company ? $customer->company : $customer->name; ?> </p>
                <hr>
                <p><?= lang('stamp_sign'); ?></p>
                <?php if ($customer->award_points != 0 && $Settings->each_spent > 0) { ?>
                    <div class="well well-sm">
                        <?=
                        '<p>' . lang('this_sale') . ': ' . floor(($inv->grand_total / $Settings->each_spent) * $Settings->ca_point)
                        . '<br>' .
                        lang('total') . ' ' . lang('award_points') . ': ' . $customer->award_points . '</p>'; ?>
                    </div>
                <?php } ?>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
</div>
</body>
</html>