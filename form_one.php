<?php
$states=["Andhra Pardesh","Assam","Arunachal Pradesh","Haryana","Punjab","Uttar Pardesh","Himachal","Madhya pardesh","Gujrat"];
sort($states);
$Months=["January","February","March","April","May","June","July","August","September","October","November","December"];
$Identification_type=["Aadhar Number","Aadhar Enrollment Number","Passport","Ration Card","Bank Account","Other Govt Verifiy Id","License Number","Voter Id"];
sort($Identification_type);
$genders=["Male","Female","Other"];
?>
<html>
<head>
<style>
.button
{
	background-color: #c33a11;
    color: white;
	width=10%;}
.center
{
	text-align:center;
}
.captcha
{
background-color:lightblue; 
width:5%;
}
.p{
margin-top : 10px;}
.leftmargin{
margin-left :10px;
}
</style>
</head>
<body class="center">
<h2>My Registration Form</h2>
<form action="form_second.php" target="_blank" method="post">

State: <select  name="state">
<option value="">--Select--</option>
<?php foreach($states as $state){
echo "<option value=$state>".$state;}
?>
</option>
</select>


<br><br>Select Identification Type: <select name="sel_ide_type">
<option value="">--select--</option>
<?php foreach($Identification_type as $Identify_type){
echo "<option value=$Identify_type>".$Identify_type;
}
?>
</option>
</select><br>

<br>Enter Identification Number : <input type="text" name="Identification_number"><br>

<br>Candidate's Name : <input type="text" name="candidate_name"><br>

<br>Date of Birth :  

<select name="day">
<option value="">Day</option>
<?php for($day=1;$day<=31;$day++){
echo "<option value=$day>".$day;
}?>
</option>
</select> 

<select name="month">
<option value="">Month</option>
<?php foreach($Months as $Month){
echo "<option value=  $Month>".$Month;
}?>
</option>
</select> 

<select name="year">
<option value="">Year</option>
<?php for($i=0;$i<45;$i++){
	$year=date('Y')-63 +$i;
echo "<option value=  $year>" .$year;}
?>
</option>
</select> 

<br><br>Gender : <select name="gender">
<option value="">---Select---</option>
<?php
foreach($genders as $gender){
echo "<option value=$gender>".$gender;
}	
?>
</option>
</select><br><br>

Enter security pin (case sensitive) : <input type="text" ><br><br>

Security pin:<label type="text" value="security_pin" class="button" <div>
<?php echo str_shuffle("132ABC")?>
</div>
<br><br><input type="reset" value="Reset Data"></input>
<br><br><input type="submit" class="button"></input>
</form>
	<form action="get_formdata_ofId.php" method="post" target="_blank">
		<br><br>Id:<input type="text" name="search_by_id"></input><br><br>
		
		<input type="submit" class="button"></input><br><br>
	</form>
</body>
</html>