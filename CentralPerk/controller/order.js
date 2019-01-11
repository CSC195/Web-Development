$(document).ready(function() {
    var total = 0.0;

    $("#menu dt").each(function() {
        
        $(this).click(function() {
            if($(this).attr("id") == "blonde"){
                $("#order").append('<option value="menuOption">$2.11 - Blonde Coffee</option>');
                total += 2.11;
            }
            if($(this).attr("id") == "med"){
                $("#order").append('<option value="menuOption">$2.11 - Medium Coffee</option>');
                total += 2.11;
            }
            if($(this).attr("id") == "dark"){
                $("#order").append('<option value="menuOption">$2.11 - Dark Coffee</option>');
                total += 2.11;
            }
            if($(this).attr("id") == "decaf"){
                $("#order").append('<option value="menuOption">$2.11 - Decaf Coffee</option>');
                total += 2.11;
            }
            if($(this).attr("id") == "misto"){
                $("#order").append('<option value="menuOption">$2.20 - Cafe Misto</option>');
                total += 2.20;
            }
            if($(this).attr("id") == "icedcoffee"){
                $("#order").append('<option value="menuOption">$2.20 - Iced Coffee</option>');
                total += 2.20;
            }
            if($(this).attr("id") == "icedmilk"){
                $("#order").append('<option value="menuOption">$2.20 - Iced Coffee with Milk</option>');
                total += 2.20;
            }
            if($(this).attr("id") == "americano"){
                $("#order").append('<option value="menuOption">$3.20 - Americano </option>');
                total += 3.20;
            }
            if($(this).attr("id") == "latte"){
                $("#order").append('<option value="menuOption">$3.45 - Latte </option>');
                total += 3.45;
            }
            if($(this).attr("id") == "cappuccino"){
                $("#order").append('<option value="menuOption">$3.45 - Cappuccino </option>');
                total += 3.45;
            }
            if($(this).attr("id") == "mocha"){
                $("#order").append('<option value="menuOption">$3.40 - Mocha </option>');
                total += 3.40;
            }
            if($(this).attr("id") == "espresso"){
                $("#order").append('<option value="menuOption">$2.11 - Espresso </option>');
                total += 2.11;
            }
            if($(this).attr("id") == "flatwhite"){
                $("#order").append('<option value="menuOption">$3.45 - Flat White </option>');
                total += 3.45;
            }
            if($(this).attr("id") == "htcocoa"){
                $("#order").append('<option value="menuOption">$2.95 - Hot Chocolate </option>');
                total += 2.95;
            }
            if($(this).attr("id") == "sltcocoa"){
                $("#order").append('<option value="menuOption">$3.40 - Salted Caramel Hot Chocolate </option>');
                total += 3.40;
            }
            if($(this).attr("id") == "chai"){
                $("#order").append('<option value="menuOption">$3.11 - Chai Tea </option>');
                total += 3.11;
            }

            $("#total").text("Total: $" + total.toFixed(2));
        });
    });

    //go to checkout.html when the button with the place_order id is clicked
    $("#place_order").click(function() {
        $("#order_form").submit(); 
    });

    //clear the order box
    $("#clear_order").click(function() {
        total = 0.0;
        $("#order").text("");
        $("#total").html("&nbsp;");
    });
});