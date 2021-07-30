console.log('connect');


// console.log('harga1 = ', $('.hargaclass1').html())

var harga1 = $('#harga1').html();
var harga2 = $('#harga2').html();
var harga3 = $('#harga3').html();

var jumlah1 = $('#jumlah1').html();
var jumlah2 = $('#jumlah2').html();
var jumlah3 = $('#jumlah3').html();

var hutang1 = $('#hutang1').html();
var hutang2 = $('#hutang2').html();
var hutang3 = $('#hutang3').html();

// var titiljimlih = $('#titiljimlih').html();

// let string = "1";
// let num = parseInt(string);

// var kopi = parseInt(totalharga) * parseInt(totaljumlah)
// console.log('kopi :>> ', kopi);


// var kopi = parseInt("total") * parseInt("tutul")
// console.log('kopi :>> ', kopi);

// var kopi = 170000 * 3
// console.log('kopi :>> ', kopi);





var total = parseInt(harga1) + parseInt(harga2) + parseInt(harga3)
console.log('total :>> ', total);

var tutul = parseInt(jumlah1) + parseInt(jumlah2) + parseInt(jumlah3)
console.log('tutul :>> ', tutul);

var anjing;


if (hutang1=='Lunas'&&hutang2=='Lunas'&&hutang3=='Lunas') {
    anjing='Lunas'
} else {
    anjing='Belum Lunas'
}

$('#totalharga').html(total);
$('#totaljumlah').html(tutul);
$('#hutang').html(anjing);
var titiljimlih = total * tutul;
$('#titiljimlih').html(titiljimlih);

