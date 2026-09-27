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
					<span style='font-size:8pt;color:#1478AC'><a href="gioithieu.php">Ti&#7871;ng Vi&#7879;t</a> | <a href="introduce.php">Ti&#7871;ng Anh</a></span>
				</td>
				<td valign="bottom" align="center">
					<input type="button" value="Trang Ch&#7911;" style="font-size:12;cursor:hand" onMouseover="change('../Images/button-cam.gif')" onMouseout="change('../Images/button-xanh.gif')" onClick="link('../index.php')" class="button-xanh" />
					<input type="button" value="Gi&#7899;i thi&#7879;u" style="font-size:12;cursor:hand" onClick="link('gioithieu.php')" onMouseout="change('../Images/button-cam.gif')" class="button-cam" />
					<input type="button" value="&#272;&#7863;t H&agrave;ng" style="font-size:12;cursor:hand" onClick="link('dathang.php')" onMouseover="change('../Images/button-cam.gif')" onMouseout="change('../Images/button-xanh.gif')" class="button-xanh" />
					<input type="button" value="Li&ecirc;n H&#7879;" style="font-size:12;cursor:hand" onClick="link('lienhe.php')" onMouseover="change('../Images/button-cam.gif')" onMouseout="change('../Images/button-xanh.gif')" class="button-xanh" />
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
							<td bgcolor="1478AC" height=36 align="middle" style='border-bottom:none;border-top:none;border-left:none'>
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
						<tr>
							<td height=315 style='border-bottom:none;border-top:none;border-left:none'>
							</td>
						</tr>
					</table>
				</td>
				<td valign="top">
					<table border=0 width=460>
						<tr>
							<td height=10>
							</td>
						</tr>
						<tr>
							<td>
								<font face="Verdana"><p align="justify"><font style='color:#A00031'><b><i>Tr&acirc;n tr&#7885;ng k&iacute;nh ch&agrave;o Qu&iacute; kh&aacute;ch h&agrave;ng.</i></b></font></p>
								<p align="justify">Ch&uacute;ng t&ocirc;i xin b&agrave;y t&#7887; l&ograve;ng tri &acirc;n t&#7899;i Qu&iacute; kh&aacute;ch h&agrave;ng t&#7841;i Vi&#7879;t Nam c&#361;ng nh&#432; c&aacute;c n&#432;&#7899;c &#273;&atilde; c&oacute; kh&aacute;ch h&agrave;ng s&#7917; d&#7909;ng d&#7883;ch v&#7909; t&uacute;i v&#7843;i c&#7911;a <font style='color:#A00031'><b><i>CTy H&#7891;ng &Acirc;n</i></b></font>, &#273;&atilde; tin t&#432;&#7903;ng ch&uacute;ng t&ocirc;i ch&#7855;p c&aacute;nh th&ocirc;ng tin b&#7843;o v&#7879; m&ocirc;i tr&#432;&#7901;ng v&igrave; m&#7897;t th&#7871; gi&#7899;i xanh, s&#7841;ch &#273;&#7865;p.</p>
								<p align="justify">Ti&#7871;p &#273;&#7871;n, ch&uacute;ng t&ocirc;i xin c&aacute;m &#417;n Qu&iacute; kh&aacute;ch h&agrave;ng  &#273;&atilde; b&#7887; ch&uacute;t th&#7901;i gian gh&eacute; th&#259;m <font style='color:#A00031'><i>www.tuivaikhongdethongan.com</i></font> nh&#7857;m s&#7917; d&#7909;ng d&#7883;ch v&#7909; c&#7911;a ch&uacute;ng t&ocirc;i, v&agrave; xin ch&uacute;c qu&yacute; kh&aacute;ch h&agrave;ng tr&agrave;n &#273;&#7847;y h&#7841;nh ph&uacute;c, th&agrave;nh &#273;&#7841;t trong cu&#7897;c s&#7889;ng c&#361;ng nh&#432; c&ocirc;ng vi&#7879;c sau n&agrave;y.</p>
								<p align="justify">B&#7845;t k&#7923; m&#7897;t d&#7883;ch v&#7909; n&agrave;o mu&#7889;n th&agrave;nh c&ocirc;ng v&agrave; t&#7891;n t&#7841;i l&acirc;u d&agrave;i &#273;&#7873;u ph&#7843;i d&#7921;a tr&ecirc;n n&#7873;n t&#7843;ng &#273;em l&#7841;i gi&aacute; tr&#7883; cho kh&aacute;ch h&agrave;ng, v&agrave; l&agrave;m c&aacute;ch n&agrave;o &#273;&#7875; kh&aacute;ch h&agrave;ng lu&ocirc;n bi&#7871;t &#273;&#7871;n m&igrave;nh <font style='color:#A00031'><i>www.tuivaikhongdethongan.com</i></font> kh&ocirc;ng l&agrave; ngo&#7841;i l&#7879;.</p>
								<p align="justify">T&#7841;i <font style='color:#A00031'><i>www.tuivaikhongdethongan.com</i></font> qu&yacute; kh&aacute;ch h&agrave;ng s&#7869; t&igrave;m th&#7845;y nh&#7919;ng m&#7851;u t&uacute;i v&#7843;i kh&ocirc;ng d&#7879;t xinh x&#7855;n &#273;a d&#7841;ng c&oacute; th&#7875; in logo theo y&ecirc;u c&#7847;u &#273;&#7875; qu&#7843;ng b&aacute; th&#432;&#417;ng hi&#7879;u c&#7911;a m&igrave;nh, &#273;&#7863;c bi&#7879;t ph&ugrave; h&#7907;p v&#7899;i c&aacute;c nhu c&#7847;u l&agrave;m qu&agrave; t&#7863;ng khuy&#7871;n m&atilde;i, t&uacute;i qu&agrave; t&#7863;ng h&#7897;i th&#7843;o, qu&agrave; t&#7863;ng t&uacute;i shopping, t&uacute;i &#273;&#7921;ng m&#7929; ph&#7849;m, d&#7909;ng c&#7909; h&#7885;c t&#7853;p, t&uacute;i th&#7901;i trang &hellip;</p>
								<p align="justify">T&uacute;i v&#7843;i kh&ocirc;ng d&#7879;t c&ograve;n g&#7885;i l&agrave; t&uacute;i t&#7921; h&#7911;y, t&uacute;i sinh th&aacute;i, t&uacute;i b&#7843;o v&#7879; m&ocirc;i tr&#432;&#7901;ng l&agrave; lo&#7841;i v&#7843;i d&#7877; ph&acirc;n h&#7911;y, b&#7873;n, t&iacute;nh &#273;&agrave;n h&#7891;i, t&iacute;nh th&#7849;m m&#7929;, kh&#7843; n&#259;ng ch&#7889;ng th&#7845;m, ch&#7883;u nhi&#7879;t, ch&#7883;u l&#7921;c t&#7889;t, t&aacute;i s&#7917; d&#7909;ng &#273;&#432;&#7907;c nhi&#7873;u l&#7847;n &hellip;</p>
								<p align="justify">S&#7843;n ph&#7849;m <b>t&uacute;i v&#7843;i kh&ocirc;ng d&#7879;t</b> c&#7911;a <font style='color:#A00031'><b><i>CTy H&#7891;ng &Acirc;n</i></b></font> v&#7899;i ch&#7845;t l&#432;&#7907;ng cao, gi&aacute; c&#7843; c&#7841;nh tranh, cung c&#7845;p v&#7899;i s&#7889; l&#432;&#7907;ng l&#7899;n. &#272;&#7863;c bi&#7879;t <b>v&#7843;i kh&ocirc;ng d&#7879;t</b> c&oacute; nhi&#7873;u m&agrave;u &#273;&#7875; l&#7921;a ch&#7885;n v&agrave; in &#7845;n theo m&agrave;u s&#7855;c b&#7857;ng nhi&#7873;u ph&#432;&#417;ng ph&aacute;p in kh&aacute;c nhau tr&ecirc;n s&#7843;n ph&#7849;m t&ugrave;y m&#7851;u m&atilde;, h&igrave;nh &#7843;nh theo y&ecirc;u c&#7847;u c&#7911;a kh&aacute;ch h&agrave;ng.</p>
								<p align="justify">V&#7899;i ph&#432;&#417;ng ch&acirc;m &ldquo;CH&#7844;T L&#431;&#7906;NG - HI&#7878;U QU&#7842; - B&#7872;N &#272;&#7864;P - PH&#7908;C V&#7908; CHU &#272;&Aacute;O&rdquo; qu&yacute; kh&aacute;ch s&#7869; h&agrave;i l&ograve;ng khi &#273;&#7871;n v&#7899;i c&ocirc;ng ty ch&uacute;ng t&ocirc;i.&#8232;&#8232;</p>
								<p align="justify">Ch&uacute;ng t&ocirc;i r&#7845;t mong m&#7887;i nh&#7853;n &#273;&#432;&#7907;c th&#7853;t nhi&#7873;u c&aacute;c &yacute; ki&#7871;n &#273;&oacute;ng g&oacute;p &#273;&#7875; d&#7883;ch v&#7909; ng&agrave;y c&agrave;ng t&#7889;t h&#417;n.</p>
								<p align="justify">Xin ch&acirc;n th&agrave;nh c&aacute;m &#417;n Qu&iacute; kh&aacute;ch h&agrave;ng</p>
								<p align="justify"><font style='color:#A00031'><b><i>Xin vui l&ograve;ng li&ecirc;n h&#7879;: <br>Tel: 0903 649 058 &ndash; Mr. Trung<br>Email: honganprint2010@gmail.com<br>Website: wwww.tuivaikhongdethongan.com<br></i></b></font></p>
							</td>
						</tr>
					</table>
				</td>
				<td valign="top" width=160>
					<table border=1 bordercolor="1478AC" style='border-collapse:collapse;border-top:none;border-bottom:none;border-right:none' cellpadding=0 cellspacing=0>
						<tr>
							<td align="center" width=160 style='border-top:none;border-bottom:none;border-right:none'>
								<marquee height=1061 width=100 direction="up" onMouseOver="this.stop();" onMouseOut="this.start();">
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