<!DOCTYPE html>
<html>
<head>
<title>Table with Database</title>
<style>
table, th, td {
	border:1px solid black;
}
</style>
</head>
<body>
<form action="get_formdata_ofId.php" method="post" target="_top">
		<br><br><b>Id or Name or Identity Number :</b><input type="text" name="search_by_id"></input><br><br>
		<input type="submit" class="button"></input><br><br>
	</form>
<table style="width:100%">
	<tr>
		<th>Id Number</th>
		<th>Candidate Name</th>
		<th>Pin Code</th>
		<th>Email Id</th>
		<th>Status of q Exam</th>
		<th>Apply Post</th>
		<th>First pref</th>
		<th>Question Paper Medium</th>
		<th>Password</th>
	</tr>
<?php
include 'form_connection.php';
$sql_join_query=mysqli_query($conn, "SELECT cp.id_number,cp.candidate_name,ma.pin_code,cd.email_id,pd.statusof_q_exm,pd.apply_post,cc.first_pref,l.q_paper_medium,pg.pass_word
FROM ((((((candidate_prsonal_info AS cp
	  INNER JOIN mailing_address AS ma ON cp.candidate_name=ma.candidate_name)
     INNER JOIN contact_details AS cd ON ma.candidate_name=cd.candidate_name)
    INNER JOIN personal_details AS pd ON cd.candidate_name=pd.candidate_name)
   INNER JOIN center_choice AS cc ON cc.id_number=cp.id_number)
  INNER JOIN language AS l ON l.candidate_name=pd.candidate_name)
 INNER JOIN password_gen AS pg ON pg.id_number=cp.id_number)");
 
 if($sql_join_query->num_rows>0){
	 while($row=$sql_join_query->fetch_assoc()){
		 ?>
		 
	<tr>
		 <td><?php echo $row["id_number"]; ?></td>
		 <td><?php echo $row["candidate_name"]; ?></td>
		 <td><?php echo $row["pin_code"]; ?></td>
		 <td><?php echo $row["email_id"]; ?></td>
		 <td><?php echo $row["statusof_q_exm"]; ?></td>
		 <td><?php echo $row["apply_post"]; ?></td>
		 <td><?php echo $row["first_pref"]; ?></td>
		 <td><?php echo $row["q_paper_medium"]; ?></td>
		 <td><?php echo $row["pass_word"]; ?></td>
	 </tr>
	<?php	 
	 }
	 echo "</table>";
	 }
	 else{
		 echo"0 result";
	 }
	 $conn->close();
	?>
</table>
</body>
</html>