<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAC</title>
</head>
<body>
    <h1>OBTENCION Y VALIDACION DE MAC
    </h1>

    <table>
<thead>
    <th>mac</th>
</thead>
<tbody>
   
</tbody>

    </table>
</body>
</html>

<br>
<?php
$arp=`arp -a`;
$lines=explode("\n", $arp);
$devices = array();
foreach($lines as $line){
    $cols=preg_split('/\s+/', trim($line));
    if(isset($cols[2]) && $cols[2]=='dynamic'){
      $temp = array();
      $temp['ip'] = $cols[0];
      $temp['mac'] = $cols[1];
      $devices[] = $temp;
  }
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha256-SC9pI7daKIBEHzXq0JEtOr9yMl5V7yMMqoowsw8uzNs=" crossorigin="anonymous" />
<div class="container" style="margin-top:250px;">
  <div class="row">
    <div class="col-12">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>IP</th>
            <th>MAC</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($devices as $device){?>
            <tr>
              <td><?php echo $device['ip'];?></td>
              <td><?php echo $device['mac'];?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>