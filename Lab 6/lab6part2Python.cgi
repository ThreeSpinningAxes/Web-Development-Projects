#!/usr/bin/python

#importing necessary modules
import cgi, cgitb

#initialize form to cgi.FieldStorage() so I can retrieve form inputs
form = cgi.FieldStorage()

#create variables for each form input. Use upper() function when necessary

city = form.getvalue('city').upper()
state = form.getvalue('state')
country = form.getvalue('country').upper()
population = form.getvalue('population')
picture = form.getvalue('picture')

#set content type to html
print ("Content-type:text/html\n\n")

#arguments for string where I replace {index number} in string with value stored in args[index number]
args = [city, country, state, population, picture]

# triple quote for multi line string, set a = to string. Used to store html code and to later print it

a = """<html>
<head>
<style>

body
{
	background-color: black;
	margin:0px;
}

h1	
{	
	color:blue;
	font-size:80px;
	text-align:center;
	background-color:red;
	margin: 25px;
}

h3
{
	color: white;
	text-align: center;
	background-color: green;
	margin: 15px;
	

}

img {
	width:80%;
	height:auto;
	border: 50px solid yellow;
	display: block;
	margin-left: auto;
	margin-right: auto;
}

</style> """
# make another variable b for the rest of the html code. {number} is replaced with value stored
# in the variable in args[number]
b = """
<body>
<h1>
{0}
</h1>
<h1>
{1}
</h1> <hr>
<h3>
Province/State of {2}
</h3>
<h3>
Population of {3} people
</h3>
<h3>
</h3>
<img src=\"{4}
\"> 
</body>
</html>""".format(*args)

# final print statement that combines the strings of both variables
print(a + b)


