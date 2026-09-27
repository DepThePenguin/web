var now=new Date()
var nam=now.getYear()
	if (nam<1000) nam+=1900
var thu=now.getDay()
var thang=now.getMonth()
var ngay=now.getDate()
var date=now.getDate()
	if (ngay<10) ngay="0"+ngay
	if (date==1 || date==21) date=date+"<sup>st</sup>"
	else if (date==2 || date==22) date=date+"<sup>nd</sup>"
	else if (date==3 || date==23) date=date+"<sup>rd</sup>"
	else date=date+"<sup>th</sup>"
var thuarray=new Array("Ch&#7911; nh&#7853;t","Th&#7913; hai","Th&#7913; ba","Th&#7913; t&#432;","Th&#7913; n&#259;m","Th&#7913; s&aacute;u","Th&#7913; b&#7843;y")
var thangarray=new Array("01","02","03","04","05","06","07","08","09","10","11","12")
var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")