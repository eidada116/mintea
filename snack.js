
$(document).ready(function(){
    $("button").click(function(){
        var productID = $(this).closest("div").data("product-id");
        $.ajax({
            url: "get_product.php",
            type: "GET",
            data: {productID: productID},
            dataType: "json",
            success: function(data){
                alert("You ordered: " + data.name + " priced at " + data.price + " Php");
                addToCart(data.productID, data.name, data.price);
            },
            error: function(){
                alert("Error: Unable to fetch product details.");
            }
        });
    });
    function addToCart(productID, productName, productPrice) {
        $.ajax({
            url: "add_to_cart.php",
            type: "POST",
            data: {productID: productID, productName: productName, productPrice: productPrice},
            success: function(response){
                $("#cartItems").append("<tr><td>" + productName + "</td><td>" + productPrice + " Php</td></tr>");
            },
            error: function(){
                alert("Error: Unable to add item to cart.");
            }
        });
    }
});

