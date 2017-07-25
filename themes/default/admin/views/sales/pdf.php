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
         <div id="pf1" class="pf w0 h0" data-page-no="1">
            <div class="pc pc1 w0 h0">
                <div class="c x0 y0 w3 h4">
                    <div class="t m0 x2 h5 y3 ff2 fs1 fc0 sc0 ls0 ws0">TAX INVOICE CUM DELIVERY CHALLAN </div>
                    <div class="t m0 x1 h6 y4 ff3 fs0 fc0 sc0 ls0 ws0">GSTIN of the Supplier<span class="_ _0"> </span>:<span class="_ _1"> </span>Invoice No<span class="_ _2"> </span>:</div>
                    <div class="t m0 x1 h6 y5 ff3 fs0 fc0 sc0 ls0 ws0">Name of the Supplier<span class="_ _3"> </span>:<span class="_ _1"> </span>Invoice Date<span class="_ _4"> </span>:</div>
                    <div class="t m0 x1 h6 y6 ff3 fs0 fc0 sc0 ls0 ws0">Principle Place of Business<span class="_ _5"> </span>:<span class="_ _1"> </span>Inco Terms<span class="_ _6"> </span>:</div>
                    <div class="t m0 x1 h6 y7 ff3 fs0 fc0 sc0 ls0 ws0">State Name &amp; Code<span class="_ _7"> </span>:<span class="_ _1"> </span>Whether tax is payable in reverse charge basis Y/N <span class="_ _8"> </span>:</div>
                    <div class="t m0 x1 h6 y8 ff3 fs0 fc0 sc0 ls0 ws0">Place of Supply:</div>
                    <div class="t m0 x1 h6 y9 ff3 fs0 fc0 sc0 ls0 ws0">Details of Buyer:</div>
                </div>
                <div class="c x3 ya w4 h2">
                    <div class="t m0 x1 h6 y2 ff3 fs0 fc0 sc0 ls0 ws0">Details of Buyer</div>
                </div>
                <div class="c x4 ya w4 h2">
                    <div class="t m0 x1 h6 y2 ff3 fs0 fc0 sc0 ls0 ws0">Consignee</div>
                </div>
                <div class="c x0 y0 w3 h4">
                    <div class="t m0 x5 h6 y9 ff3 fs0 fc0 sc0 ls0 ws0">:</div>
                    <div class="t m0 x1 h6 yb ff3 fs0 fc0 sc0 ls0 ws0">Name<span class="_ _9"> </span>:<span class="_ _a"> </span>Name<span class="_ _9"> </span>:</div>
                    <div class="t m0 x1 h6 yc ff3 fs0 fc0 sc0 ls0 ws0">Address<span class="_ _8"> </span>:<span class="_ _a"> </span>Address<span class="_ _b"> </span>:</div>
                    <div class="t m0 x1 h6 yd ff3 fs0 fc0 sc0 ls0 ws0">Mandal<span class="_ _c"> </span>:<span class="_ _d"> </span>District<span class="_ _e"> </span>:<span class="_ _f"> </span>Mandal<span class="_ _c"> </span>:<span class="_ _10"> </span> <span class="_ _11"> </span>District<span class="_ _12"> </span>:</div>
                    <div
                        class="t m0 x1 h6 ye ff3 fs0 fc0 sc0 ls0 ws0">Mobile<span class="_ _12"> </span>:<span class="_ _d"> </span>Phone<span class="_ _9"> </span>:<span class="_ _f"> </span>Mobile<span class="_ _12"> </span>:<span class="_ _13"> </span>Phone<span class="_ _e"> </span>:</div>
                <div class="t m0 x1 h6 yf ff3 fs0 fc0 sc0 ls0 ws0">GSTIN Number<span class="_ _14"> </span>:<span class="_ _15"> </span>GSTIN Number<span class="_ _16"> </span>:</div>
                <div class="t m0 x1 h6 y10 ff3 fs0 fc0 sc0 ls0 ws0">GSTIN State Code<span class="_ _17"> </span>:<span class="_ _15"> </span>GSTIN State Code<span class="_ _18"> </span>:</div>
                <div class="t m0 x1 h7 y11 ff4 fs0 fc0 sc0 ls0 ws0">PAN number<span class="_ _10"> </span>:<span class="_ _15"> </span>PAN number<span class="_ _19"> </span>:</div>
                <div class="col-xs-12">
                   
            </div>
            </div>
        </div>

        </div>
        
    </div>
    <div class="col-md-12">
             <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th><?= lang('no'); ?></th>
                                <th><?= lang('description'); ?></th>
                                <th><?= lang('quantity'); ?></th>
                                <th><?= lang('unit_price'); ?></th>
                                <?php
                                    if ($Settings->tax1 && $inv->product_tax > 0) {
                                        echo '<th>' . lang('tax') . '</th>';
                                    }
                                    if ( $Settings->product_discount && $inv->product_discount != 0) {
                                        echo '<th>' . lang('discount') . '</th>';
                                    }
                                ?>
                                <th><?= lang('subtotal'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
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
                                        <td style="vertical-align:middle; text-align:right; width:110px;"><?= $this->sma->formatMoney($row->subtotal); ?></td>
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
                            </tbody>
                            <tfoot>
                            
                            <?php if ($inv->grand_total != $inv->total) {
                                ?>
                                <tr>
                                    <td colspan="<?= $tcol; ?>" style="text-align:right;"><?= lang('total'); ?>
                                        (<?= $default_currency->code; ?>)
                                    </td>
                                    <?php
                                        if ($Settings->tax1 && $inv->product_tax > 0) {
                                            echo '<td style="text-align:right;">' . $this->sma->formatMoney($return_sale ? ($inv->product_tax+$return_sale->product_tax) : $inv->product_tax) . '</td>';
                                        }
                                        if ( $Settings->product_discount && $inv->product_discount != 0) {
                                            echo '<td style="text-align:right;">' . $this->sma->formatMoney($return_sale ? ($inv->product_discount+$return_sale->product_discount) : $inv->product_discount) . '</td>';
                                        }
                                    ?>
                                    <td style="text-align:right;"><?= $this->sma->formatMoney($return_sale ? (($inv->total + $inv->product_tax)+($return_sale->total + $return_sale->product_tax)) : ($inv->total + $inv->product_tax)); ?></td>
                                </tr>
                            <?php }
                            ?>
                            <?php
                            if ($return_sale) {
                                echo '<tr><td colspan="' . $col . '" style="text-align:right;">' . lang("return_total") . ' (' . $default_currency->code . ')</td><td style="text-align:right;">' . $this->sma->formatMoney($return_sale->grand_total) . '</td></tr>';
                            }
                            if ($inv->surcharge != 0) {
                                echo '<tr><td colspan="' . $col . '" style="text-align:right;">' . lang("return_surcharge") . ' (' . $default_currency->code . ')</td><td style="text-align:right;">' . $this->sma->formatMoney($inv->surcharge) . '</td></tr>';
                            }
                            ?>
                            <?php if ($inv->order_discount != 0) {
                                echo '<tr><td colspan="' . $col . '" style="text-align:right;">' . lang('order_discount') . ' (' . $default_currency->code . ')</td><td style="text-align:right;">'.($inv->order_discount_id ? '<small>('.$inv->order_discount_id.')</small> ' : '') . $this->sma->formatMoney($return_sale ? ($inv->order_discount+$return_sale->order_discount) : $inv->order_discount) . '</td></tr>';
                            }
                            ?>
                            <?php if ($Settings->tax2 && $inv->order_tax != 0) {
                                echo '<tr><td colspan="' . $col . '" style="text-align:right;">' . lang('order_tax') . ' (' . $default_currency->code . ')</td><td style="text-align:right;">' . $this->sma->formatMoney($return_sale ? ($inv->order_tax+$return_sale->order_tax) : $inv->order_tax) . '</td></tr>';
                            }
                            ?>
                            <?php if ($inv->shipping != 0) {
                                echo '<tr><td colspan="' . $col . '" style="text-align:right;">' . lang('shipping') . ' (' . $default_currency->code . ')</td><td style="text-align:right;">' . $this->sma->formatMoney($inv->shipping) . '</td></tr>';
                            }
                            ?>
                            <tr>
                                <td colspan="<?= $col; ?>"
                                    style="text-align:right; font-weight:bold;"><?= lang('total_amount'); ?>
                                    (<?= $default_currency->code; ?>)
                                </td>
                                <td style="text-align:right; font-weight:bold;"><?= $this->sma->formatMoney($return_sale ? ($inv->grand_total+$return_sale->grand_total) : $inv->grand_total); ?></td>
                            </tr>
        
                            <tr>
                                <td colspan="<?= $col; ?>" style="text-align:right; font-weight:bold;"><?= lang('paid'); ?>
                                    (<?= $default_currency->code; ?>)
                                </td>
                                <td style="text-align:right; font-weight:bold;"><?= $this->sma->formatMoney($return_sale ? ($inv->paid+$return_sale->paid) : $inv->paid); ?></td>
                            </tr>
                            <tr>
                                <td colspan="<?= $col; ?>" style="text-align:right; font-weight:bold;"><?= lang('balance'); ?>
                                    (<?= $default_currency->code; ?>)
                                </td>
                                <td style="text-align:right; font-weight:bold;"><?= $this->sma->formatMoney(($return_sale ? ($inv->grand_total+$return_sale->grand_total) : $inv->grand_total) - ($return_sale ? ($inv->paid+$return_sale->paid) : $inv->paid)); ?></td>
                            </tr>
        
                            </tfoot>
                </table>
                    </div>
    </div>

</div>
</body>
</html>