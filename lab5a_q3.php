<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculate Rectangle Area</title>
</head>
<body>
    <?php
        // Function to calculate the area of a rectangle
        function calculateArea($width, $length) {
            return $width * $length;
        }

        // Example values for width and length
        $width = 4;
        $length = 2;

        // Calculate the area
        $area = calculateArea($width, $length);
    ?>

    <p>
        <?php
            echo "The area of a rectangle with a width of $width and a length of $length is $area.";
        ?>
    </p>
</body> 
</html>
