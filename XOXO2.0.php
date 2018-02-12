<?php
//array of boxes
$gameBoard = array();
//empties ==empty cells.
$empties = array();

for ($i = 0; $i < 9; $i++) {
    $gameBoard[$i] = "";
}
//define rand for O placement
$rand = 0;
//define game status(running/x or O won/game over)
$status = "Welcome!<br>Start by clicking a slot";

if (isset($_POST['gameBoard'])) {
    $gameBoard = $_POST['gameBoard'];

    //Random O placement
    for ($i = 0; $i < 9; $i++) {
        $rand = rand(0, 8);
        if ($gameBoard[$rand] !== 'X' and $gameBoard[$rand] !== 'O') {
            $gameBoard[$rand] = 'O';
            break;
        }
    }

    //experimental--not working
    function clearBoard($gameBoard) {
        for ($i = 0; $i < 9; $i++) {
            $gameBoard[$i] = "";
        }
        return $gameBoard;
    }

    switch (true) {
        //first row
        case $gameBoard[0] && $gameBoard[0] == $gameBoard[1] && $gameBoard[1] == $gameBoard[2]:
            $status = $gameBoard[0] . " won!";
            for ($i = 0; $i < 9; $i++) {
                $gameBoard[$i] = "";
            }
            break;
        //middle row
        case $gameBoard[3] && $gameBoard[3] == $gameBoard[4] && $gameBoard[4] == $gameBoard[5]:
            $status = $gameBoard[3] . " won!";
            for ($i = 0; $i < 9; $i++) {
                $gameBoard[$i] = "";
            }
            break;
        //bottom row
        case $gameBoard[6] && $gameBoard[6] == $gameBoard[7] && $gameBoard[7] == $gameBoard[8]:
            $status = $gameBoard[6] . " won!";
            for ($i = 0; $i < 9; $i++) {
                $gameBoard[$i] = "";
            }
            break;
        //first column
        case $gameBoard[0] && $gameBoard[0] == $gameBoard[3] && $gameBoard[3] == $gameBoard[6]:
            $status = $gameBoard[0] . " won!";
            for ($i = 0; $i < 9; $i++) {
                $gameBoard[$i] = "";
            }
            break;
        //second column
        case $gameBoard[1] && $gameBoard[1] == $gameBoard[4] && $gameBoard[4] == $gameBoard[7]:
            $status = $gameBoard[1] . " won!";
            for ($i = 0; $i < 9; $i++) {
                $gameBoard[$i] = "";
            }
            break;
        //third column
        case $gameBoard[2] && $gameBoard[2] == $gameBoard[5] && $gameBoard[5] == $gameBoard[8]:
            $status = $gameBoard[2] . " won!";
            for ($i = 0; $i < 9; $i++) {
                $gameBoard[$i] = "";
            }
            break;
        //diagonal 1
        case $gameBoard[0] && $gameBoard[0] == $gameBoard[4] && $gameBoard[4] == $gameBoard[8]:
            $status = $gameBoard[0] . " won!";
            for ($i = 0; $i < 9; $i++) {
                $gameBoard[$i] = "";
            }
            break;
        //diagonal 2
        case $gameBoard[2] && $gameBoard[2] == $gameBoard[4] && $gameBoard[4] == $gameBoard[6]:
            $status = $gameBoard[2] . " won!";
            for ($i = 0; $i < 9; $i++) {
                $gameBoard[$i] = "";
            }
            break;
        //Tie no winners
        case!in_array("", $gameBoard):
            $status = "Game over-It's a Tie!";
            for ($i = 0; $i < 9; $i++) {
                $gameBoard[$i] = "";
            }
    }
}
?>
<?php
echo "<br><br>";
echo $status;
echo "<br><br>";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="XOXO.css" crossorigin="anonymous">

    </head>

    <body>

        <div class="main">
            <div class="main-div">
                <form id="gameform" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                    <!--big-box=container for boxes-->
                    <div id="big-box">
                        <div class="box" id="box1"><?php echo $gameBoard[0] ?></div>
                        <div class="box" id="box2"><?php echo $gameBoard[1] ?></div>
                        <div class="box" id="box3"><?php echo $gameBoard[2] ?></div>
                        <div class="breaker"></div>
                        <div class="box" id="box4"><?php echo $gameBoard[3] ?></div>
                        <div class="box" id="box5"><?php echo $gameBoard[4] ?></div>
                        <div class="box" id="box6"><?php echo $gameBoard[5] ?></div>
                        <div class="breaker"></div>
                        <div class="box" id="box7"><?php echo $gameBoard[6] ?></div>
                        <div class="box" id="box8"><?php echo $gameBoard[7] ?></div>
                        <div class="box" id="box9"><?php echo $gameBoard[8] ?></div>
                    </div>
                    <input id="input1" type="hidden" name="gameBoard[]" value="">
                    <input id="input2" type="hidden" name="gameBoard[]" value="">
                    <input id="input3" type="hidden" name="gameBoard[]" value="">
                    <input id="input4" type="hidden" name="gameBoard[]" value="">
                    <input id="input5" type="hidden" name="gameBoard[]" value="">
                    <input id="input6" type="hidden" name="gameBoard[]" value="">
                    <input id="input7" type="hidden" name="gameBoard[]" value="">
                    <input id="input8" type="hidden" name="gameBoard[]" value="">
                    <input id="input9" type="hidden" name="gameBoard[]" value="">
                    <!--                    <button id="OBTN" class="btn btn-default" type="submit">Player O Turn</button>-->
                </form>


            </div>
        </div>



        <!--END OF HTML HERE-->
        <!--Jquery(Bootstrap dependency)-->
        <script src="https://code.jquery.com/jquery-latest.min.js"></script>
        <!--Bootstrap Plugins-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="XOXO.js"></script>

    <body>


</html>