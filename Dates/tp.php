<!DOCTYPE html>
<html>
<head>
    <title>Month display</title>
</head>
<body>
    <h3>Choose the month and year you want to research</h3>
    <form method="post" action="tp.php">
        <select name="DOBMonth">
            <option>- Month -</option>
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>
        <select name="DOBYear">
            <option>- Year -</option>
            <option value="2020">2020</option>
            <option value="2019">2019</option>
            <option value="2018">2018</option>
            <option value="2017">2017</option>
            <option value="2016">2016</option>
            <option value="2015">2015</option>
            <option value="2014">2014</option>
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
            <option value="1983">1983</option>
            <option value="1982">1982</option>
            <option value="1981">1981</option>
            <option value="1980">1980</option>
            <option value="1979">1979</option>
            <option value="1978">1978</option>
            <option value="1977">1977</option>
            <option value="1976">1976</option>
            <option value="1975">1975</option>
            <option value="1974">1974</option>
            <option value="1973">1973</option>
            <option value="1972">1972</option>
            <option value="1971">1971</option>
            <option value="1970">1970</option>
            <option value="1969">1969</option>
            <option value="1968">1968</option>
            <option value="1967">1967</option>
            <option value="1966">1966</option>
            <option value="1965">1965</option>
            <option value="1964">1964</option>
            <option value="1963">1963</option>
            <option value="1962">1962</option>
            <option value="1961">1961</option>
            <option value="1960">1960</option>
            <option value="1959">1959</option>
            <option value="1958">1958</option>
            <option value="1957">1957</option>
            <option value="1956">1956</option>
            <option value="1955">1955</option>
            <option value="1954">1954</option>
            <option value="1953">1953</option>
            <option value="1952">1952</option>
            <option value="1951">1951</option>
            <option value="1950">1950</option>
            <option value="1949">1949</option>
            <option value="1948">1948</option>
            <option value="1947">1947</option>
            <option value="1946">1946</option>
            <option value="1945">1945</option>
            <option value="1944">1944</option>
            <option value="1943">1943</option>
            <option value="1942">1942</option>
            <option value="1941">1941</option>
            <option value="1940">1940</option>
            <option value="1939">1939</option>
            <option value="1938">1938</option>
            <option value="1937">1937</option>
            <option value="1936">1936</option>
            <option value="1935">1935</option>
            <option value="1934">1934</option>
            <option value="1933">1933</option>
            <option value="1932">1932</option>
            <option value="1931">1931</option>
            <option value="1930">1930</option>
        </select>
        <input type="submit" id="submit" value="submit">
    </form>


<?php
$month = $_POST["DOBMonth"];
$values = array(1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December');
$month_name = $values[$_POST['DOBMonth']];
$year = $_POST["DOBYear"];

//WHICH DAY IS THE FINAL DAY OF THE SPECIFIC MONTH
$cont = true;
$today = 27; //The last day of the month must be >27, so start here

while (($today <= 32) && ($cont)) {
    //At 32, we have to be rolling over to the next month
    //Iterate through, incrementing $today
    //Get the date information for the (hypothetical) date $month_num/$today/$year
    $date_today = getdate(mktime(0,0,0,$month,$today,$year));
    //Once $date_today's month ($date_today["mon"]) rolls over to the next month, we've found the $lastday
    if ($date_today["mon"] != $month)
    {
        $lastday = $today - 1; //If we just rolled over to the next month, need to subtract 1 to get our $lastday
        $cont = false; //This kicks us out of the while loop
    }
    $today++;
};

//TABLE 
echo "<table cellspacing=0 cellpadding=5 frame='all' rules='all' style='border:#808080 1px solid;'>
    <caption>$month_name $year</caption>
    <tr align=left><th>Sunday</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th></tr>";

    $day = 1; //This variable will track the day of the month
    $first_day = getdate(mktime(0,0,0,$month,$day,$year));
    $first_week_day = $first_day["wday"];
    $wday = $first_week_day; //This variable will track the day of the week (0-6, with Sunday being 0)
    $firstweek = true; //Initialize $firstweek variable so we can deal with it first
    
    while ( $day <= $lastday) { //Iterate through all days of the month
        if ($firstweek) { //Special case - first week (remember we initialized $first_week_day above)
            echo "<tr align=left>";
            for ($i=1; $i<=$first_week_day; $i++) {
                echo "<td> </td>"; //Put a blank cell for each day until you hit $first_week_day
            }
            $firstweek = false; //Great, we're done with the blank cells
        } 
        if ($wday==0) //Start a new row every Sunday
        echo "<tr align=left>";
        echo "<td>$day</td>";
        if ($wday==6)
        echo "</tr>"; //If today is Saturday, close this row

        $wday++; //Increment $wday
        $wday = $wday % 7; //Make sure $wday stays between 0 and 6 (so when $wday++ == 7, this will take it back to 0)
        $day++; //Increment $day
        }
    
        while($wday <=6 ) { //Until we get through Saturday
        echo "<td> </td>"; //Output an empty cell
        $wday++;
    }

    echo "</tr></table>";

?>
    
</body>
</html>