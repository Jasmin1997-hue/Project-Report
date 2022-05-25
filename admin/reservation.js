
var name_out = document.getElementById('out_fname');
var lname_out = document.getElementById('out_lname');
var amt_out = document.getElementById('out_amt');
var number_out = document.getElementById('out_number');
var lic_out = document.getElementById('out_licnumber');
var slot_out = document.getElementById('out_slot');

var outfname = document.login.theatre;
var outlname = document.login.troom;
var outamt = document.login.Amount;
var outnumber = document.login.rno;
var outlic = document.login.licence_no;
var outslot = document.login.slot;

function fnamecheck() {
        if (outfname.value.match(/^[A-Za-z]+$/)) {
                name_out.innerHTML = "";
        } else {
                name_out.innerHTML = "Please enter name";
                document.login.theatre.focus();
        }
}

function lnamecheck() {
        if (outlname.value.match(/^[A-Za-z]+$/)) {
                lname_out.innerHTML = "";
        } else {
                lname_out.innerHTML = "Please enter type";
                document.login.troom.focus();
        }
}

function amtcheck() {
        if (outamt.value.match(/^\d{0,4}(\.\d{0,2})?$/)) {
                amt_out.innerHTML = "";
        } else {
                amt_out.innerHTML = "Please enter amount";
                document.login.Amount.focus();
        }
}

function numcheck() {
        if (outnumber.value.match(/^[A-Z]{2} [0-9]{2} [A-Z]{2} [0-9]{4}$/)) {
                number_out.innerHTML = "";
        } else {
                number_out.innerHTML = "Please enter  valid register number";
                document.login.rno.focus();
        }
}

function licheck() {
        if (outlic.value.match(/^([A-Z]{2})(\d{2}|\d{3})[a-zA-Z]{0,1}(\d{4})(\d{7})$/)) {
                lic_out.innerHTML = "";
        } else {
                lic_out.innerHTML = "Please enter valid licence number";
                document.login.licence_no.focus();
        }
}

function slotcheck() {
        if (outslot.value != null) {
                slot_out.innerHTML = "";
        } else {
                slot_out.innerHTML = "Please select valid slot";
                document.login.slot.focus();
        }
}