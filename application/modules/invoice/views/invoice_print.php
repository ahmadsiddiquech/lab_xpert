<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style type="text/css">
  table {
    border: 2px solid black;
  }
  body {
        font-family: 'Raleway', serif;
      }
  .border_bottom {
    border-bottom: 2px solid black;
  }
  .border_left {
    border-left: 2px solid #919191;
    padding-left: 5px;
  }
  .border1 {
    border-left:1px solid black;
    border-top:1px solid black;
  }
</style>
<body>
<?php $x = 1; $y = 1; ?>
<table width="100%">
  <tr>
    <td>
      <table width="100%">
      <tbody>
        <tr>
          <th colspan="100%" align="center">Customer Invoice</th>
        </tr>
        <tr>
          <td align="right"><img src="<?php echo STATIC_ADMIN_IMAGE.'logo.png'?>" height="60px;"></td>
          <td colspan="4" align="center"><b style="font-size: 22px;"> <?php echo $invoice[0]['org_name'].' , '.$invoice[0]['org_address'];?></b><br><?php echo $invoice[0]['org_phone'];?></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
          <th class="border_bottom" colspan="100%"></th>
        </tr>
        <tr>
          <td colspan="2">Invoice Id: <b><?php echo $invoice[0]['invoice_id'];?></b></td>
          <td colspan="3" align="right">Issue Date: <b><?php echo $invoice[0]['date_time'];?></b></td>
        </tr>
        <tr>
          <td colspan="2">Reference No: <b><?php echo $invoice[0]['p_id'];?></b></td>
          <td colspan="3" align="right">Delivery Date : <b><?php echo $invoice[0]['delivery_date'];?></b></td>
        </tr>
        <tr><td colspan="100%">&nbsp;</td></tr>
        <tr>
          <td colspan="2">Patient Name: <b><?php echo $invoice[0]['name'];?></b></td>
          <td colspan="3" align="right">Referred By: <b><?php echo $invoice[0]['referred_by']; ?></b></td>
        </tr>
        <tr>
          <td colspan="100%">Patient Phone: <b><?php echo $invoice[0]['mobile'];?></b></td>
        </tr>
        <tr><td colspan="100%"><hr></td></tr>
        <tr align="center">
          <th colspan="1" class="border1"><b>Sr. No</th>
          <th colspan="1" class="border1"><b>Category</th>
          <th colspan="2" class="border1">Test</th>
          <th colspan="1" class="border1" style="border-right: 1px solid black"><b>Price</th>
        </tr>
        <?php foreach ($invoice as $key => $value) { ?>
        <tr align="center">
          <td colspan="1" class="border1"> <?php echo $x;?></td>
          <td colspan="1" class="border1"> <?php echo $value['category_name'];?></td>
          <td colspan="2" class="border1"> <?php echo $value['test_name'];?></td>
          <td colspan="1" class="border1" style="border-right: 1px solid black"> <?php echo $value['charges'];?></td>
          <th></th>
        </tr>
      <?php $x++; }  ?>
      <tr><td colspan="100%"><hr></td></tr>
        <tr>
          <td colspan="4" align="right"><b>Total Amount: </b></td>
          <td colspan="1" align="right"><?php echo $invoice[0]['total_pay']; ?></td>
        </tr>
        <tr>
          <td colspan="4" align="right"><b>Discount: </b></td>
          <td colspan="1" align="right"><?php echo $invoice[0]['discount']; ?></td>
        </tr>
        <tr>
          <td colspan="4" align="right"><b>Net Amount: </b></td>
          <td colspan="1" align="right"><?php echo $invoice[0]['net_amount']; ?></td>
        </tr>
        <tr>
          <td colspan="4" align="right"><b>Cash Recieved: </b></td>
          <td colspan="1" align="right"><?php echo $invoice[0]['paid_amount']; ?></td>
        </tr>
        <tr>
          <td colspan="4" align="right"><b>Balance: </b></td>
          <td colspan="1" align="right"><?php echo $invoice[0]['remaining']; ?></td>
        </tr>
        <tr>
          <th class="border_bottom" colspan="100%"></th>
        </tr>
        <tr><td colspan="100%">&nbsp;</td></tr>
        <tr><td colspan="100%">&nbsp;</td></tr>
        <tr><td colspan="100%">&nbsp;</td></tr>
        <tr style="text-align:center;">
          <th colspan="2" style="border-top: 1px solid black">Entered By</th>
          <th></th>
          <th colspan="2" style="border-top: 1px solid black">Signature</th>
        </tr>
      </tbody>
    </table>
  </td>
    <td>
      <table width="100%">
      <tbody>
        <tr>
          <th colspan="100%" align="center">Lab Invoice</th>
        </tr>
        <tr>
          <td align="right"><img src="<?php echo STATIC_ADMIN_IMAGE.'logo.png'?>" height="60px;"></td>
          <td colspan="4" align="center"><b style="font-size: 22px;"> <?php echo $invoice[0]['org_name'].' , '.$invoice[0]['org_address'];?></b><br><?php echo $invoice[0]['org_phone'];?></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
          <th class="border_bottom" colspan="100%"></th>
        </tr>
        <tr>
          <td colspan="2">Invoice Id: <b><?php echo $invoice[0]['invoice_id'];?></b></td>
          <td colspan="3" align="right">Issue Date: <b><?php echo $invoice[0]['date_time'];?></b></td>
        </tr>
        <tr>
          <td colspan="2">Reference No: <b><?php echo $invoice[0]['p_id'];?></b></td>
          <td colspan="3" align="right">Delivery Date : <b><?php echo $invoice[0]['delivery_date'];?></b></td>
        </tr>
        <tr><td colspan="100%">&nbsp;</td></tr>
        <tr>
          <td colspan="2">Patient Name: <b><?php echo $invoice[0]['name'];?></b></td>
          <td colspan="3" align="right">Referred By: <b><?php echo $invoice[0]['referred_by']; ?></b></td>
        </tr>
        <tr>
          <td colspan="100%">Patient Phone: <b><?php echo $invoice[0]['mobile'];?></b></td>
        </tr>
        <tr><td colspan="100%"><hr></td></tr>
        <tr align="center">
          <th colspan="1" class="border1"><b>Sr. No</th>
          <th colspan="1" class="border1"><b>Category</th>
          <th colspan="2" class="border1">Test</th>
          <th colspan="1" class="border1" style="border-right: 1px solid black"><b>Price</th>
        </tr>
        <?php foreach ($invoice as $key => $value) { ?>
        <tr align="center">
          <td colspan="1" class="border1"> <?php echo $y;?></td>
          <td colspan="1" class="border1"> <?php echo $value['category_name'];?></td>
          <td colspan="2" class="border1"> <?php echo $value['test_name'];?></td>
          <td colspan="1" class="border1" style="border-right: 1px solid black"> <?php echo $value['charges'];?></td>
          <th></th>
        </tr>
      <?php $y++; }  ?>
      <tr><td colspan="100%"><hr></td></tr>
        <tr>
          <td colspan="4" align="right"><b>Total Amount: </b></td>
          <td colspan="1" align="right"><?php echo $invoice[0]['total_pay']; ?></td>
        </tr>
        <tr>
          <td colspan="4" align="right"><b>Discount: </b></td>
          <td colspan="1" align="right"><?php echo $invoice[0]['discount']; ?></td>
        </tr>
        <tr>
          <td colspan="4" align="right"><b>Net Amount: </b></td>
          <td colspan="1" align="right"><?php echo $invoice[0]['net_amount']; ?></td>
        </tr>
        <tr>
          <td colspan="4" align="right"><b>Cash Recieved: </b></td>
          <td colspan="1" align="right"><?php echo $invoice[0]['paid_amount']; ?></td>
        </tr>
        <tr>
          <td colspan="4" align="right"><b>Balance: </b></td>
          <td colspan="1" align="right"><?php echo $invoice[0]['remaining']; ?></td>
        </tr>
        <tr>
          <th class="border_bottom" colspan="100%"></th>
        </tr>
        <tr><td colspan="100%">&nbsp;</td></tr>
        <tr><td colspan="100%">&nbsp;</td></tr>
        <tr><td colspan="100%">&nbsp;</td></tr>
        <tr style="text-align:center;">
          <th colspan="2" style="border-top: 1px solid black">Entered By</th>
          <th></th>
          <th colspan="2" style="border-top: 1px solid black">Signature</th>
        </tr>
      </tbody>
    </table>
    </td>
  </tr>
</table>
<div>
<b> Powered by XpertSpot </b> <b style="float: right;"> Powered by XpertSpot </b>
</div>
</body>
<script type="text/javascript">
window.print();
</script>