<!DOCTYPE html>
<html>

<body>
    <h1>Enter Scores:</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Score 1 <input type="text" name="scores[]" /><br />
        Score 2 <input type="text" name="scores[]" /><br />
        Score 3 <input type="text" name="scores[]" /><br />
        Score 4 <input type="text" name="scores[]" /><br />
        Score 5 <input type="text" name="scores[]" /><br />
        Score 6 <input type="text" name="scores[]" /><br /><br />
        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['scores']) && isset($_POST['submit'])) {
    $scores = $_POST['scores'];
    $avg = array_sum($scores) / count($scores);
    echo "<strong>Sample scores:</strong> ", implode(", ", $scores), '<br>';
    echo "<strong>Sample output:</strong>", '<br>';
    echo "Average score for [", implode(" ", $scores), "] is ", round($avg, 1), '<br>';
    echo "Average grade is ", checkGrade($avg);
    echo '<br><br>';
}
else if(isset($_GET['scores']) && isset($_GET['submit'])){
    $scores = $_GET['scores'];
    $avg = array_sum($scores) / count($scores);
    echo "<strong>Sample scores:</strong> ", implode(", ", $scores), '<br>';
    echo "<strong>Sample output:</strong>", '<br>';
    echo "Average score for [", implode(" ", $scores), "] is ", round($avg, 1), '<br>';
    echo "Average grade is ", checkGrade($avg);
    echo '<br><br>';
}
function checkGrade($score)
{
    switch ($score) {
        case $score == 0:
            return 'F';
        case $score < 20:
            return 'E';
        case $score < 40:
            return 'D';
        case $score < 60:
            return 'C';
        case $score < 80:
            return 'B';
        default:
            return 'A';
    }
}
?>