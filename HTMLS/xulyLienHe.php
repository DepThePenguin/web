<?php
	$ToMail="honganprint2010@gmail.com";
	$ChuDe=$_POST[txtChuDe];
	$NoiDung="H&#7885; v&agrave; t&ecirc;n: ".$_POST[txtHoTen]."<br>&#272;&#7883;a ch&#7881; li&ecirc;n h&#7879;: ".$_POST[txtDiaChi]."<br>&#272;i&#7879;n tho&#7841;i b&agrave;n: ".$_POST[txtDienThoai]."<br>Di &#273;&#7897;ng: ".$_POST[txtDiDong]."<br>Fax: ".$_POST[txtFax]."<br>Email: ".$_POST[txtMail]."<br><br>".$_POST[NoiDung];

	$header = "";
	$header.= "FROM:".$_POST[txtHoTen]."<".$_POST[txtMail].">\r\n";
	$header.= "Reply-To:".$_POST[txtMail]."\r\n";
	$header.= "MIME-Version: 1.0\r\n";
	$header.= "Content-Type: text/html; charset=utf-8\r\n";
	$header.= "X-Priority: 1\r\n";
	$header.= "Return-Path:<".$_POST[txtMail].">\n";
	$header.= "X-Mailer: PHP / ".phpversion()."\r\n";

	if(mail("$ToMail","$ChuDe","$NoiDung","$header"))
	{
		echo"Thanh cong";
	}
	else
	{
		echo"Khong thanh cong";
	}
?>