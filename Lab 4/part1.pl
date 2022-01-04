#!/usr/bin/perl
use CGI':standard';
#!C:\Perl\bin\perl.exe

print "Content-type: text/html\n\n";
print "<head>
		<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
		<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
		<link href=\"https://fonts.googleapis.com/css2?family=Big+Shoulders+Text:wght@100&display=swap\" rel=\"stylesheet\">
		<link rel=\"stylesheet\" href=\"part1.css\">
	
	</head>";
				
				
$statement = "<h1>This is my first Perl program</h1>";

print $statement;