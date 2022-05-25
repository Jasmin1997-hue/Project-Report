
var name_out = document.getElementById('out_name');
var image_out = document.getElementById('out_image');
var two_out = document.getElementById('out_two');
var three_out = document.getElementById('out_three');


var outfname = document.ad2.m_name;
var outimage = document.ad2.p_image;
var outtwo = document.ad2.phno;
var outthree = document.ad2.email;



function tnamecheck() {
        if (outfname.value.match(/^[A-Za-z]+$/)) {
                name_out.innerHTML = "";
        } else {
                name_out.innerHTML = "Please enter valid name";
                document.ad2.m_name.focus();
        }
}

function imgcheck() {
        if (outimage.value.match(/^image\/(gif|jpe?g|png|pdf|doc|txt)$/i)) {
                image_out.innerHTML = "";
        } else {
                image_out.innerHTML = "Please Upload image";
                document.ad2.p_image.focus();
        }
}

function twocheck() {
        if (outtwo.value.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/)) {
                two_out.innerHTML = "";
        } else {

                two_out.innerHTML = "Please enter amount";
                document.ad2.phno.focus();
        }
}

function threecheck() {
        if (outthree.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
                three_out.innerHTML = "";
        } else {
                three_out.innerHTML = "Please enter  valid amount";
                document.ad2.email.focus();
        }
}

