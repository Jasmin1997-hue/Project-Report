
var name_out = document.getElementById('out_name');
var lic_out = document.getElementById('out_lic');
var ph_out = document.getElementById('out_phno');
var email_out = document.getElementById('out_email');


var outfname = document.ad3.m_name;
var outlic = document.ad3.p_image;
var outph = document.ad3.phno;
var outemail = document.ad3.email;


function namecheck() {
        if (outfname.value.match(/^[A-Za-z]+$/)) {
                name_out.innerHTML = "";
        } else {
                name_out.innerHTML = "Please enter valid name";
                document.ad3.m_name.focus();
        }
}

function licheck() {
        if (outlic.value.match(/^image\/(gif|jpe?g|png|pdf|doc|txt)$/i)) {
                lic_out.innerHTML = "";
        } else {
                lic_out.innerHTML = "Please Upload PDF file";
                document.ad3.p_image.focus();
        }
}

function phcheck() {
        if (outph.value.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/)) {
                ph_out.innerHTML = "";
        } else {
                ph_out.innerHTML = "Please enter valid Phone";
                document.ad3.phno.focus();
        }
}

function emailcheck() {
        if (outemail.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
                email_out.innerHTML = "";
        } else {
                email_out.innerHTML = "Please enter  valid email";
                document.ad3.email.focus();
        }
}

