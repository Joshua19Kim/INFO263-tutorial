<!DOCTYPE html>
<html lang="en">
    <body>
        <h2>HTML Form Validation</h2>

        <form action="validation.php" method="get">
            <label for="input-dob">Date Of Birth:</label>
            <input id="input-dob" type="date" name="dob" value="">
            <br />
            <label for="input-favorite-color">Favourite colour:</label>
            <input id="input-favorite-color" type="text" name="favouritecolour" value="">
            <br /><br />
            <input type="submit" value="Submit">
        </form>

        <p>Enter your date of birth and favourite colour.</p>

        <!-- EXERCISE 3a. -->
        <?php if(isset($_GET["dob"])): ?>
            <!-- Check the date of birth input -->
            <?php if ($_GET["dob"] == ""): ?>
                <p>Please input a date</p>
            <?php elseif ($_GET["dob"] > date("Y-m-d")): ?>
                <p>The entered input is after today.</p>
            <?php else: ?>
                <p>Unix timestamp: <?php echo strtotime($_GET["dob"]); ?></p>
            <?php endif; ?>
        <?php endif; ?>


        <!-- EXERCISE 3b. and 3c. -->
        <?php $favourite_colours = array("blue", "red", "yellow", "orange", "black"); ?>
        <?php if (isset($_GET["favouritecolour"])): ?>
            <!-- Check the color input -->
            <?php if($_GET["favouritecolour"] == ""): ?>
                <p>Please enter colour.</p>
            <?php elseif (in_array(strtolower($_GET["favouritecolour"]), $favourite_colours)): ?>
                <p><?php echo htmlspecialchars($_GET["favouritecolour"]); ?> is one of the favorite colours.</p>
            <?php else: ?>
                <p><?php echo htmlspecialchars($_GET["favouritecolour"]); ?> is not a favorite colour.</p>
            <?php endif; ?>
        <?php endif; ?>

    </body>
</html>