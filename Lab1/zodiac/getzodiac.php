<?php
    $zodiac = array(
        "monkey",
        "rooster",
        "dog",
        "pig",
        "rat",
        "ox",
        "tiger",
        "rabbit",
        "dragon",
        "snake",
        "horse",
        "goat"
    );

    $year = $_POST ["year"];
    $remainder = $year % 12;
    $name = $zodiac[$remainder];
    $source = "images/$name.png";


?>

<form action="getzodiac.php" method="post">
    Year: <input type="text" id="year" name="year">
    <br>
    <input type="submit" value="Get Zodiac">
    <input type="reset" value="Clear">
</form>

<?php
    echo "<img src='$source' alt='$name'>";
?>


