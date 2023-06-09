<?php

function repeat($text1, $num1 = 10)
{
    // Use double quotes for line breaks to be rendered as HTML
    echo "<ol>\r\n";

    for($i = 0; $i < $num1; $i++)
    {
        // Use double quotes to embed variables in strings
        echo "<li>$text1</li>\r\n";
    }

    echo "</ol>";
}

// Call the repeat function with two arguments
repeat("I'm the best", 17);

// Call the repeat function with one argument
repeat("You're the man");
?>