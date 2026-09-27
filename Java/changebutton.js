if (document.images)
{
	after=new Image()
	after.src="../Images/button-cam.gif"
}
function change(image)
{
	var el=event.srcElement
	if (el.tagName=="INPUT"&&el.type=="button")
		event.srcElement.style.backgroundImage="url"+"('"+image+"')"
}
function link(url)
{
	window.location=url
}