<%
<!-- storing query strings into variables-->
c = Request.QueryString("color")
text = Request.QueryString("texture")
<!-- this string determines if first visit or not-->
firstTime=""

<!--checks if dateTime cookie has been created yet-->
<!-- if not, then its first time visiting and give it appropriate msg-->

if CBool(Len(Request.Cookies("dateTime")) <= 0) then
        Response.Cookies("dateTime") = Time() & ", " & Date()
	firstTime="First time visiting at: " & Request.Cookies("dateTime")
end if

<!-- printing out the html code with concatenated variables that determine the color or-->  
<!-- texture of the webpage-->

Response.Write("<html> <head> <style> body {background-color:" & c & ";background-image: url(" & chr(34) & text & chr(34) & ");} </style> <body> <h1>")

<!-- if statement to decide whether to print string for first time visit or string for last time-->
<!-- visited-->

if Len(firstTime) <> 0 then
   Response.Write(firstTime)
else
  Response.Write("Last visit at " & Request.Cookies("dateTime"))
end if

Response.Write("</h1> </body> </html>")

<!-- reset last time visited website in this cookie-->
Response.Cookies("dateTime") = Time() & ", " & Date()

%>


