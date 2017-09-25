<?php
    $correct_count = 0;

    //List Questions
    for($i = 1; $i <= 5; $i++){
        echo $_POST["q".$i."_info"];
        echo "<br /> Your Answer: ".$_POST["q".$i]."<br />";
        echo "Correct Answer: ".$_POST["q".$i."_ans"];
        echo "<hr>";

        if($_POST["q".$i."_ans"] == $_POST["q".$i]) $correct_count++;
    }

    echo "Number of answers correct: ".$correct_count;
    echo "<br />Percentage: ";
    echo ($correct_count / 5) * 100;
    echo "%";
?>