<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title></title>
</head>

<body>
    <?php include_once "./inc/header.php" ?>

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="./public/images/product-1.jpg" width="475px" height="500px" id="product-img">

                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="./public/images/product-1.jpg" width=100% class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="./public/images/product-2.jpg" width=100% class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="./public/images/product-3.jpg" width=100% class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="./public/images/product-4.jpg" width=100% class="small-img">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <p>Home / T-Shirt</p>
                <h1>Red Printd T-Shirt by HRX</h1>
                <h4>$50.00</h4>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option></option>
                </select>
                <input type="number" value="1">
                <a href="" class="btn">Add To Cart</a>
                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <hr>
                <p>Give your summer wardrobe a style upgrade with the HRX
                    Men's Active T-Shirt. Team it with a pair of shorts for
                    your morning workout or a denims for an evening out with
                    the guys.</p>
            </div>
        </div>
    </div>

    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View more</p>
        </div>
    </div>

    <div class="small-container">
        <div class="row">
            <div class="col-4">
                <img src="./public/images/product-1.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="./public/images/product-1.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="./public/images/product-1.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="./public/images/product-1.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>


        </div>
    </div>

    <?php include_once "./inc/footer.php" ?>
    <script src="./public/js/script.js"></script>
    <script>
        var product_img = document.getElementById("product-img");
        var small_img = document.getElementsByClassName("small-img");

        small_img[0].onclick = function() {
            product_img.src = small_img[0].src;
        }
        small_img[1].onclick = function() {
            product_img.src = small_img[1].src;
        }
        small_img[2].onclick = function() {
            product_img.src = small_img[2].src;
        }
        small_img[3].onclick = function() {
            product_img.src = small_img[3].src;
        }
    </script>
</body>

</html>