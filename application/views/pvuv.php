<!DOCTYPE htm>
<html>
    <head>
        <title>数据</title>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href='<?php echo base_url(); ?>application/views/bootstrap/css/bootstrap.css' rel='stylesheet'>
    </head>
	<body>
        <div id="container">
            <div class="row">
                <div class="col-md-3">PV/UV</div>
                <div class="col-md-3"><?php date_default_timezone_set('PRC');$time = date('m-d'); echo "<a href='/Pvuv/index/".$time."'>";?>今天</a></div>
                <div class="col-md-3"><?php $time = date('m-d',strtotime("-1 day")); echo "<a href='/Pvuv/index/".$time."'>";?>昨天</a></div>
            </div>
            <div class="row">
                        <div class="col-md-1">mac</div>
                        <div class="col-md-1">time</div>
                        <div class="col-md-1">pv</div>
                        <div class="col-md-2">download_app_times</div>
                        <div class="col-md-1">uv</div>
                        <div class="col-md-1">uv_andriod</div>
                        <div class="col-md-1">uv_ios</div>
                        <div class="col-md-1">uv_windows</div>
                        <div class="col-md-1">uv_others</div>
                        <div class="col-md-1">&nbsp;</div>
                        <div class="col-md-1">&nbsp;</div>
            </div>
            <div class="row">
                    <?php foreach($pvuv_data as $row):?>
                        <div class="col-md-1"><?php echo $row['mac'];?></div>
                        <div class="col-md-1"><?php echo $row['time'];?></div>
                        <div class="col-md-1"><?php echo $row['pv'];?></div>
                        <div class="col-md-2"><?php echo $row['download_app_times'];?></div>
                        <div class="col-md-1"><?php echo $row['uv'];?></div>
                        <div class="col-md-1"><?php echo $row['uv_android'];?></div>
                        <div class="col-md-1"><?php echo $row['uv_ios'];?></div>
                        <div class="col-md-1"><?php echo $row['uv_windows'];?></div>
                        <div class="col-md-1"><?php echo $row['uv_others'];?></div>             
                        <div class="col-md-2">&nbsp;</div>
                    <?php endforeach?>
            </div>
        </div>
    </body>
    <script src='<?php echo base_url(); ?>application/views/bootstrap/js/bootstrap.js'></script>
</html>