<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<style type="text/css">
  @media print {
    html, body {
        font-family: 'Roboto', sans-serif;
    }
  }
  body {
    font-family: 'Roboto', sans-serif;
  }
  .border_bottom {
    border-bottom: 2px solid black;
  }
  .border1 {
    border-left:1px solid black;
    border-top:1px solid black;
    padding: 10px;
  }
</style>
<body class="container pt-5">
    <div class="row">
    <div class="col-md-3">
      <img src="<?php echo STATIC_ADMIN_IMAGE.'logo.png'?>" height="100px;">
    </div>
    <div class="col-md-6 ">
      <h1 style="text-align: center;">
      <?php echo $report[0]['org_name']; ?>
      </h1>
      <h5 class="display-5 text-break" style="text-align: center;">
        <?php echo $report[0]['org_address']; ?><br>
        Ph: <?php echo $report[0]['org_phone']; ?>
      </h5>
    </div>
    <div class="col-md-3">
      <h2 style="text-align: right;">
      Test Report
      </h2>
      <h5 class="display-5 text-break" style="text-align: right;">
        Date: <?php echo date('Y-m-d'); ?><br>
      </h5>
    </div>
  </div>
  <div class="row">&nbsp;</div>
  <div class="row">&nbsp;</div>
  <p class="border_bottom"></p>
  <div class="row pl-3 pr-3">
    <div class="col-md-5" style="border: 1px solid black;">
      <h2 style="text-align: left;">
      Patient Detail
      </h2>
      <h5 class="display-5 text-break" style="text-align: left;">
        <b>NAME:&nbsp;</b><?php echo $report[0]['name']; ?><br>
        <b>ADDRESS:&nbsp;</b><?php echo $report[0]['address']; ?><br>
        <b>MOBILE:&nbsp;</b><?php echo $report[0]['mobile']; ?><br>
        <b>CNIC:&nbsp;</b><?php echo $report[0]['cnic']; ?><br>
        <b>AGE:&nbsp;</b><?php echo $report[0]['age']; ?><br>
        <b>GENDER:&nbsp;</b><?php echo $report[0]['gender']; ?><br>
      </h5>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-5">
      <h5 class="display-5 text-break" style="text-align: left;">
        <b>REFERRED BY:&nbsp;</b><?php echo $report[0]['referred_by']; ?><br>
        <b>SAMPLE DATE:&nbsp;</b><?php echo $report[0]['date_time']; ?><br>
        <b>DELIVERY DATE:&nbsp;</b><?php echo $report[0]['delivery_date']; ?><br>
      </h5>
    </div>
  </div>
  <div class="row">&nbsp;</div>
  <div class="row">&nbsp;</div>
  <div class="row">&nbsp;</div>
<table width="100%">
  <thead align="center">
    <th colspan="1" class="border1">Test</th>
    <th colspan="1" class="border1">Normal Value</th>
    <th colspan="1" class="border1">Unit</th>
    <th colspan="1" class="border1" style="border-right: 1px solid black">Result</th>
  </thead>
  <tbody>
  <?php 
  foreach ($report as $key => $value) {
    ?>
    
    <tr style="text-align: center;">
      <td colspan="1" class="border1"> <?php echo 'T-'.$value['test_id'].' ('.$value['category_name'].') '.$value['test_name'];?></td>
      <td colspan="1" class="border1"> <?php echo $value['normal_value'];?></td>
      <td colspan="1" class="border1"> <?php echo $value['unit_name'];?></td>
      <td colspan="1" class="border1" style="border-right: 1px solid black"> <?php echo $value['result_value'];?></td>
    </tr>
  <?php  }  ?>
  <tr><td>&nbsp;</td></tr>
  <tr><td>&nbsp;</td></tr>
  </tbody>
</table>
  <div class="row mt-5 pt-5">
    <div class="col-md-9"></div>
    <div class="col-md-3">
      <h5 style="text-align: center; border-top:1px dashed black">Signature</h5>
    </div>
  </div>
<div>
<b> Powered by XpertSpot +92-300-2660908</b>
<p style="page-break-after: always"> </p>
</div>
</body>
<script type="text/javascript">
window.print();
</script>