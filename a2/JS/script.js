var total_items = 1;

function CalculateItemsValue() {
    var total = 0;

    for (i = 1; i <= total_items; i++) {

        itemID = document.getElementById("qnt_" + i);

        if (typeof itemID === 'undefined' || itemID === null) {
            alert("No such item - " + "qnt_" + i);
        } else

        {
            total = total + parseInt(itemID.value) * parseInt(itemID.getAttribute("data-price"));
        }

    }
    document.getElementById("ItemsTotal").innerHTML = "$" + total;

}


var enterEmail = document.getElementById("CustomerEmail")

var errorEmail = document.getElementById("inputEmail")
//var enterPassword = document.getElementById("CustomerPassoword");

function validateForm()
{
    var emailMessage  = "Please enter Email"

    if (enterEmail === " ")
    {
        document.getElementById("inputEmail").innerHTML = emailMessage
        errorEmail.style.color ="red"
        errorEmail.style.display="block"
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
