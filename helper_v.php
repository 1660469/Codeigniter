<?php
$user= array("name"=> "username",
"size"=>25,);
$pass= array("name"=> "pass",
"size"=>25,);
$gender1 = array("name"=>"gender1",
"value"=>"male", "checked" =>TRUE,);
$gender2 = array("name"=>"gender2",
"value"=>"female",);
$quocgia=array(
    "1" => "Viet Nam",
    "2" => "Cambodia",
    "3" => "Malaysia",
    "4" => "USA",
    "5" => "Australia",
    "6" => "New zealand",
);
echo validation_errors();
echo form_open(base_url()."helper");
echo form_fieldset("Form Register");
echo form_label("Dien ho ten:").form_input($user)."<br/>";
echo form_label("Dien password:").form_input($pass)."<br/>";
echo form_label("Gender: ").form_radio($gender1)."Male".form_radio($gender2)."Female"."<br/>";
echo form_label("Nation is:").form_dropdown("Nation:",$quocgia);
echo form_label(" ").form_submit("ok",  "Register");
echo form_fieldset_close();
echo form_close();
?>