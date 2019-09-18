
<?php
//Time zone. without timezone function, php default timezone will show.
date_default_timezone_set("Asia/Dhaka");
echo "Bangladesh time is " . date("h:i:sa"). "<br>";


/*
    d - Represents the day of the month (01 to 31)
    D-  Represents the day of the week (Sat to Fri)
    l (lowercase 'L') - Represents the day of the week (Saturday to Friday)
    m - Represents a month (01 to 12)
    M - Represents a month (Jan to Des)
    Y - Represents a year (in four digits-2019)
    y - Represents a year (in two digits-19)
*/

echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d D") . "<br>";
echo "Today is " . date("y-M-d") . "<br>";
echo "Today is " . date("l") . "<br>";








/*
    H - 24-hour format of an hour (00 to 23)
    h - 12-hour format of an hour with leading zeros (01 to 12)
    i - Minutes with leading zeros (00 to 59)
    s - Seconds with leading zeros (00 to 59)
    a - Lowercase Ante meridiem and Post meridiem (am or pm)
    A - Upercase Ante meridiem and Post meridiem (AM or PM)
*/

echo "The time is " . date("h:i:sa"). "<br>";
echo "The time is " . date("h:i:sA"). "<br>";
echo "The time is " . date("H:i:s"). "<br>";



?>