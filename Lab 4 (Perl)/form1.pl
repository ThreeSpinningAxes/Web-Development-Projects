#!/usr/bin/perl
use CGI':standard';
#!C:\Perl\bin\perl.exe
print "Content-type: text/html\n\n";

$fn = param('firstname');
$ln = param('lastname');
$Gender = param('G');

$st = param('street');
$city = param('city');
$postal = param('postalcode');

$province = param('province');

$email = param('email');
$pass = param('password');

$phone = param('phonenumber');

print "<head>
                <style>
                body{
                        font-family: Arial;
                        color: gray;
                        margin-left: 600px;
                        margin-right: 600px;
                }

                h1{margin-bottom: 50px; color: black;}
                hr{margin-bottom: 30px}


                h3, p {color:black;}
                h3 {font-size:1.3em}

                input {margin-right: 50px;
                                margin-bottom: 20px;}
                .buttonM {margin-right: 20px;}

                div{margin-bottom: 75px;}

                .error{
                        color:red;
                }
                </style>
        </head>";


print "<body>
<h1> Customer Details </h1>
<hr style=\"height:2px;border-width:0;color:gray;background-color:gray;margin-bottom: 80px;\"> </hr>
<p style=\"font-size: 12px;margin-bottom: 55px;text-align:right;\">All red highlighted information represents incorrect input/format in form.</p>
        <div>

 <h3>Personal Information </h3>
        <hr>
        <p style=\"color:gray;\">First Name: <p";

                if ($fn eq "")
                {
                        $fn = "NULL";
                        print " class = \"error\"";
                }
                print "

                >$fn</p></p>
        <br>";

        print "<p style=\"color:gray;\">Last Name: <p";
                if ($ln eq "")
                {
                        $ln = "NULL";
                        print " class = \"error\"";
                }
                print "

                                >$ln</p></p>
        <br>";

                print "<p style=\"color:gray;\">Gender: <p";
                if ($Gender eq "")
                {
                        $Gender = "NULL";
                        print " class = \"error\"";
                }
                                print "
                                >$Gender</p></p>
</div>";

print " <div>

        <h3>Address</h3>
        <hr>";


       print "<p style=\"color:gray;\">Street Name:  <p";
           if ($st eq "")
                {
                        $st = "NULL";
                        print " class = \"error\"";
                }
                print ">$st</p></p>
        <br>";

       print "<p style=\"color:gray;\">City: <p";
           if ($city eq "")
                {
                        $city = "NULL";
                        print " class = \"error\"";
                }
                print ">$city</p></p>
        <br>";
        print "<p style=\"color:gray;\">Postal Code: <p";

unless (length $postal == 6)
{
        print " class = \"error\"";
}
if ($postal eq "")
{
                $postal = "NULL";
}

print ">$postal</p></p>
        <br>
        <p style=\"color:gray;\">Province: <p>$province</p></p>


        </div>";

print "</div>


        <div>

        <h3>Account Information</h3>

        <hr>
        <p style=\"color:gray;\">E-Mail: <p";

unless ($email =~ /^[a-z0-9.]+\@[a-z0-9.-]+$/)
{
        print " class = \"error\"";
}
if ($email eq "")
{
                $email = "NULL";
}

print "> $email</p></p>";

print "<br>
        <p style=\"color:gray;\">Password: <p>HIDDEN</p></p>
        <br>

        <p style=\"color:gray;\">Phone Number: <p";

unless (($phone =~ /^\d*$/) & length $phone == 10)
{
        print " class = \"error\"";
}
if ($phone eq "")
{
                $phone = "NULL";
}
print "> $phone </p></p>";

print " </div>
</body>


</html> ";
