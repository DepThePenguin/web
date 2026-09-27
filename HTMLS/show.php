<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=Windows-1252">
		<title>HONG AN Services Trading Co.,Ltd</title>
		<meta name="vs_defaultClientScript" content="JavaScript">
		<script type="text/JavaScript" src="../Java/changebutton.js"></script>
		<script type="text/JavaScript" src="../Java/ngay.js"></script>
		<script type="text/JavaScript" src="../Java/menu.js"></script>
		<link rel=stylesheet type="text/css" href="../CSS/style.css">
	</head>
<body topmargin=0 leftmargin=0 background="../Images/background.jpg" onLoad="showTheTime()"><font face="Arial">
		<table width=850 align="center" border=0 cellpadding=0 cellspacing=0 background="../Images/backtop.jpg">
			<tr>
				<td width=200 align="middle" height=160>
					<img src="../Images/logo.gif" width=80><br>
					<span style='font-size:20pt;color:#1478AC'><b>H&#7890;NG &Acirc;N</b></span>
				</td>
				<td colspan=2 align="right" valign="bottom">
					<span style='font-size:8pt;color:#1478AC'>
						<b>H&ocirc;m nay, 
							<script type="text/JavaScript">
								document.write(thuarray[thu]+", ng&agrave;y "+ngay+" th&aacute;ng "+thangarray[thang]+" n&#259;m "+nam)
							</script>
						</b>
					</span>
				</td>
			</tr>
			<tr>
				<td height=34 align="middle">
					<?php
						echo "<font color='#FFFFFF'>";
						include("connect.php");
						echo "</font>";
						$countQuery = mysql_query("select * from online");
						$total = mysql_num_rows($countQuery);
					?>
					<span style='font-size:8pt;color:#1478AC'><a href="../index.php">Ti&#7871;ng Vi&#7879;t</a> | <a href="../indexen.php">Ti&#7871;ng Anh</a></span>
				</td>
				<td valign="bottom" align="center">
					<input type="button" value="Trang Ch&#7911;" style="font-size:12" onMouseout="change('../Images/button-cam.gif')" onClick="link('../index.php')" class="button-cam" />
					<input type="button" value="Gi&#7899;i thi&#7879;u" style="font-size:12" onClick="link('gioithieu.php')" onMouseover="change('../Images/button-cam.gif')" onMouseout="change('../Images/button-xanh.gif')" class="button-xanh" />
					<input type="button" value="&#272;&#7863;t H&agrave;ng" style="font-size:12" onClick="link('dathang.php')" onMouseover="change('../Images/button-cam.gif')" onMouseout="change('../Images/button-xanh.gif')" class="button-xanh" />
					<input type="button" value="Li&ecirc;n H&#7879;" style="font-size:12" onClick="link('lienhe.php')" onMouseover="change('../Images/button-cam.gif')" onMouseout="change('../Images/button-xanh.gif')" class="button-xanh" />
				</td>
				<td valign="bottom">
					<input name="Search" type="text" align="middle" size=20 style="color:#1478AC" value="Nh&#7853;p t&#7915; kh&oacute;a &#273;&#7875; t&igrave;m" onFocus="if(this.value=='Nh&#7853;p t&#7915; kh&oacute;a &#273;&#7875; t&igrave;m') this.value='';" onBlur="if(this.value=='') this.value='Nh&#7853;p t&#7915; kh&oacute;a &#273;&#7875; t&igrave;m';">
					<a href="search.php"><img src="../Images/kinhlup.gif" border=0 width=18 height=18></a>
				</td>
			</tr>
		</table>
		<table width=850 align="center" border=0 cellpadding=0 cellspacing=0 bgcolor="FFFFFF">
			<tr bgcolor="DAE8EF">
				<td colspan=3 height=30 valign="center">
					<marquee><b><span style='font-size:9pt;color:#2C3AF0'>145/5 Phan V&#259;n Tr&#7883; P.14 Q.B&igrave;nh Th&#7841;nh Tp.HCM * &#272;T: 3.51 61 0 61 - 0903.649058 * Website: tuivaikhongdethongan.com * Email: honganprint2010@gmail.com</span><b></marquee>
				</td>
			</tr>
			<tr>
				<td valign="top">
					<table width=190 border=1 bordercolor="1478AC" style='border-collapse:collapse;border-top:none;border-bottom:none;border-left:none' cellpadding=0 cellspacing=0>
						<tr>
							<td bgcolor="1478AC" height=35 align="middle" style='border-top:none;border-left:none;border-bottom:none'>
								<span style='font-size:15pt;color:#FFFFFF'><b>S&#7843;n Ph&#7849;m</b></span>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-left:none;border-top:none' height=30 valign="center">
								<p style='text-indent:5pt'><img src="../Images/tamgiac.jpg">
									<span style='font-size:12pt;color:#008242'><b>T&uacute;i v&#7843;i kh&ocirc;ng d&#7879;t</b></span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' height=10 background="../Images/line.jpg">
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center" height=30>
								<p style='text-indent:15pt'>
									<img src="../Images/line.jpg">
									&nbsp;<span style='font-size:10pt'><a href="show.php?maloaisp=tuiquatang">T&uacute;i qu&agrave; t&#7863;ng</a></span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' height=10 background="../Images/line.jpg">
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center" height=30>
								<p style='text-indent:15pt'>
									<img src="../Images/line.jpg">
									&nbsp;<span style='font-size:10pt'><a href="show.php?maloaisp=tuihoinghi">T&uacute;i h&#7891; s&#417;, h&#7897;i ngh&#7883;</a></span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' height=10 background="../Images/line.jpg">
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center" height=30>
								<p style='text-indent:15pt'>
									<img src="../Images/line.jpg">
									&nbsp;<span style='font-size:10pt'><a href="show.php?maloaisp=tuiquangcao">T&uacute;i qu&#7843;ng c&aacute;o</a></span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' height=10 background="../Images/line.jpg">
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center" height=30>
								<p style='text-indent:15pt'>
									<img src="../Images/line.jpg">
									&nbsp;<span style='font-size:10pt'><a href="show.php?maloaisp=tuithoitrang">T&uacute;i th&#7901;i trang</a></span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' height=10 background="../Images/line.jpg">
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center" height=30>
								<p style='text-indent:15pt'>
									<img src="../Images/line.jpg">
									&nbsp;<span style='font-size:10pt'><a href="show.php?maloaisp=tuishopping">T&uacute;i shopping, si&ecirc;u th&#7883;</a></span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' height=10 background="../Images/line.jpg">
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center" height=30>
								<p style='text-indent:15pt'>
									<img src="../Images/line.jpg">
									&nbsp;<span style='font-size:10pt'><a href="show.php?maloaisp=tuiruou">T&uacute;i r&#432;&#7907;u</a></span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' height=10 background="../Images/line.jpg">
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center" height=25>
								<p style='text-indent:5pt'>
									<img src="../Images/tamgiac.jpg">
									<font style="cursor:hand;size:12pt"><a href="show.php?maloaisp=thiepcuoi" style="link{font-weight:bold;color:#008242;text-decoration:none;}">Thi&#7879;p  c&#432;&#7899;i</a></font>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' height=10 background="../Images/line.jpg">
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center">
								<p style='text-indent:5pt'>
									<img src="../Images/tamgiac.jpg">
									<font style="cursor:hand;color:#008242;font-weight:bold;font-size:12pt" onMouseOver="doit(document.all[this.sourceIndex+1])">S&#7843;n ph&#7849;m kh&aacute;c</font>
									<span style="display:none;font-size:10pt" style="&amp;{head};">
										<p style='text-indent:15pt'>
											<img src="../Images/line.jpg">
											&nbsp;<a href="show.php?maloaisp=danhthiep">Danh thi&#7871;p</a>
										<p style='text-indent:15pt'>
											<img src="../Images/line.jpg">
											&nbsp;<a href="show.php?maloaisp=anpham">&#7844;n ph&#7849;m v&#259;n ph&ograve;ng</a>
										</p>
										<p style='text-indent:15pt'>
											<img src="../Images/line.jpg">
											&nbsp;<a href="show.php?maloaisp=baothu">Bao th&#432;</a>
										</p>
										<p style='text-indent:15pt'>
											<img src="../Images/line.jpg">
											&nbsp;<a href="show.php?maloaisp=tieude">Gi&#7845;y ti&ecirc;u &#273;&#7873;</a>
										</p>
										<p style='text-indent:15pt'>
											<img src="../Images/line.jpg">
											&nbsp;<a href="show.php?maloaisp=photo">Photocopy, &#273;&oacute;ng s&aacute;ch</a>
										</p>
										<p style='text-indent:15pt'>
											<img src="../Images/line.jpg">
											&nbsp;<a href="show.php?maloaisp=web">Thi&#7871;t k&#7871; website</a>
										</p>
									</span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' height=10 background="../Images/line.jpg">
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center" height=25>
								<p style='text-indent:5pt'>
									<img src="../Images/tamgiac.jpg">
									<font style="cursor:hand;size:12pt"><a href="show.php?maloaisp=khachhang" style="link{font-weight:bold;color:#008242;text-decoration:none;}">Kh&aacute;ch h&agrave;ng</a></font>
								</p>
							</td>
						</tr>
						<tr>
							<td bgcolor="1478AC" height=35 align="middle" style='border-bottom:none;border-top:none;border-left:none'>
								<span style='font-size:15pt;color:#FFFFFF'><b>Th&#7889;ng K&ecirc;</b></span>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-left:none;border-top:none' valign="center" height=30>
								<p style='text-indent:5pt'>
									<img src="../Images/tamgiac.jpg">
									&nbsp;<span style='font-size:12pt;color:#008242'><b>H&#7879; th&#7889;ng gi&#7901;</b></span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' align="middle"><font size=2.5 color="1478AC"><b>
								<form name=form>
									<script type="text/JavaScript" src="../Java/gio.js"></script>
									<input type=text style="border:none;color:#1478AC;font-weight:bold;font-size:15pt" name=showTime size=9 align="midde"><br>
									<span style='font-size:10pt'>
										<input type=radio name=showMilitary checked>Military Time<br>
										<input type=radio name=showMilitary>12 Hour Time
									</span>
								</form></b></font>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center" height=30>
								<p style='text-indent:5pt'>
									<img src="../Images/tamgiac.jpg">
									&nbsp;<span style='font-size:12pt;color:#008242'><b>H&#7895; tr&#7907; tr&#7921;c tuy&#7871;n</b></span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' align="middle">
								<span style='font-size:12pt;color:#FF0000'><b>Hotline: 0903.649058</b></span>
							</td>
						</tr>
							<td style='border-bottom:none;border-top:none;border-left:none' align="middle" height=40>
								<a href="ymsgr:sendIM?nhntrung"><img src="http://opi.yahoo.com/online?u=nhntrung&amp;m=g&amp;t=2" border=0	valign="center"></a>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' align="middle" height=40>
								<a href="ymsgr:sendIM?khicon121080"><img src="http://opi.yahoo.com/online?u=khicon121080&amp;m=g&amp;t=2" border=0 valign="center"></a>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center" height=25>
								<p style='text-indent:5pt'>
									<img src="../Images/tamgiac.jpg">
									&nbsp;<span style='font-size:12pt;color:#008242'><b>Th&#7889;ng k&ecirc; truy c&#7853;p</b></span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' align="middle">
								<p style='text-indent:15pt'>
									<span style='font-size:12pt;color:#1478AC'>
										<?php echo "<b>".$total."</b>" ?>
									</span>
								</p>
							</td>
						</tr>
					</table>
				</td>
				<td valign="top" width=500>
					<table border=0>
						<tr>
							<td>
								<?php
									$masp = $_GET["maloaisp"];
									$page = isset ($_GET["page"]) ? intval ($_GET["page"]) : 1;
									$rows_per_page = 9;
									$page_start = ($page - 1) * $rows_per_page;
									$page_end = $page * $rows_per_page;
									$sql_query = mysql_query("SELECT * FROM DMSanPham where MaLoaiSanPham='".$masp."'",$conn);
									$number_of_page = ceil ( mysql_num_rows( $sql_query ) / $rows_per_page );
									if ($number_of_page > 1)
									{
										$list_page = " <td> Trang: </td>";
										for ($i = 1; $i <= $number_of_page; $i++)
										{
											if ($i == $page)
											{
												$list_page .= " <td>[ <b>{$i}</b> ]</td> ";
											}
											else
											{
												$list_page .= "<td><a href='show.php?page={$i}&maloaisp={$masp}'> {$i} </a></td>";
											}
										}
									}
									$j = 1;
									echo "<table border=1 bordercolor=#1478AC style='border-collapse:collapse' cellpadding=0 cellspacing=0><tr>";
									while ($result = mysql_fetch_array($sql_query))
									{
										if ($j > $page_start)
										{
											echo "<td align='center' width=160 valign='bottom'>";
											echo "<img border=0 src='".$result[2]."' width=100><br>";
											echo "<font size=2>T&uacute;i v&#7843;i kh&ocirc;ng d&#7879;t<br>".$result[0];
											if (substr($result[1],0,3) <> 'tui')
											{
												echo "Th&ocirc;ng s&#7889;: ".$result[3]."<br>";
												echo "Gi&aacute;: ".$result[4]."</td>";
											}
											else echo "</td>";
											if ($j % 3 == 0)
											{
												echo "</tr>";
												echo "<tr>";
											}
										}
										if ($j >= $page_end)
										{
											break;
										}
										$j++;
									}
									echo "<table cellspacing=4 cellpadding=0 border=0>";
									echo "<tr>";
									echo "{$list_page}";
									echo "</tr>";
									echo "</table>";
									mysql_close($conn);
								?>
							</td>
						</tr>
					</table>
				</td>
				<td valign="top" width=160>
					<table border=1 bordercolor="1478AC" style='border-collapse:collapse;border-top:none;border-bottom:none;border-right:none' cellpadding=0 cellspacing=0>
						<tr>
							<td align="center" width=160 style='border-top:none;border-bottom:none;border-right:none'>
								<marquee height=745 width=100 direction="up" onMouseOver="this.stop();" onMouseOut="this.start();">
									<img src="../Images/TuiQuaTang/QT65.jpg" width=100><br>
									<img src="../Images/TuiThoiTrang/TT23.jpg" width=100><br>
									<img src="../Images/TuiHoiNghi/HN32.jpg" width=100><br>
									<img src="../Images/TuiQuangCao/QC03.jpg" width=100><br>
									<img src="../Images/TuiThoiTrang/TT01.jpg" width=100><br>
									<img src="../Images/TuiHoiNghi/HN37.jpg" width=100><br>
									<img src="../Images/TuiQuaTang/QT06.jpg" width=100><br>
									<img src="../Images/TuiRuou/R08.jpg" width=100><br>
									<img src="../Images/TuiThoiTrang/TT02.jpg" width=100><br>
									<img src="../Images/TuiHoiNghi/HN08.jpg" width=100><br>
									<img src="../Images/TuiHoiNghi/HN28.jpg" width=100><br>
									<img src="../Images/TuiHoiNghi/HN34.jpg" width=100>
								</marquee>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan=3 bgcolor="1478AC" height=45 align="middle">
					<font color="FFFFFF" size=2><b>02 - 2011 &#169; Copyright by HONG AN Services Trading Co.,Ltd. All rights reserved</b></font>
				</td>
			</tr>
		</table>
	</body>
</html>