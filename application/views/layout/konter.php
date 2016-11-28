<?php

	$ip_address = $_SERVER['REMOTE_ADDR'];
	$tanggal = date("Ymd");
	$waktu = time();
	$bln =date("m");
	$tgl =date("d");
	$blan=date("Y-m");
	$thn=date("Y");
	$tglk=$tgl-1;
	
	$s=mysql_query("SELECT * FROM konter WHERE ip_address ='$ip_address' AND tanggal ='$tanggal'");
	if(mysql_num_rows($s)== 0){
	mysql_query ("INSERT INTO konter(ip_address, tanggal, hits, online) VALUES ('$ip_address','$tanggal','1','$waktu')");
	}
	else{
	mysql_query("UPDATE konter SET hits=hits+1, online='$waktu' WHERE ip_address='$ip_address'tanggal ='$tanggal'");
	}
	if($tglk=='1' | $tglk=='2'| $tglk=='3'| $tglk=='4'| $tglk=='5'| $tglk=='6'| $tglk=='7'| $tglk=='8'| $tglk=='9'){
	$kemarin = mysql_query ("SELECT * FROM konter WHERE tanggal='$thn-$bln-0$tglk'");
	}else{
	$kemarin = mysql_query ("SELECT * FROM konter WHERE tanggal='$thn-$bln-$tglk'");
	}
	$bulan = mysql_query ("SELECT * FROM konter WHERE tanggal LIKE '%$blan%'");
	$bulan1=mysql_num_rows($bulan);
	$tahunini=mysql_query("SELECT * FROM konter WHERE tanggal LIKE '%$thn%'");
	$tahunini1=mysql_num_rows($tahunini);
		$pengunjung = mysql_num_rows(mysql_query("SELECT * FROM konter WHERE tanggal ='$tanggal' GROUP BY ip_address"));
		$totalpengunjung= mysql_result(mysql_query("SELECT COUNT(hits)FROM konter"),0);
		$hits=mysql_fetch_assoc(mysql_query("SELECT SUM(hits)as hitstoday FROM konter WHERE tanggal='$tanggal' GROUP BY tanggal"));
		$totalhits=mysql_result(mysql_query("SELECT SUM(hits) FROM konter"),0);
		$bataswaktu=time()-300;
		$pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM konter WHERE online > '$bataswaktu'"));
		$kemarin1=mysql_num_rows($kemarin);?>
		<div class="konter">
		<table >
		<tbody align="left" >
		<tr>
			<td><img src="assets/ico/1.ico" width="30" height="30" alt="" />&nbspHari ini</td>
			<td>:&nbsp&nbsp&nbsp<?php echo "$pengunjung" ?></td>
		</tr>
		<tr>
					<td><img src="assets/ico/2.ico" width="30" height="30" alt="" />&nbspKemarin</td>
					<td>:&nbsp&nbsp&nbsp<?php echo "$kemarin1" ?></td>
				</tr>
				<tr>
					<td><img src="assets/ico/3.ico" width="30" height="30" alt="" />&nbspBulan Ini</td>
					<td>:&nbsp&nbsp&nbsp<?php echo "$bulan1" ?></td>
				</tr>
				<tr>
					<td><img src="assets/ico/4.ico" width="30" height="30" alt="" />&nbspTahun Ini</td>
					<td>:&nbsp&nbsp&nbsp<?php echo "$tahunini1" ?></td>
				</tr>
				<tr>
					<td><img src="assets/ico/5.ico" width="30" height="30" alt="" />&nbspTotal</td>
					<td>:&nbsp&nbsp&nbsp<?php echo "$totalhits" ?></td>
				</tr>
				<tr>
					<td><img src="assets/ico/6.ico" width="30" height="30" alt="" />&nbspHits Counts</td>
					<td>:&nbsp&nbsp&nbsp<?php echo "$hits[hitstoday]" ?></td>
				</tr>
				<td><img src="assets/ico/8.ico" width="30" height="30" alt="" />&nbspNow Online</td>
				<td>:&nbsp&nbsp&nbsp<b><?php echo "$pengunjungonline" ?>&nbspUser</b></td>
			</tbody>
		</table>
		</div>
	
