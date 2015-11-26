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
    <h2><a href="#">Student | Information Technology | GEU | Dehradun</a></h2></div>
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
      
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
      <pre>
<form method="post">
Year: <select name="year" id="year" onchange="ajax()">
<option value="-1">---Select Year---</option>
<?php

require 'config.php';
$qry="select * from year";
$res=@mysql_query($qry) or die(mysql_error());
while($row=mysql_fetch_array($res))
{
    echo "<option value=$row[0]>$row[0]</option>";
}

?>
</select>

Name: <input type="text" name="name"  list="name" placeholder="Name"/>
      <datalist id="name"> </datalist>  
Gender: <input type="radio" required="" name="gender" value="male" /> Male <input type="radio" value="female" name="gender"/> Female

<input type="reset" value="Reset" />    <input type="submit" name="find" value="Find"/>
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
    $name=$_POST['name'];
    echo "<h2 style='text-align: center; color: brown;'>Your Name : $name &nbsp &nbsp &nbsp &nbsp Gender: $gender</h2>";
    echo "<h3 style='text-align: center; color: brown;'>Popularity of your name given by no of births </h3>";
    echo "<hr color=red />";
    $yeararr=array();
    $popularity=array();
    echo "<h3 >Year &nbsp No. Of Birth &nbsp Rank</h3>";
    for($year;$year<=2013;$year++)
    {
    $table= $gender.'_'.$year;
    //echo $table;
    
    $qry="Select * from $table where Name='$name' ";
    $result=@mysql_query($qry) or die(mysql_error());
    //echo "<h2 style='text-align: center; color: red;'> Top $topname $gender Name of Year $year</h2>";
    //echo "<br />"."Sr No."."&nbsp"."Name"."   "."Popularity"."   "."Rank";
    if(mysql_num_rows($result)>0)
    {
        $row=mysql_fetch_array($result);
        echo "<br />".$year."&nbsp &nbsp &nbsp &nbsp".$row[1]."&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp".$row[2];
    }
    else
    {
        echo "<br />".$year."&nbsp &nbsp &nbsp &nbsp".'0'."&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp".'0';
    }
    }
    
    //echo "<br />".$row[0][1]." ".$row[0][1]." ";
}

?>





            
<!-- content ends -->
<!-- footer begins -->
<div id="footer">
  p>Copyright  2015. Designed by <a href="#" title="Free Web Templates">Chirag Naswa</a>
    <p><a href="#">Mini Project</a> | <a href="#">5 Sem</a> | <a href="#" title=""><abbr title="eXtensible HyperText Markup Language">2015-2016</abbr></a>  <a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS"><abbr title="Cascading Style Sheets"></abbr></a></p></div>
<!-- footer ends -->
</div>
</div>
</body>
</html>
