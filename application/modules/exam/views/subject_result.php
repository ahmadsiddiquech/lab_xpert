<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style type="text/css">
  @media print {
    * {
        -webkit-print-color-adjust: exact;
    }
  }
  table,th,td {
    border: 2px solid black;
    text-align: center;
  }
  .img-opacity {
    background-position: center;
    background-image: url("<?=STATIC_ADMIN_IMAGE.'logo.png'?>?>") !important;
    background-repeat: no-repeat;
  }
  div.transbox {
    margin: 30px;
    background-color: #ffffff;
    opacity: 0.8;
  }
  .border_top {
    border-top: 2px solid black;
  }
  .l-span{
    border-bottom: 1px solid black;
    width: 800px;
    display: inline-block;
    text-align: center;
  }
  .m-span{
    border-bottom: 1px solid black;
    width: 240px;
    display: inline-block;
    text-align: center;
  }
  .s-span  {
    border-bottom: 1px solid black;
    display: inline-block;
    text-align: center;
  }
</style>
<?php $i = 0 ?>
<div class="container mt-2 img-opacity">
  <div class="transbox">
  <div class="row">
    <div class="col-md-2">
      <img src="<?php echo STATIC_ADMIN_IMAGE.'logo.png'?>" height="120px;">
    </div>
    <div class="col-md-8 ">
      <h1 style="text-align: center;">
      <?php echo $org[0]['org_name']; ?>
      </h1>
      <h5 class="display-5 text-break" style="text-align: center;">
        <?php echo $org[0]['org_address']; ?><br>
        Ph: <?php echo $org[0]['org_phone']; ?>
      </h5>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-md-4">
      <h5>Subject Name: <span class="s-span"> <?=$subject[0]['subject_name']; ?></span></h5>
    </div>
    <div class="col-md-4" style="text-align: right">
      <h5>Exam Date: <span class="s-span"> <?=$subject[0]['exam_date']; ?></span></h5>
    </div>
    <div class="col-md-4" style="text-align: right">
      <h5>Total Marks: <span class="s-span"> <?=$subject[0]['total_marks']; ?></span></h5>
    </div>
  </div>
  <div class="row mt-2">
    <div class="col-md-4">
      <h5>Program:<span class="s-span"> <?=$exam[0]['program_name']; ?></span></h5>
    </div>
    <div class="col-md-4">
      <h5>Class:<span class="s-span"> <?=$exam[0]['class_name']; ?></span></h5>
    </div>
    <div class="col-md-4" style="text-align: right">
      <h5>Session:<span class="s-span"> <?=$exam[0]['end_date']; ?></span></h5>
    </div>
  </div>
  <table width="100%" class="mt-5">
    <thead>
      <th>Sr.No</th>
      <th>Student Name</th>
      <th>Registration No</th>
      <th>Obtained Marks</th>
      <th>Percentage</th>
    </thead>
    <tbody>
      <?php foreach ($marks as $key => $value) { $i++?>
      <tr>
        <td><?=$i?></td>
        <td><?=$value['name']?></td>
        <td><?=$value['reg_no']?></td>
        <td><?=$value['obtained']?></td>
        <td><?=$value['percent']?> %</td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <div class="row mt-5">
    <div class="col-md-12" style="text-align: right;">
      <h5>Total Marks: <span class="s-span"><?=$total?></span></h5>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12"  style="text-align: right;">
      <h5>Obtained Marks: <span class="s-span"><?=$obtained?></span></h5>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12"  style="text-align: right;">
      <h5>Percentage: <span class="s-span"><?=$percent?> %</span></h5>
    </div>
  </div>

  <div class="row mt-5 pt-5" >
    <div class="col-md-4" style="text-align: center;">
      <h5 class="border_top">Incharge's Signature</h5>
    </div>
    <div class="col-md-4" style="text-align: center;">
      <h5 class="border_top">Princpal's Signature</h5>
    </div>
  </div>
  </div>
</div>
<p style="bottom: 0px;position: fixed"><b> Powered by XpertSpot </b></p>

<script type="text/javascript">

window.print();

</script>