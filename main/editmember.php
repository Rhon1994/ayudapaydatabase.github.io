<html>
<head>
<title>
Ayuda sa may kapansanan Database
</title>

<?php 
require_once('auth.php');
?>
 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
</head>
<?php
function createRandomPassword() {
	$chars = "003232303232023232023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {

		$num = rand() % 33;

		$tmp = substr($chars, $num, 1);

		$pass = $pass . $tmp;

		$i++;

	}
	return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>

<script>
function sum() {
            var txtFirstNumberValue = document.getElementById('txt1').value;
            var txtSecondNumberValue = document.getElementById('txt2').value;
            var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt3').value = result;
				
            }
			
			 var txtFirstNumberValue = document.getElementById('txt11').value;
            var result = parseInt(txtFirstNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt22').value = result;				
            }
			
			 var txtFirstNumberValue = document.getElementById('txt11').value;
            var txtSecondNumberValue = document.getElementById('txt33').value;
            var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt55').value = result;
				
            }
			
			 var txtFirstNumberValue = document.getElementById('txt4').value;
			 var result = parseInt(txtFirstNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt5').value = result;
				}
			
        }
</script>


 <script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>	

<body>
<?php include('navfixed.php');?>
<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav" style="background-color: blue;">
              <ul class="nav nav-list">
              <li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
			<li ><a href="members.php"><i class="icon-group icon-2x"></i>Manage Members</a>  </li>
			<li><a href="addmember.php"><i class="icon-user icon-2x"></i>Add Members</a>     </li>

			<br><br>	
			<li>
			 <div class="hero-unit-clock">
		
			<form name="clock">
			<font color="white">Time: <br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
			</form>
			  </div>
			</li>
				
				</ul>             
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-table"></i> Members
			</div>
			<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="active">Members</li>
			</ul>


<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="index.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
<center><?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM asmkmembers WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditmember.php" method="post" enctype="multipart/form-data">
<center><h4><i class="icon-edit icon-large"></i> Edit Member</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span>Asmk No. : </span><input type="text" style="width:265px; height:30px;"  name="asmkno" value="<?php echo $row['asmkno']; ?>" readonly Required/><br>
<span>Last Name : </span><input type="text" style="width:265px; height:30px;"  name="lastname" value="<?php echo $row['lastname']; ?>" /><br>
<span>First Name : </span><input type="text" style="width:265px; height:30px;"  name="firstname" value="<?php echo $row['firstname']; ?>" /><br>
<span>Middle Initial : </span><input type="text" style="width:265px; height:30px;"  name="middleinitial" value="<?php echo $row['middleinitial']; ?>" /><br>
<span>Suffix : </span><input type="text" style="width:265px; height:30px;"  name="suffix" value="<?php echo $row['suffix']; ?>" /><br>
<span>Address : </span><input type="text" style="width:265px; height:30px;"  name="address" value="<?php echo $row['address']; ?>" /><br>
<span>Gender: </span>
<select name="sex" style="width:265px; height:30px; margin-left:-5px;" >
	<option><?php echo $row['sex']; ?></option>
	
		<option>M</option>
		<option>F</option>
	
</select><br>
<span>D.O.B: </span><input type	="date" placeholder="mm/dd/yyyy" style="width:265px; height:30px;" name="bday" value="<?php echo $row['bday']; ?>" /><br>
<span>Contact No: </span><input type	="text" style="width:265px; height:30px;" name="contactno" value="<?php echo $row['contactno']; ?>" /><br>
<span>Id num : </span><input type="text" style="width:265px; height:30px;"  name="idnum" value="<?php echo $row['idnum']; ?>" /><br>
<span>location : </span><input type="text" style="width:265px; height:30px;"  name="location" value="<?php echo $row['location']; ?>" /><br>

<div >

<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
</div>
</div>
</form>
<?php
}
?>
</center>

<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this Member? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deletemember.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
<?php include('footer.php');?>

</html>