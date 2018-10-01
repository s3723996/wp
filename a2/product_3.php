<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="index.css">
    <script type="text/javascript" src="script.js"></script>
    <title>'N-O-O' BELT</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.php">
            <?php echo '<img src="A2media/Logo.png" id="mobile"/>';?>

            <?php echo '<img src="A2media/Logo.png" id="desktop"/>';?>

            </a>
        </div>

    </header>



    <div class="nav_bar">
        <ul id="navul">
            <li><a href="index.php">HOME</a></li>
            <li><a href="product.php">STORE</a></li>
            <li><a href="lookbook.php">SS'19</a></li>
            <li><a href="login.php">LOGIN</a></li>
        </ul>
    </div><br>

    <div>
        <a href="<?php echo 'product.php'; ?>"> &lt BACK TO STORE
        </a>
    </div>

    <div class="lookbook_image">
        <?php echo '<img src="A2media/buckle_belt.png"/>';?>
        <h2>$120.00</h2>
    </div>

    <div>
        <p>LIMITED EDITION, PIECE FROM THE SS19 ‘NOT-ONLY-ONE’ COLLECTION BUCKLE BELT. ORIGINALLY PRODUCED FOR THE MELBOURNE DESIGNERS MARKET. DETAILS: * GUN-METAL BUCKLE * PIECES by YJ ENGRAVING * ONE-OFF PIECE WORLDWIDE SHIPPING AVAILABLE. PLEASE ALLOW 3-5 WORKING DAYS FOR PROCESSING PRIOR TO SHIPMENT. FOR OUR REFUND &amp; EXCHANGE POLICY PLEASE VISIT OUR TERMS &amp; CONDITIONS PAGE</p>
    </div>

    <div id="cart">
        <!--
        <form action="product_3.php" method="post">
            <p>SIZE</p>
            <select>
            <option>S</option>
            <option>M</option>
            <option>L</option>
        </select>
            <br>
            <br>
            <label>S<input type="radio" name="size"/></label>
            <label>M<input type="radio" name="size"/></label>
            <label>L<input type="radio" name="size"/></label>


            <p>QTY</p>
            <input onclick="minus()" type="button" value="-" id="minus"/>
            <input type="text" name="qty" id="output" value="0">
            <input onclick="add()" type="button" value="+" id="add"/>
            <input type="submit" name="cart" value="ADD TO CART"/>
            <p id="total_item_price">$</p>
        </form>
-->
        <p>SIZE</p>
        <select>
            <option>S</option>
            <option>M</option>
            <option>L</option>
        </select>
        <br>
        <br>
        <label>S<input type="radio" name="size"/></label>
        <label>M<input type="radio" name="size"/></label>
        <label>L<input type="radio" name="size"/></label>

        <p>QTY</p>
        <input onclick="minus()" type="button" value="-" id="minus" />
        <input type="text" name="qty" id="output" value="0">
        <input onclick="add()" type="button" value="+" id="add" />

        <form action="cart.php" action="post">
            <input type="submit" name="cart" value="ADD TO CART"/>
            <p id="total_item_price">$</p>
        </form>

    </div>
</body>
<footer>
    &copy; Copyright 2018 PIECES by YJ, Saadiya Fourie [s3723996]
</footer>

</html>
