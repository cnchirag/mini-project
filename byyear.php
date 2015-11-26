<!DOCTYPE html PUBLIC>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>babyname.geu.ac.in</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
</head>
<body>
<div id="bg">
<div id="logo"><a href="#">CHIRAG NASWA</a>
    <h2><a href="#">Student | Information Technology | GEU | Dehradun </a></h2></div>
<div id="main">
<!-- header begins -->
<div id="header"> 
  
  <div id="slider-wrapper">        
                       <div id="slider" class="nivoSlider">
                  <img src="images/header.jpg" alt="" title="" />
                  <img src="images/header2.jpg" alt="" title="" />
                  <img src="images/header3.jpg" alt="" title="" />
                  <img src="images/header4.jpg" alt="" title="" />                  
                </div>        
                    </div>
                
<script type="text/javascript" src="lib/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="lib/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
  
</div>
        <div id="buttons">
    <ul>
      <li class="first"><a href="#"  title="">Home</a></li>
      <li><a href="byyear.php" title="">Name by year</a></li>
      <li><a href="byname.php" title="">Popularity</a></li>
      <li><a href="about.html" title="">About</a></li>
      <li><a href="#" title="">Contact</a></li>
    </ul></div>
<!-- header ends -->
<!-- content begins -->
<div id="content_bg">
    <div id="column_box">
      <div id="bg_left"></div>
      <div>
        <h1>Introduction to Miniproject</h1>
              
      </div>
      
<pre>
<form method="post">
Year:<select name="year" id="year" >
<option value="-1">---Select Year---</option>
<p>&nbsp;</p>
<?php

require 'config.php';
$qry="select * from year";
$res=@mysql_query($qry) or die(mysql_error());
while($row=mysql_fetch_array($res))
{
    echo "<option value=$row[0]>$row[0]</option>";
}

?>

</select><p>&nbsp;</p> Gender: <input type="radio" name="gender" value="male" required="" /> Male <input type="radio" required="" value="female" name="gender"/> Female

Top Names: <input type="radio" required="" name="topname" value="20" /> 20 <input type="radio" name="topname" value="40" />40 <input type="radio" name="topname" value="80" /> 80
<p>&nbsp;</p><input type="reset" value="Reset" />    <input type="submit" name="find" value="Find"/>

</form>
</pre>


    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
      
                          

</div>



<?php
if(isset($_POST['find']))
{
    require 'config.php';
    $year= $_POST['year'];
    $gender= $_POST['gender'];
    $topname=$_POST['topname'];
    $table= $gender.'_'.$year;
    //echo $table;
    $qry="Select * from $table limit $topname ";
    $result=@mysql_query($qry) or die(mysql_error());
    echo "<h2 style='text-align: center; color: red;'> Top $topname $gender Name of Year $year</h2>";
    echo "<table align=center><tr><td>Sr No.</td><td>&nbsp &nbsp NAME</td><td>&nbsp&nbspPopularity</td><td>&nbsp&nbspRank</td></tr>";
    for($i=0;$i<$topname;$i++)
    {
        mysql_data_seek($result,$i);
        $row=mysql_fetch_array($result);
        $srno=$i+1;
        echo "<tr><td>$srno</td><td> &nbsp&nbsp $row[0]</td><td>&nbsp &nbsp $row[1]</td><td>&nbsp &nbsp $row[2]</td></tr>";
    }
    //echo "<br />".$row[0][1]." ".$row[0][1]." ";
}

?>
<!-- content ends -->
<!-- footer begins -->
<div id="footer">
  
    <p>Copyright  2015. Designed by <a href="#" title="footer">Chirag Naswa</a>
    <p><a href="#">Mini Project</a> | <a href="#">5 Sem</a> | <a href="#" title=""><abbr title="eXtensible HyperText Markup Language">2015-2016</abbr></a>  <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets"></abbr></a></p></div>
<!-- footer ends -->
</div>
</div>
</body>
</html>
