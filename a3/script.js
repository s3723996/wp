
function add() {
    document.getElementById("output").value = parseInt(document.getElementById("output").value) + 1;
    totalItemPrice()
}

function minus() {

    document.getElementById("output").value = parseInt(document.getElementById("output").value) - 1;
    totalItemPrice()
}


function totalItemPrice() {

    sum = "$" + parseInt(document.getElementById("output").value) * 120;
    document.getElementById("total_item_price").innerHTML = sum;
}


//let item1 = {name: "Buckle Belt", price: 120};




//ncaught ReferenceError: docment is not defined
//    at add (script.js:17)
//    at HTMLInputElement.onclick (product_3.php:40)
//add @ script.js:17
//onclick @ product_3.php:40
//function minus() {
//    if (docment.getElementById("output").value > -1) {
//        document.getElementById("output").value = parseInt(document.getElementById("output").value) - 1
//    }
//    else
//        {
//             document.getElementById("output").value == 0;
//        }
//}
//
//function add() {
//    if (docment.getElementById("output").value > -1) {
//        document.getElementById("output").value = parseInt(document.getElementById("output").value) + 1
//    }
//    else
//        {
//             document.getElementById("output").value == 0;
//        }
//}






//let form = document.forms.calculator;
//
//form.money.oninput = calculate;
//form.months.onchange = calculate;
//form.interest.oninput = calculate;
//
//function calculate() {
//    let initial = +form.money.value;
//    if (!initial) return;
//
//    let interest = form.interest.value * 0.01;
//
//    if (!interest) return;
//
//    let years = form.months.value / 12;
//    if (!years) return;
//
//    let result = Math.round(initial * (1 + interest * years));
//
//    let height = result / form.money.value * 100 + 'px';
//    document.getElementById('height-after').style.height = height;
//    document.getElementById('money-before').innerHTML = form.money.value;
//    document.getElementById('money-after').innerHTML = result;
//}
//
//calculate();
