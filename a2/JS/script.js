var total_items = 1;

function CalculateItemsValue() {
    var total = 0;
    var errorMsg = document.getElementById("inputerror");

    for (i = 1; i <= total_items; i++) {

        itemID = document.getElementById("qnt_" + i);

        if (typeof itemID === 'undefined' || itemID === null) {
            alert("No such item - " + "qnt_" + i);
        } else if (parseInt(itemID.value) < 0) {
            //          alert("Enter at least one item to purchase");
            errorMsg.style.color = "red";
            errorMsg.style.fontfamily = "arial";
            errorMsg.innerHTML = "Enter a positive number";
            itemID.value = 0;
            total = 0;
        } else

        {
            total = total + parseInt(itemID.value) * parseInt(itemID.getAttribute("data-price"));
        }

    }
    document.getElementById("ItemsTotal").innerHTML = "$" + total;

}


function checkLogin() {
    var email = document.getElementById("CustomerEmail");
    var pwd = document.getElementById("CustomerPassword");

    var emailMsg = "Please enter E-mail";
    var pawdMsg = "Please enter Password";

    if (email.value == "") {
        email.innerHTML = emailMsg;
        return false;
    } else if (pwd.value == "") {
        pwd.innerHTML = pwdMsg;
        return false;
    } else {
        return true;
    }
}


//    var productID = document.getElementByID("count");
//    var total = 0;
//    var count = 1;
//    var countEl = document.getElementById("count");
//    function plus()
//{
//        count++;
//        countEl.value = count;
//       total = total + parseInt(countEl.value) * parseInt(count.getAttribute("data-price"));
//
//    }
//    function minus(){
//      if (count > 1) {
//        count--;
//        countEl.value = count;
//      }
//          document.getElementById("ItemsTotal").innerHTML = "$" + total;
//
//    }
