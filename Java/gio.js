function showMilitaryTime()
	{
		if (document.form.showMilitary[0].checked)
			{
				return true;
			}
		return false;
	}
function showTheHours(theHour)
	{
		if (showMilitaryTime() || (theHour > 0 && theHour < 13))
			{
				return (theHour);
			}
		if (theHour == 0)
			{
				return (12);
			}
		return (theHour-12);
	}
function showZeroFilled(inValue)
	{
		if (inValue > 9)
			{
				return "" + inValue;
			}
		return "0" + inValue;
	}
function showAmPm()
	{
		if (showMilitaryTime())
			{
				return ("");
			}
		if (now.getHours() < 12)
			{
				return (" AM");
			}
		return (" PM");
	}
function showTheTime()
	{
		now = new Date
		document.form.showTime.value = showTheHours(now.getHours()) + ":" + showZeroFilled(now.getMinutes()) + ":" + showZeroFilled(now.getSeconds()) + showAmPm()
		setTimeout("showTheTime()",1000)
	}