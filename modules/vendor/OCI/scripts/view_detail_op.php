<link rel="stylesheet" href="modules/vendor/OCI/template/css/style.css">
<link rel="stylesheet" href="modules/vendor/OCI/template/font-awesome/css/font-awesome.min.css">
<link rel ="stylesheet" href="modules/vendor/OCI/template/bootstrap/bootstrap.min.css">

<style>
    .img-container {
        border: 1px solid #ddd;
        border-radius: 4px;
        width: 60%;
        margin-left: auto;
        margin-right: auto;
        padding-top: 10px;
        padding-left: 10px;
    }

    .w-40 {
        width: 40%;
    }

    .w-60 {
        width: 60%;
    }
</style>

<?php
    $productId = $_GET['productId'];
?>

<div class="img-container">
    <img id="imgId" class="w-40 mx-auto" alt="product image">
</div>

<div class="w-60 mx-auto mt-5">
    <h3 id="productName"></h3>
    <div class="d-flex justify-content-between">
        <h4 id="price"></h4>
        <h5 id="tax"></h5>
    </div>
    <p id="description"></p>
</div>

<script type="text/javascript">
    var BASIC_OPEN_CART_SERVER_API = 'http://localhost/UNA-v.13.0.0-RC2/store/index.php?';
    $.fn.getProductById = function(product_id) {
        $.ajax({
            type: 'post',
            url: BASIC_OPEN_CART_SERVER_API + 'route=api/product/getProductById&api_token=',
            data: {
                product_id: product_id
            },
            success: function(response){
                $('#imgId').attr('src', response.products.thumb);
                $('#productName').text(response.products.name);
                $('#price').text(response.products.price);
                $('#tax').text(response.products.tax);
                $('#description').text(response.products.description);
            },
            error: function(error, ajaxOptions, thrownError) {
                console.log(error.responseText);
            }
        });
    }
    $.fn.getProductById('<?= $productId ?>');
</script>