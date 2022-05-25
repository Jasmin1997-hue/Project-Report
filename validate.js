var username = document.getElementById('username');
var email = document.getElementById('email');
var phone = document.getElementById('phone');
var country = document.getElementById('country');
var u_password = document.getElementById('u_password');

var outuser = document.Registration.username;
var outmail = document.Registration.email;
var outphone = document.Registration.phone;
var outcountry = document.Registration.country;
var outpass = document.Registration.u_password;
//var outpass2=document.user_form.password1;
//username validation
function usercheck() {
  if (outuser.value.length >= 3) {
    out_user.innerHTML = "";
  } else {
    out_user.innerHTML = "Please enter a valid username";
    document.Registration.username.focus();
    return false;
  }
}
//email validation
function mailcheck() {
  if (outmail.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
    out_email.innerHTML = "";
  } else {
    out_email.innerHTML = "Please enter Valid email";
    document.Registration.email.focus();
    return false;
  }
}
//phone number validation
function mobilecheck() {
  if (outphone.value.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/)) {
    out_phone.innerHTML = "";
  } else {
    out_phone.innerHTML = "Please enter Valid Mobile no:";
    document.Registration.phonenumber.focus();
  }
}
function countrycheck() {
  if (outcountry.value.length >= 3) {
    out_country.innerHTML = "";
  } else {
    out_country.innerHTML = "Please enter a valid country";
    document.Registration.country.focus();
    return false;
  }
}
function passcheck() {
  if (outpass.value.match(/^[A-Za-z]\w{7,14}$/)) {
    out_password.innerHTML = "";
  } else {
    out_password.innerHTML = "6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter";
    document.Registration.u_password.focus();
  }
}