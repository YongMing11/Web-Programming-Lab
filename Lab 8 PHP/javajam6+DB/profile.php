<?php
// $fakeDB = fopen('javamember.txt','r');

// $user;
// while(!feof($fakeDB)){
//     $user = fgets($fakeDB);
// }

// echo $user;
$line = '';
$f = fopen('javamember.txt', 'r');
$cursor = -1;
fseek($f, $cursor, SEEK_END);
$char = fgetc($f);
//Trim trailing newline characters in the file
while ($char === "\n" || $char === "\r") {
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
}
//Read until the next line of the file begins or the first newline char
while ($char !== false && $char !== "\n" && $char !== "\r") {
    //Prepend the new character
    $line = $char . $line;
    fseek($f, $cursor--, SEEK_END);
    $char = fgetc($f);
}
$user = explode(',', $line);
?>

<?php
include_once('header.php');
?>
<main>
    <div class="container-fluid p-5 bg-coffee">
        <h1>JavaJam Coffee House - Member Profile</h1>
        <p>Hi <?php echo $user[0] ?>, Welcome to JavaJam Coffee House!</p>
        <div class="container">
            <div class="row p-3 border border-dark">
                <div class="col-5">
                    Name:
                </div>
                <div class="col-7">
                    <?php echo $user[0] ?>
                </div>
            </div>
            <div class="row p-3 border border-dark">
                <div class="col-5">
                    Email:
                </div>
                <div class="col-7">
                    <?php echo $user[1] ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include_once('footer.php');
?>