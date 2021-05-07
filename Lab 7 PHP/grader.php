<?php
    $scores = array(90, 98, 89, 100, 100, 86);
    $avg = array_sum($scores)/count($scores);
    echo "<strong>Sample scores:</strong> ",implode(", ",$scores),'<br>';
    echo "<strong>Sample output:</strong>",'<br>';
    echo "Average score for [",implode(" ",$scores),"] is ", round($avg,1),'<br>';
    echo "Average grade is ",checkGrade($avg);
    echo '<br><br>';

    $scores = array(40, 65, 77, 82, 80, 54, 73, 63, 95, 49);
    $avg = array_sum($scores)/count($scores);
    echo "<strong>Sample scores:</strong> ",implode(", ",$scores),'<br>';
    echo "<strong>Sample output:</strong>",'<br>';
    echo "Average score for [",implode(" ",$scores),"] is ", round($avg,1),'<br>';
    echo "Average grade is ",checkGrade($avg);

    function checkGrade($score){
        switch($score){
            case $score==0:
                return 'F';
            case $score<20:
                return 'E';
            case $score<40:
                return 'D';
            case $score<60:
                return 'C';
            case $score<80:
                return 'B';
            default:
                return 'A';
        }
    }
?>