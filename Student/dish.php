<?php

    define("TITLE", "Menu Item | Franklin's Fine Dining");

    include('includes/header.php');

    function strip_bad_chars($input) {

        $output = preg_replace( "/[^a-zA-Z0-9_-]/", "",$input);
        return $output;
    }

    if(isset($_GET['item'])) {

        $menuItem = strip_bad_chars( $_GET['item'] );

        $dish = $menuItem[$menuItem];
    }


    function suggestedTip($price, $tip){

        $totalTip = $price * $tip;
        echo money_format('%2n', $totalTip);
    }
?>


    <hr>

    <div id="dish">

        <h1> <?php echo $dish[title]; ?> <span class="price"><sup>$</sup> <?php echo $dish[price]?> </span> </h1>
        <p> <?php echo $dish[blurb]?> </p>

        <br>

        <p><strong>Suggest beverage: <?php echo $dish[drink] ?> </strong></p>
        <p><em>Sugggested Tip : <sup>$</sup><?php suggestedTip($dish[price], 0.20); ?> </em></p>

    </div>

    <hr>

<a href="menu.php" class="button previous">&laquo; Back to Menu</a>

<?php include ('includes/footer.php')?>
