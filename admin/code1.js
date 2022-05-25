
var name_out = document.getElementById('out_name');
var image_out = document.getElementById('out_image');
var two_out = document.getElementById('out_two');
var three_out = document.getElementById('out_three');
var four_out = document.getElementById('out_four');
var heavy_out = document.getElementById('out_heavy');

var outfname = document.ad1.m_name;
var outimage = document.ad1.p_image;
var outtwo = document.ad1.two_w_price;
var outthree = document.ad1.auto_w_price;
var outfour = document.ad1.car_w_price;
var outheavy = document.ad1.bus_w_price;

function tnamecheck() {
        if (outfname.value.match(/^[A-Za-z]+$/)) {
                name_out.innerHTML = "";
        } else {
                name_out.innerHTML = "Please enter valid name";
                document.ad1.m_name.focus();
        }
}

function imgcheck() {
        if (outimage.value.match(/\.(jpe?g|png|gif|bmp)$/i)) {
                image_out.innerHTML = "";
        } else {
                image_out.innerHTML = "Please Upload image";
                document.ad1.p_image.focus();
        }
}

function twocheck() {
        if (outtwo.value.match(/^(\d*([.,](?=\d{3}))?\d+)+((?!\2)[.,]\d\d)?$/)) {
                two_out.innerHTML = "";
        } else {
                two_out.innerHTML = "Please enter amount";
                document.ad1.two_w_price.focus();
        }
}

function threecheck() {
        if (outthree.value.match(/^(\d*([.,](?=\d{3}))?\d+)+((?!\2)[.,]\d\d)?$/)) {
                three_out.innerHTML = "";
        } else {
                three_out.innerHTML = "Please enter  valid amount";
                document.ad1.auto_w_price.focus();
        }
}

function fourcheck() {
        if (outfour.value.match(/^(\d*([.,](?=\d{3}))?\d+)+((?!\2)[.,]\d\d)?$/)) {
                four_out.innerHTML = "";
        } else {
                four_out.innerHTML = "Please enter valid amount";
                document.ad1.car_w_price.focus();
        }
}

function heavycheck() {
        if (outheavy.value.match(/^(\d*([.,](?=\d{3}))?\d+)+((?!\2)[.,]\d\d)?$/)) {
                heavy_out.innerHTML = "";
        } else {
                heavy_out.innerHTML = "Please select valid amount";
                document.ad1.bus_w_price.focus();
        }
}