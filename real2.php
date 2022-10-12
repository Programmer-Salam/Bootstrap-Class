<!doctype html>
<html>
<head>
<title>kilo</title>
<link rel="stylesheet" text="text/css" href="bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" text="text/css" href="bootstrap/css/font-awesome.min.css"/>
<link rel="stylesheet" text="text/css" href="bootstrap/fonts/flaticon.css"/>
<link rel="stylesheet" text="text/css" href="bootstrap/fonts/fonts2/flaticon.css"/>

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 250px;  
    background-color: #f1f1f1;
    text-decoration: none;
    border: 5px solid #555;
 
}

li a {
    display: block;
    color: #000;
    font-weight: bold;
    padding: 15px 20px;
    text-decoration: none;
}

li {
    text-align: center;
    border-bottom: 3px solid #555;
    border-bottom-color: blue;
  
}

li:last-child {
    border-bottom: none;
}



li a:hover:not(.active) {
    background-color:#ffffb3 ;
    color:blue;
    text-decoration: none;
    font-weight: bold;
      text-decoration: none;
}
li a.active {
    background-color: #ffffb3;
    color: black;
    
    text-decoration: none;
}
.dog {

    width: 230px;
    color: blue;
  
    background-color: #80ccff;
    font-weight: bold;
    
}

.fixedButton{
    position: fixed;
    bottom: 0px;
    right: 0px;
    padding: 20px;
}
.roundedFixedBtn{
    height: 60px;
    line-height: 80px;
    width: 60px;
    font-size: 2em;
    font-weight: bold;
    cursor: pointer;
    border-radius: 50%;
    background-color: #4CAF50;
    color: white;
    text-align: center;
    cursor: pointer;
}
</style>
</head>
<h3 style="text-align: center;color: blue;text-shadow: 20px 20px 20px 20px yellow;font-size: 23px;background-color: wheat;"><marquee direction="left">Welcome to this page What do you want us to offer you</marquee></h3>
<body style="background-color: darkblue;">

<a class="fixedButton" href="twitter.html">
<div class="roundedFixedBtn">
<i class="fa fa-user"></i>


</div>
</a>

<div class="preloader"></div>
<div class="container" style="margin-top: 52px;">
<div class="row">  
<div class="col-lg-12">
<p style="background-color: blue;text-align: center;font-size:30px;width: 1170px;margin-left: -15px;color: white;"><b>College Management system</b></p>
</div>

<div class="col-lg-3"  style="background-color: blue;height:650px;margin-top: -10px;" >

<ul>
  <li><a class="active" href="#home">Student</a></li>
  <li><a href="#news">Class</a></li>
  <li><a href="#contact">Section</a></li>
  <li><a href="#about">Fee Management</a></li>
  <li><a href="#about">Result Management</a></li>
  <li><a href="#contact">Attendance</a></li>
  <li><a href="#contact">Reports</a></li>
  <li><a href="#contact">Log out</a></li>
</ul>
</div>
<div class="col-lg-9" style="background-color:white;height:650px;margin-top: -10px;">

<p style="color:brown;text-align: center;font-size: 40px;font-weight: bold;">Add New Student</p>
<div class="container">
<div class="row">
<form style="width: 850px;height: 560px;border-left: 6px solid orange;border-bottom: 6px solid red;border-top: 6px solid blue;border-right: 6px solid red;margin-top: -16px;">

<p style="text-align: center;font-size: 20px"><b>Students registration form</b></p>
<input type="text" disabled="" style="height: 0px;width: 834px;position:absolute; top:86px;box-sizing: border-box;
    border: none;
    border-bottom: 2px solid brown;"/>
<p style="text-align: center;font-size: 20px;color: blue;"><b>Students details</b></p>
<div class="col-lg-4">
<label style="color: blue;">Student ID:</label><input class="dog" type="text" placeholder="Student Id"required><br /><br />
<label style="color: blue;">Gender:</label> <input type="radio" name="gender" value="male"/> Male
  <input type="radio" name="gender" value="female" > Female <br /><br />
<label style="color: blue;">Class:</label><select><option class="dpt" >Select class</option><option value="ntin">Primary</option><option value="ntin">Secondary</option><option value="ntin">Institution</option>
  </select><br /><br />
  
  <label style="color: blue;">Discipline</label><select><option class="dpt">Select discipline</option><option value="ntin">Touch your toe</option><option value="ntin">Stood down</option><option value="ntin">Go cut the bush</option>
  </select>
  
</div>
<div class="col-lg-4">
<label style="color: blue;">Student Name:</label><input class="dog" type="text" placeholder="Second Name"required><br /><br />
<label style="color: blue;">Contact No1:</label><input class="dog" type="text" placeholder="Contact no"required><br /><br />
<label style="color: blue;">Section:</label><select><option class="dpt">Select Section</option><option value="ntin">Touch your toe</option><option value="ntin">Stood down</option><option value="ntin">Go cut the bush</option>
  </select>
</div>
<div class="col-lg-4">
<label style="color: blue;">Father name:</label><input class="dog" type="text" placeholder="Third name"required><br /><br />
<label style="color: blue;">Contact No2:</label><input class="dog" type="text" placeholder="Contact no"required><br /><br />
<label style="color: blue;">Status:</label><select><option class="dpt">Select Status</option><option value="ntin">Status 1</option><option value="ntin">Status 2</option><option value="ntin">Status 3</option>
  </select>
</div>
<input type="text" disabled="" style="height: 0px;width: 834px;box-sizing: border-box;
    border: none;
    border-bottom: 2px solid brown;"/>

<div class="col-lg-4">
<label style="color: blue;">1st fee:</label><input class="dog" type="text" placeholder="1st fee"required><br /><br />
<label style="color: blue;">4rth fee:</label><input class="dog" type="text" placeholder="fourth fee"required><br /><br />
<label style="color: blue;">7th fee:</label><input class="dog" type="text" placeholder="Seventh fee"required><br /><br />
</div>
<div class="col-lg-4">
<label style="color: blue;">2nd fee:</label><input class="dog" type="text" placeholder="Second fee"required><br /><br />

<label style="color: blue;">5th fee:</label><input class="dog" type="text" placeholder="Fifth fee"required><br /><br />
<label style="color: blue;">6th fee:</label><input class="dog" type="text" placeholder="Sixth fee"required><br /><br />
</div>
<div class="col-lg-4">
<label style="color: blue;">3rd fee:</label><input class="dog" type="text" placeholder="Third fee" required><br /><br />

<label style="color: blue;">8th fee:</label><input class="dog" type="text" placeholder="eight fee"required><br /><br />
<label style="color: blue;">9th fee:</label><input class="dog" type="text" placeholder="ninth fee"required><br /><br />
</div>


<button style="text-align: center;text-decoration:none;background-color: red;font-weight: bold;font-size: 17px;position: absolute;top:560px;left: 350px;"><b><a href="colsignin.htm" style="color: white;font-weight:bold;text-decoration:none;">Add students</b></button></a>
</form>                                                                                                                                                         
<p style="background-color: blue;text-align: center;color: white;font-weight: bold;font-size: 20px;width: 851px;">&copy; COPYWRIGHT <?php echo date("Y");?>  COLLEGE MANAGEMENT  </p>

</div>
</div>
</div>
</div>
</div>
</div>


</body>                                               
</html>

<!--h3 style="text-align: center;color: blue;text-shadow: 20px 20px 20px 20px yellow;font-size: 23px;background-color: wheat;"><marquee direction="left">Welcome to this page What do you want us to offer you</marquee></h3>
<body onload="myFunction()">

<div class="preloader">

</div>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<div class="container" style="margin-top: 52px;">
<div class="row">  
<div class="col-lg-12">
<p style="background-color: blue;text-align: center;font-size:30px;width: 1170px;margin-left: -15px;color: white;"><b>College Management system</b></p>
</div>

<div class="col-lg-3"  style="background-color: blue;height:650px;margin-top: -10px;" >

<ul>
  <li><a class="active" href="#home">Student</a></li>
  <li><a href="#news">Class</a></li>
  <li><a href="#contact">Section</a></li>
  <li><a href="#about">Fee Management</a></li>
  <li><a href="#about">Result Management</a></li>
  <li><a href="#contact">Attendance</a></li>
  <li><a href="#contact">Reports</a></li>
  <li><a href="#contact">Log out</a></li>
</ul>
</div>
<div class="col-lg-9" style="background-color:white;height:650px;margin-top: -10px;">

<p style="color:brown;text-align: center;font-size: 40px;font-weight: bold;">Add New Student</p>
<div class="container">
<div class="row">
<form style="width: 850px;height: 560px;border-left: 6px solid orange;border-bottom: 6px solid red;border-top: 6px solid blue;border-right: 6px solid red;margin-top: -16px;">

<p style="text-align: center;font-size: 20px"><b>Students registration form</b></p>
<input type="text" disabled="" style="height: 0px;width: 834px;position:absolute; top:86px;box-sizing: border-box;
    border: none;
    border-bottom: 2px solid brown;"/>
<p style="text-align: center;font-size: 20px;color: blue;"><b>Students details</b></p>
<div class="col-lg-4">
<label style="color: blue;">Student ID:</label><input class="dog" type="text" placeholder="Student Id"required><br /><br />
<label style="color: blue;">Gender:</label> <input type="radio" name="gender" value="male" style="cursor: pointer;"/> Male
  <input type="radio" name="gender" value="female" style="cursor: pointer;"/> Female <br /><br />
<label style="color: blue;">Class:</label><select><option class="dpt">Select class</option><option value="ntin">Primary</option><option value="ntin">Secondary</option><option value="ntin">Institution</option>
  </select><br /><br />
  
  <label style="color: blue;">Discipline</label><select><option class="dpt">Select discipline</option><option value="ntin">Touch your toe</option><option value="ntin">Stood down</option><option value="ntin">Go cut the bush</option>
  </select>
  
</div>
<div class="col-lg-4">
<label style="color: blue;">Student Name:</label><input class="dog" type="text" placeholder="Second Name"required><br /><br />
<label style="color: blue;">Contact No1:</label><input class="dog" type="text" placeholder="Contact no"required><br /><br />
<label style="color: blue;">Section:</label><select><option class="dpt">Select Section</option><option value="ntin">Touch your toe</option><option value="ntin">Stood down</option><option value="ntin">Go cut the bush</option>
  </select>
</div>
<div class="col-lg-4">
<label style="color: blue;">Father name:</label><input class="dog" type="text" placeholder="Third name"required><br /><br />
<label style="color: blue;">Contact No2:</label><input class="dog" type="text" placeholder="Contact no"required><br /><br />
<label style="color: blue;">Status:</label><select><option class="dpt">Select Status</option><option value="ntin">Status 1</option><option value="ntin">Status 2</option><option value="ntin">Status 3</option>
  </select>
</div>
<input type="text" disabled="" style="height: 0px;width: 834px;box-sizing: border-box;
    border: none;
    border-bottom: 2px solid brown;"/>

<div class="col-lg-4">
<label style="color: blue;">1st fee:</label><input class="dog" type="text" placeholder="1st fee"required><br /><br />
<label style="color: blue;">4rth fee:</label><input class="dog" type="text" placeholder="fourth fee"required><br /><br />
<label style="color: blue;">7th fee:</label><input class="dog" type="text" placeholder="Seventh fee"required><br /><br />
</div>
<div class="col-lg-4">
<label style="color: blue;">2nd fee:</label><input class="dog" type="text" placeholder="Second fee"required><br /><br />

<label style="color: blue;">5th fee:</label><input class="dog" type="text" placeholder="Fifth fee"required><br /><br />
<label style="color: blue;">6th fee:</label><input class="dog" type="text" placeholder="Sixth fee"required><br /><br />
</div>
<div class="col-lg-4">
<label style="color: blue;">3rd fee:</label><input class="dog" type="text" placeholder="Third fee" required><br /><br />

<label style="color: blue;">8th fee:</label><input class="dog" type="text" placeholder="eight fee"required><br /><br />
<label style="color: blue;">9th fee:</label><input class="dog" type="text" placeholder="ninth fee"required><br /><br />
</div>


<button style="text-align: center;text-decoration:none;background-color: red;font-weight: bold;font-size: 17px;position: absolute;top:560px;left: 350px;"><b><a href="colsignin.htm" style="color: white;font-weight:bold;text-decoration:none;">Add students</b></button></a>
</form>                                                                                                                                                         
<p style="background-color: blue;text-align: center;color: white;font-weight: bold;font-size: 20px;width: 851px;">COPYWRIGHT @ 2022 COLLEGE MANAGEMENT</p>

</div>
</div>
</div>
</div>
</div>
<script>
function myFunction(){
    document.querySelector('.preloader').style.display = 'none'
}
</script>


</body>`                                               
</html>





































