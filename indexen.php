<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=Windows-1252">
		<title>HONG AN Services Trading Co.,Ltd</title>
		<meta name="vs_defaultClientScript" content="JavaScript">
		<script type="text/JavaScript" src="Java/changebutton.js"></script>
		<script type="text/JavaScript" src="Java/ngay.js"></script>
		<script type="text/JavaScript" src="Java/menu.js"></script>
		<link rel=stylesheet type="text/css" href="CSS/style.css">
	</head>
	<body topmargin=0 leftmargin=0 background="Images/background.jpg" onLoad="showTheTime()"><font face="Arial">
		<table width=850 align="center" border=0 cellpadding=0 cellspacing=0 background="Images/backtop.jpg">
			<tr>
				<td width=200 align="middle" height=160>
					<img src="Images/logo.gif" width=80><br>
					<span style='font-size:20pt;color:#1478AC'><b>H&#7890;NG &Acirc;N</b></span>
				</td>
				<td colspan=2 align="right" valign="bottom">
					<span style='font-size:8pt;color:#1478AC'>
						<b>Today, 
							<script type="text/JavaScript">
								document.write(dayarray[thu]+" "+date+" "+montharray[thang]+" "+nam)
							</script>
						</b>
					</span>
				</td>
			</tr>
			<tr>
				<td height=34 align="middle">
					<?php
						include("HTMLS/connect.php");
						$countQuery = mysql_query("select * from online");
						$total = mysql_num_rows($countQuery);
					?>
					<span style='font-size:8pt;color:#1478AC'><a href="index.php">Vietnamese</a> | <a href="indexen.php">English</a></span>
				</td>
				<td valign="bottom" align="center">
					<input type="button" value="Home" style="font-size:12;cursor:hand" onMouseout="change('Images/button-cam.gif')" onClick="link('index.php')" class="button-cam" />
					<input type="button" value="Introduce" style="font-size:12;cursor:hand" onClick="link('introduce.html')" onMouseover="change('Images/button-cam.gif')" onMouseout="change('Images/button-xanh.gif')" class="button-xanh" />
					<input type="button" value="Deposit" style="font-size:12;cursor:hand" onClick="link('deposit.html')" onMouseover="change('Images/button-cam.gif')" onMouseout="change('Images/button-xanh.gif')" class="button-xanh" />
					<input type="button" value="Contact" style="font-size:12;cursor:hand" onClick="link('contact.html')" onMouseover="change('Images/button-cam.gif')" onMouseout="change('Images/button-xanh.gif')" class="button-xanh" />
				</td>
				<td valign="bottom">
					<input name="Search" type="text" align="middle" size=20 style="color:#1478AC" value="Input words to find" onFocus="if(this.value=='Input words to find') this.value='';" onBlur="if(this.value=='') this.value='Input words to find">
					<a href="HTMLS/search.php"><img src="Images/kinhlup.gif" border=0 width=18 height=18></a>
				</td>
			</tr>
		</table>
		<table width=850 align="center" border=0 cellpadding=0 cellspacing=0 bgcolor="FFFFFF">
			<tr bgcolor="DAE8EF">
				<td colspan=3 height=30 valign="center">
					<marquee><b><span style='font-size:9pt;color:#2C3AF0'>145/5 Phan V&#259;n Tr&#7883; Street Ward 14 B&igrave;nh Th&#7841;nh District HCM City * Tel: 3.51 61 0 61 - 0903.649058 * Website: tuivaikhongdethongan.com * Email: honganprint2010@gmail.com</span><b></marquee>
				</td>
			</tr>
			<tr>
				<td valign="top">
					<table width=190 border=1 bordercolor="1478AC" style='border-collapse:collapse;border-top:none;border-bottom:none;border-left:none' cellpadding=0 cellspacing=0>
						<tr>
							<td bgcolor="1478AC" height=35 align="middle" style='border-top:none;border-left:none;border-bottom:none'>
								<span style='font-size:15pt;color:#FFFFFF'><b>Product</b></span>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-left:none;border-top:none' height=30 valign="center">
								<p style='text-indent:5pt'><img src="Images/tamgiac.jpg">
									<span style='font-size:12pt;color:#008242'><b>Nonwoven Bag</b></span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' height=10 background="Images/line.jpg">
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center" height=30>
								<p style='text-indent:15pt'>
									<img src="Images/line.jpg">
									&nbsp;<span style='font-size:10pt'><a href="HTMLS/show.php?maloaisp=tuiquatang">Gift Bag</a></span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' height=10 background="Images/line.jpg">
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center" height=30>
								<p style='text-indent:15pt'>
									<img src="Images/line.jpg">
									&nbsp;<span style='font-size:10pt'><a href="HTMLS/show.php?maloaisp=tuihoinghi">Meetting Bag</a></span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' height=10 background="Images/line.jpg">
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center" height=30>
								<p style='text-indent:15pt'>
									<img src="Images/line.jpg">
									&nbsp;<span style='font-size:10pt'><a href="HTMLS/show.php?maloaisp=tuiquangcao">Advertising Bag</a></span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' height=10 background="Images/line.jpg">
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center" height=30>
								<p style='text-indent:15pt'>
									<img src="Images/line.jpg">
									&nbsp;<span style='font-size:10pt'><a href="HTMLS/show.php?maloaisp=tuithoitrang">Fashion Bag</a></span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' height=10 background="Images/line.jpg">
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center" height=30>
								<p style='text-indent:15pt'>
									<img src="Images/line.jpg">
									&nbsp;<span style='font-size:10pt'><a href="HTMLS/show.php?maloaisp=tuishopping">Shopping Bag</a></span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' height=10 background="Images/line.jpg">
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center" height=30>
								<p style='text-indent:15pt'>
									<img src="Images/line.jpg">
									&nbsp;<span style='font-size:10pt'><a href="HTMLS/show.php?maloaisp=tuiruou">Wine Bag</a></span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' height=10 background="Images/line.jpg">
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center" height=25>
								<p style='text-indent:5pt'>
									<img src="Images/tamgiac.jpg">
									<font style="cursor:hand;size:12pt"><a href="HTMLS/show.php?maloaisp=thiepcuoi" style="link{font-weight:bold;color:#008242;text-decoration:none;}">Wedding Card</a></font>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' height=10 background="Images/line.jpg">
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center">
								<p style='text-indent:5pt'>
									<img src="Images/tamgiac.jpg">
									<font style="cursor:hand;color:#008242;font-weight:bold;font-size:12pt" onMouseOver="doit(document.all[this.sourceIndex+1])">Orther Product</font>
									<span style="display:none;font-size:10pt" style="&amp;{head};">
										<p style='text-indent:15pt'>
											<img src="Images/line.jpg">
											&nbsp;<a href="HTMLS/show.php?maloaisp=danhthiep">Name Card</a>
										<p style='text-indent:15pt'>
											<img src="Images/line.jpg">
											&nbsp;<a href="HTMLS/show.php?maloaisp=anpham">&#7844;n ph&#7849;m v&#259;n ph&ograve;ng</a>
										</p>
										<p style='text-indent:15pt'>
											<img src="Images/line.jpg">
											&nbsp;<a href="HTMLS/show.php?maloaisp=baothu">Letter</a>
										</p>
										<p style='text-indent:15pt'>
											<img src="Images/line.jpg">
											&nbsp;<a href="HTMLS/show.php?maloaisp=tieude">Header Paper</a>
										</p>
										<p style='text-indent:15pt'>
											<img src="Images/line.jpg">
											&nbsp;<a href="HTMLS/show.php?maloaisp=photo">Photocopy, &#273;&oacute;ng s&aacute;ch</a>
										</p>
										<p style='text-indent:15pt'>
											<img src="Images/line.jpg">
											&nbsp;<a href="HTMLS/show.php?maloaisp=web">Website Design</a>
										</p>
									</span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' height=10 background="Images/line.jpg">
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' valign="center" height=25>
								<p style='text-indent:5pt'>
									<img src="Images/tamgiac.jpg">
									<font style="cursor:hand;size:12pt"><a href="HTMLS/show.php?maloaisp=khachhang" style="link{font-weight:bold;color:#008242;text-decoration:none;}">Customer</a></font>
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
									<img src="Images/tamgiac.jpg">
									&nbsp;<span style='font-size:12pt;color:#008242'><b>Time System</b></span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' align="middle"><font size=2.5 color="1478AC"><b>
								<form name=form>
									<script type="text/JavaScript" src="Java/gio.js"></script>
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
									<img src="Images/tamgiac.jpg">
									&nbsp;<span style='font-size:12pt;color:#008242'><b>H&#7895; tr&#7907; tr&#7921;c tuy&#7871;n</b></span>
								</p>
							</td>
						</tr>
						<tr>
							<td style='border-bottom:none;border-top:none;border-left:none' align="middle">
								<span style='font-size:12pt;color:#FF0000'><b>Hotline: 0903.649058</b></span>
							</td>
						</tr>
						<tr>
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
									<img src="Images/tamgiac.jpg">
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
				<td>
				<td valign="top" width=500 align="center">
					<table border=0 bordercolor="1478AC" style='border-collapse:collapse' cellpadding=0 cellspacing=0>
						<tr>
							<td height=50>
							</td>
						</tr>
						<tr>
							<td>
								<applet archive="Java/AnFade.jar" code="AnFade.class" width=397 height=243>
									<param name="credits" value="Applet by Fabio Ciucci (www.anfyteam.com)">
									<param name="res" value=1>
									<param name="image1" value="Images/h1.jpg">
									<param name="link1" value="NO">
									<param name="statusmsg1" value="">
									<param name="image2" value="Images/h2.jpg">
									<param name="link2" value="NO">
									<param name="statusmsg2" value="">
									<param name="image3" value="Images/h3.jpg">
									<param name="link3" value="NO">
									<param name="statusmsg1" value="">
									<param name="image4" value="Images/h4.jpg">
									<param name="link4" value="NO">
									<param name="statusmsg1" value="">
									<param name="image5" value="Images/h5.jpg">
									<param name="link5" value="NO">
									<param name="statusmsg1" value="">
									<param name="speed" value=8>
									<param name="pause" value=1500>
									<param name="progressivefade" value="YES">
									<param name="overimg" value="NO">
									<param name="overimgX" value=0>
									<param name="overimgY" value=0>
									<param name="regcode" value="NO">
									<param name="regnewframe" value="NO">
									<param name="regframename" value="_blank">
									<param name="memdelay" value=1000>
									<param name="priority" value=3>
									<param name="MinSYNC" value=10>
								</applet>
							</td>
						</tr>
					</table>
				</td>
				<td valign="top" width=160>
					<table border=1 bordercolor="1478AC" style='border-collapse:collapse;border-top:none;border-bottom:none;border-right:none' cellpadding=0 cellspacing=0>
						<tr>
							<td align="center" width=160 style='border-top:none;border-bottom:none;border-right:none'>
								<marquee height=745 width=100 direction="up" onmouseover="this.stop();" onmouseout="this.start();">
									<img src="Images/TuiQuaTang/QT65.jpg" width=100><br>
									<img src="Images/TuiThoiTrang/TT23.jpg" width=100><br>
									<img src="Images/TuiHoiNghi/HN32.jpg" width=100><br>
									<img src="Images/TuiQuangCao/QC03.jpg" width=100><br>
									<img src="Images/TuiThoiTrang/TT01.jpg" width=100><br>
									<img src="Images/TuiHoiNghi/HN37.jpg" width=100><br>
									<img src="Images/TuiQuaTang/QT06.jpg" width=100><br>
									<img src="Images/TuiRuou/R08.jpg" width=100><br>
									<img src="Images/TuiThoiTrang/TT02.jpg" width=100><br>
									<img src="Images/TuiHoiNghi/HN08.jpg" width=100><br>
									<img src="Images/TuiHoiNghi/HN28.jpg" width=100><br>
									<img src="Images/TuiHoiNghi/HN34.jpg" width=100>
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