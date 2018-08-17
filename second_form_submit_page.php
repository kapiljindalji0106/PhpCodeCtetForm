<?php
include 'form_connection.php';

$sql_query="INSERT INTO candidate_prsonal_info(id_number,candidate_name,gender,father_name,mother_name,state,id_type,diff_abled)
VALUES('".$_POST["identity_number"]."','".$_POST["name_candidate"]."','".$_POST["gender"]."','".$_POST["father_name"]."','".$_POST["mother_name"]."','".$_POST["state_data"]."','".$_POST["identity_type"]."','".$_POST["person_disability"]."')";
$sql_query_center_choice="INSERT INTO center_choice(id_number,first_pref,sec_pref,third_pref)
VALUES('".$_POST["identity_number"]."','".$_POST["first_choice_exm_center"]."','".$_POST["second_choice_exm_center"]."','".$_POST["third_choice_exm_center"]."')"; 
$sql_query_details="INSERT INTO personal_details(candidate_name,category,statusof_q_exm,emp_status,apply_post,appear_in_ctet)
VALUES('".$_POST["name_candidate"]."','".$_POST["category"]."','".$_POST["qualifying_exam_status"]."','".$_POST["Employment_status"]."','".$_POST["apply_for"]."','".$_POST["appeared_in_exam"]."')";
$sql_query_contact_details="INSERT INTO contact_details(candidate_name,email_id,mobile_no,std_code_tel_no)
VALUES('".$_POST["name_candidate"]."','".$_POST["email"]."','".$_POST["mobile_number"]."','".$_POST["telephone_number"]."')";
$sql_query_lang_choice="INSERT INTO language(candidate_name,language1,language2,q_paper_medium)
VALUES('".$_POST["name_candidate"]."','".$_POST["lang1"]."','".$_POST["lang2"]."','".$_POST["lang_med_choice"]."')";
$sql_query_password="INSERT INTO password_gen(id_number,pass_word,security_question,security_answer)
VALUES('".$_POST["identity_number"]."','".$_POST["password"]."','".$_POST["security_que"]."','".$_POST["security_ans"]."')";
$sql_query_mailing_add="INSERT INTO mailing_address(candidate_name,address,locality_mohalla,city_town,district,pin_code,state)
VALUES('".$_POST["name_candidate"]."','".$_POST["mail_address"]."','".$_POST["locality"]."','".$_POST["city"]."','".$_POST["district"]."','".$_POST["pin_code"]."','".$_POST["mailing_state"]."')";
if ($conn->query($sql_query) === TRUE) {
    echo "Data submitted successfully";
} else {
    echo "<br>Error creating table candidate particular: " . $conn->error;}

	if ($conn->query($sql_query_details) === TRUE){
		echo "candidate Details submitted successfully";
} else {
    echo "<br>Error creating table details: " . $conn->error;}
	if ($conn->query($sql_query_center_choice) === TRUE){
		echo "center choices submitted successfully";
} else {
    echo "<br>Error creating table center choice: " . $conn->error;}
	if ($conn->query($sql_query_contact_details) === TRUE){
		echo "Contact Details submitted successfully";
} else {
    echo "<br>Error creating table contact details: " . $conn->error;}
	if ($conn->query($sql_query_lang_choice) === TRUE){
		echo "Language choice submitted successfully";
} else {
    echo "<br>Error creating table Language choice: " . $conn->error;}
	if ($conn->query($sql_query_password) === TRUE){
		echo "Password submitted successfully";
} else {
    echo "<br>Error creating table Password: " . $conn->error;}
	if ($conn->query($sql_query_mailing_add) === TRUE){
		echo "Mailing address submitted successfully";
} else {
    echo "<br>Error creating table Mailing address: " . $conn->error;}
$conn->close();
?>