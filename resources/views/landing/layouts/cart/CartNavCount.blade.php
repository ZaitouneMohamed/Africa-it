<a class="mini-cart-shop-link"><i class="fas fa-shopping-bag"></i>
    <span class="total-item-round" id="CartCount"></span></a>

<script>
    function CartCount() {
        $.ajax({
            type: 'GET',
            url: "getCartCount",
            success: function(response) {
                document.getElementById('CartCount').innerHTML = response.count
            },
            error: function() {
                console.log('An error occurred .');
            }
        })
    }
    setInterval(() => {
        CartCount();
    }, 100);
</script>
