document.addEventListener("DOMContentLoaded", function() {
    function updateCartCount() {
        $.ajax({
            url: "get_cart_items.php",
            type: "GET",
            dataType: "json",
            success: function(data) {
                var itemCount = data.length;
                $("#cartCount").text(itemCount);
            },
            error: function() {
                console.error("Error: Unable to fetch cart items.");
            }
        });
    }

    updateCartCount();

    setInterval(updateCartCount, 0); 
});