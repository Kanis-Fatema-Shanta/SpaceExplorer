$(document).ready(function(){

$('#firstNamecheck').hide();
$('#lastNamecheck').hide();
$('#institutionCheck').hide();

$('#townCheck').hide();
$('#thanaCheck').hide();
$('#zipCheck').hide();

$('#town2Check').hide();
$('#thana2Check').hide();
$('#zip2Check').hide();

$('#mobCheck').hide();

$('#passcheck').hide();
$('#conpasscheck').hide();



var fname_err = true;
var lname_err = true;

var institution_err = true;
var twn_err = true;
var thana_err = true;
var zip_err = true;

var twn2_err = true;
var thana2_err = true;
var zip2_err = true;

var mob_err = true;

var pass_err = true;
var conpass_err = true;


//first Name
$('#fname').keyup(function(){
firstname_check();
});

function firstname_check(){

var fname_val = $('#fname').val();

if(fname_val.length == ''){
$('#firstNamecheck').show();
$('#firstNamecheck').html("**Please fill the firstname");
$('#firstNamecheck').focus();
$('#firstNamecheck').css("color","red");
fname_err = false;
return false;

}else if((fname_val.length < 3 ) || (fname_val.length > 10 ) ){
$('#firstNamecheck').show();
$('#firstNamecheck').html("**Firstname length must be between 3 and 10");
$('#firstNamecheck').focus();
$('#firstNamecheck').css("color","red");
fname_err = false;
return false;

}else{
$('#firstNamecheck').hide();
fname_err = true;
return true;
}
}

//last name

$('#lname').keyup(function(){
lastname_check();
});

function lastname_check(){

var lname_val = $('#lname').val();

if(lname_val.length == ''){
$('#lastNamecheck').show();
$('#lastNamecheck').html("**Please fill your lastname");
$('#lastNamecheck').focus();
$('#lastNamecheck').css("color","red");
lname_err = false;
return false;
}

else if((lname_val.length < 3 ) || (lname_val.length > 10 ) ){
$('#lastNamecheck').show();
$('#lastNamecheck').html("**Lastname length must be between 3 and 10");
$('#lastNamecheck').focus();
$('#lastNamecheck').css("color","red");
lname_err = false;
return false;

}else{
$('#lastNamecheck').hide();
lname_err = true;
return true;
}
}


//institution name
$('#instName').keyup(function(){
institution_check();
});

function institution_check(){

var inst_val = $('#instName').val();

if((inst_val.length == '') || (inst_val.length < 2) ){
$('#institutionCheck').show();
$('#institutionCheck').html("**Please fill your institution name");
$('#institutionCheck').focus();
$('#institutionCheck').css("color","red");
institution_err = false;
return false;

}else{
$('#institutionCheck').hide();
institution_err = true;
return true;
}
}

//town name
$('#twn').keyup(function(){
town_check();
});

function town_check(){

var twn_val = $('#twn').val();

if((twn_val.length == '') || (twn_val.length < 2)){
$('#townCheck').show();
$('#townCheck').html("**Please fill your parmanent address");
$('#townCheck').focus();
$('#townCheck').css("color","red");
twn_err = false;
return false;

}else{
$('#townCheck').hide();
twn_err = true;
return true;
}
}

//Parmanent thana/upazilla
$('#thana').keyup(function(){
thana_check();
});

function thana_check(){

var thana_val = $('#thana').val();

if((thana_val.length == '') || (thana_val.length < 2)) {
$('#thanaCheck').show();
$('#thanaCheck').html("**Please fill your parmanent thana address");
$('#thanaCheck').focus();
$('#thanaCheck').css("color","red");
thana_err = false;
return false;

}else{
$('#thanaCheck').hide();
thana_err = true;
return true;
}
}

//Parmanent zip Code
$('#zip').keyup(function(){
zip_check();
});

function zip_check(){

var zip_val = $('#zip').val();

if((zip_val.length == '') || (zip_val.length < 4)){
$('#zipCheck').show();
$('#zipCheck').html("**Please fill your parmanent address zip code.");
$('#zipCheck').focus();
$('#zipCheck').css("color","red");
zip_err = false;
return false;

}else{
$('#zipCheck').hide();
zip_err = true;
return true;
}
}


//current Address
$('#twn2').keyup(function(){
town2_check();
});

function town2_check(){

var twn2_val = $('#twn2').val();

if((twn2_val.length == '') || (twn2_val.length < 2)){
$('#town2Check').show();
$('#town2Check').html("**Please fill your Current address");
$('#town2Check').focus();
$('#town2Check').css("color","red");
twn2_err = false;
return false;

}else{
$('#town2Check').hide();
twn2_err = true;
return true;
}
}

//current thana/upazilla
$('#thana2').keyup(function(){
thana2_check();
});

function thana2_check(){

var thana2_val = $('#thana2').val();

if((thana2_val.length == '') || (thana2_val.length < 2)){
$('#thana2Check').show();
$('#thana2Check').html("**Please fill your current address thana");
$('#thana2Check').focus();
$('#thana2Check').css("color","red");
thana2_err = false;
return false;

}else{
$('#thana2Check').hide();
thana2_err = true;
return true;
}
}

//current zip Code
$('#zip2').keyup(function(){
zip2_check();
});

function zip2_check(){

var zip2_val = $('#zip2').val();

if((zip2_val.length == '') || (zip2_val.length < 4)){
$('#zip2Check').show();
$('#zip2Check').html("**Please fill your parmanent address zip code.");
$('#zip2Check').focus();
$('#zip2Check').css("color","red");
zip2_err = false;
return false;

}else{
$('#zip2Check').hide();
zip2_err = true;
return true;
}
}

//mobile number check
$('#mob').keyup(function(){
mob_check();
});

function mob_check(){

var mob_val = $('#mob').val();

if((mob_val.length == '') || (mob_val.length < 13)) {
$('#mobCheck').show();
$('#mobCheck').html("**Enter your valid phone number. Example: 8801****");
$('#mobCheck').focus();
$('#mobCheck').css("color","red");
mob_err = false;
return false;

}else{
$('#mobCheck').hide();
mob_err = true;
return true;
}
}



$('#btnSubmit').click(function(){

fname_err = true;
lname_err - true;

institution_err = true;
twn_err = true;
thana_err = true;
zip_err = true;

twn2_err = true;
thana2_err = true;
zip2_err = true;

mob_err = true;


firstname_check();
lastname_check();
institution_check();
town_check();
thana_check();
zip_check();
town2_check();
thana2_check();
zip2_check();
mob_check();



if((fname_err == false ) || (lname_err == false ) || (institution_err == false) || (twn_err == false) || (thana_err == false) || (zip_err == false) || (twn2_err == false) || (thana2_err == false) || (zip2_err == false) || (mob_err == false)) {

return false;

}

else {
  return true;
}

});

});
