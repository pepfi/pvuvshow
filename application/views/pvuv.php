<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>数据</title>
</head>

	<body>
		<table border="1" style="font-family:'宋体'; font-size:30px;" class="" id="table2">
		<tbody>
			<tr>
				<th>PV Total</th>
				<th>UV Total</th>
				<th>PV Today</th>
				<th>UV Today</th>
				<th>PV Yesterday</th>
				<th>UV Yesterday</th>
			</tr>
			<tr>
				<td>639757</td>
				<td>3387</td>
				<td>639757</td>
				<td>3387</td>
				<td>0</td>
				<td>0</td>
			</tbody>
		</table>
		<hr>
		<table border="1" style="font-family:'宋体'; font-size:30px;" class="" id="table">
        	<tbody>
            	<tr> 
                    <th><i class=""></i>mac</th>
					<th><i class=""></i>time</th>
					<th><i class=""></i>pv</th>
					<th><i class=""></i>download_app_times</th>
					<th><i class=""></i>uv</th>
					<th><i class=""></i>andriod</th>
					<th>ios</th>
					<th>windows</th>
					<th>unkown</th>
					<th>others</th>
					<th>更多操作</th>
                 </tr>
                <?php foreach($mac0000 as $row):?>
				 <tr>
                 	<td>00-00</td>
                    <td><?php echo $row['time'];?></td>
                    <td><?php echo $row['pv'];?></td>
                    <td><?php echo $row['download_app_times'];?></td>
                    <td><?php echo $row['uv'];?></td>
                    <td><?php echo $row['android'];?></td>
                    <td><?php echo $row['ios'];?></td>
                    <td><?php echo $row['windows'];?></td>
                    <td><?php echo $row['unknown'];?></td>
                    <td><?php echo $row['others'];?></td>             
                    <td>
						<a class="btn btn-primary" href="http://120.26.47.127:8090/mac0000time0107.html#os">更多<i class="icon_plus_alt2"></i></a>
					</td>
				</tr> 
                <?php endforeach?>
                <?php foreach($mac0020 as $row):?>
				 <tr>
                 	<td>00-20</td>
                    <td><?php echo $row['time'];?></td>
                    <td><?php echo $row['pv'];?></td>
                    <td><?php echo $row['download_app_times'];?></td>
                    <td><?php echo $row['uv'];?></td>
                    <td><?php echo $row['android'];?></td>
                    <td><?php echo $row['ios'];?></td>
                    <td><?php echo $row['windows'];?></td>
                    <td><?php echo $row['unknown'];?></td>
                    <td><?php echo $row['others'];?></td>          
                    <td>
						<a class="btn btn-primary" href="http://120.26.47.127:8090/mac0020time0107.html#os">更多<i class="icon_plus_alt2"></i></a>
					</td>
				</tr>
                <?php endforeach?>
                <?php foreach($mac0040 as $row):?>
				 <tr>
                 	<td>00-40</td>
                    <td><?php echo $row['time'];?></td>
                    <td><?php echo $row['pv'];?></td>
                    <td><?php echo $row['download_app_times'];?></td>
                    <td><?php echo $row['uv'];?></td>
                    <td><?php echo $row['android'];?></td>
                    <td><?php echo $row['ios'];?></td>
                    <td><?php echo $row['windows'];?></td>
                    <td><?php echo $row['unknown'];?></td>
                    <td><?php echo $row['others'];?></td>         
                    <td>
						<a class="btn btn-primary" href="http://120.26.47.127:8090/mac0040time0107.html#os">更多<i class="icon_plus_alt2"></i></a>
					</td>
				</tr>
                <?php endforeach?>
				<?php foreach($mac0060 as $row):?>
				 <tr>
                 	<td>00-60</td>
                    <td><?php echo $row['time'];?></td>
                    <td><?php echo $row['pv'];?></td>
                    <td><?php echo $row['download_app_times'];?></td>
                    <td><?php echo $row['uv'];?></td>
                    <td><?php echo $row['android'];?></td>
                    <td><?php echo $row['ios'];?></td>
                    <td><?php echo $row['windows'];?></td>
                    <td><?php echo $row['unknown'];?></td>
                    <td><?php echo $row['others'];?></td>          
                    <td>
						<a class="btn btn-primary" href="http://120.26.47.127:8090/mac0060time0107.html#os">更多<i class="icon_plus_alt2"></i></a>
					</td>
				</tr>
                <?php endforeach?>
				<?php foreach($mac0080 as $row):?>
				 <tr>
                 	<td>00-80</td>
                    <td><?php echo $row['time'];?></td>
                    <td><?php echo $row['pv'];?></td>
                    <td><?php echo $row['download_app_times'];?></td>
                    <td><?php echo $row['uv'];?></td>
                    <td><?php echo $row['android'];?></td>
                    <td><?php echo $row['ios'];?></td>
                    <td><?php echo $row['windows'];?></td>
                    <td><?php echo $row['unknown'];?></td>
                    <td><?php echo $row['others'];?></td>            
                    <td>
						<a class="btn btn-primary" href="http://120.26.47.127:8090/mac0080time0107.html#os">更多<i class="icon_plus_alt2"></i></a>
					</td>
				</tr>
                <?php endforeach?>
				<?php foreach($mac0100 as $row):?>
				 <tr>
                 	<td>01-00</td>
                    <td><?php echo $row['time'];?></td>
                    <td><?php echo $row['pv'];?></td>
                    <td><?php echo $row['download_app_times'];?></td>
                    <td><?php echo $row['uv'];?></td>
                    <td><?php echo $row['android'];?></td>
                    <td><?php echo $row['ios'];?></td>
                    <td><?php echo $row['windows'];?></td>
                    <td><?php echo $row['unknown'];?></td>
                    <td><?php echo $row['others'];?></td>            
                    <td>
						<a class="btn btn-primary" href="http://120.26.47.127:8090/mac0100time0107.html#os">更多<i class="icon_plus_alt2"></i></a>
					</td>
				</tr>
                <?php endforeach?>
				<?php foreach($mac00A0 as $row):?>
				 <tr>
                 	<td>00-A0</td>
                    <td><?php echo $row['time'];?></td>
                    <td><?php echo $row['pv'];?></td>
                    <td><?php echo $row['download_app_times'];?></td>
                    <td><?php echo $row['uv'];?></td>
                    <td><?php echo $row['android'];?></td>
                    <td><?php echo $row['ios'];?></td>
                    <td><?php echo $row['windows'];?></td>
                    <td><?php echo $row['unknown'];?></td>
                    <td><?php echo $row['others'];?></td>              
                    <td>
						<a class="btn btn-primary" href="http://120.26.47.127:8090/mac00A0time0107.html#os">更多<i class="icon_plus_alt2"></i></a>
					</td>
				</tr>
                <?php endforeach?>
				<?php foreach($mac00C0 as $row):?>
				 <tr>
                 	<td>00-C0</td>
                    <td><?php echo $row['time'];?></td>
                    <td><?php echo $row['pv'];?></td>
                    <td><?php echo $row['download_app_times'];?></td>
                    <td><?php echo $row['uv'];?></td>
                    <td><?php echo $row['android'];?></td>
                    <td><?php echo $row['ios'];?></td>
                    <td><?php echo $row['windows'];?></td>
                    <td><?php echo $row['unknown'];?></td>
                    <td><?php echo $row['others'];?></td>             
                    <td>
						<a class="btn btn-primary" href="http://120.26.47.127:8090/mac00C0time0107.html#os">更多<i class="icon_plus_alt2"></i></a>
					</td>
				</tr>
                <?php endforeach?>
				<?php foreach($mac00E0 as $row):?>
				 <tr>
                 	<td>00-E0</td>
                    <td><?php echo $row['time'];?></td>
                    <td><?php  echo $row['pv'];?></td>
                    <td><?php echo $row['download_app_times'];?></td>
                    <td><?php echo $row['uv'];?></td>
                    <td><?php echo $row['android'];?></td>
                    <td><?php echo $row['ios'];?></td>
                    <td><?php echo $row['windows'];?></td>
                    <td><?php echo $row['unknown'];?></td>
                    <td><?php echo $row['others'];?></td>              
                    <td>
						<a class="btn btn-primary" href="http://120.26.47.127:8090/mac00E0time0107.html#os">更多<i class="icon_plus_alt2"></i></a>
					</td>
				</tr>
                <?php endforeach?>
				<?php foreach($mac0120 as $row):?>
				 <tr>
                 	<td>01-20</td>
                    <td><?php echo $row['time'];?></td>
                    <td><?php echo $row['pv'];?></td>
                    <td><?php echo $row['download_app_times'];?></td>
                    <td><?php echo $row['uv'];?></td>
                    <td><?php echo $row['android'];?></td>
                    <td><?php echo $row['ios'];?></td>
                    <td><?php echo $row['windows'];?></td>
                    <td><?php echo $row['unknown'];?></td>
                    <td><?php echo $row['others'];?></td>             
                    <td>
						<a class="btn btn-primary" href="http://120.26.47.127:8090/mac0120time0107.html#os">更多<i class="icon_plus_alt2"></i></a>
					</td>
                </tr>
                <?php endforeach?>
            </tbody>
	</table>
	<hr>
</body>
</html>