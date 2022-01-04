#!/usr/bin/ruby
puts "Content-type: text/html\n\n"

#storing all values from html form into appropriate variables
#using capitalize function on strings that need to be capitalized
require 'cgi'
cgi = CGI.new
city = cgi['city'].capitalize
state = cgi['state'].capitalize
country = cgi['country'].capitalize
population = cgi['population']
picture = cgi['picture']


#using here documents to print out html code. When I need to print a variable name
#I end the here document section and run puts (variable name)
print <<HERE1
<html>
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
        width:100%;
        height:auto;
}

</style>

<body>
<h1>
HERE1

puts city

puts <<HERE2
</h1>
<h1>
HERE2

puts country

print <<HERE3
</h1> <hr>
<h3>
HERE3
#when using string concatenation, I convert the variable to string with .to_s method
puts "Province/State of " + state.to_s

print <<HERE4
</h3>
<h3>
HERE4

puts "Population of " + population.to_s + " people"

print <<HERE5
</h3>
<h3>
HERE5

print <<HERE6
</h3>
<img src="
HERE6

puts picture

print <<HERE7
">
</body>
</html>
HERE7
