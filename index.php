
<!DOCTYPE HTML>
<html>

<head>

  <style>

  h1{
    font-size: 30px;
  }
  /* The container */
  .container {
      display: block;
      position: relative;
      padding-left: 35px;
      margin-bottom: 12px;
      cursor: pointer;
      font-size: 22px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      font-size: 30px;
  }

  /* Hide the browser's default checkbox */
  .container input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
  }

  /* Create a custom checkbox */
  .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 25px;
      width: 25px;
      background-color: #eee;
  }

  /* On mouse-over, add a grey background color */
  .container:hover input ~ .checkmark {
      background-color: #ccc;
  }

  /* When the checkbox is checked, add a blue background */
  .container input:checked ~ .checkmark {
      background-color: #2196F3;
  }

  /* Create the checkmark/indicator (hidden when not checked) */
  .checkmark:after {
      content: "";
      position: absolute;
      display: none;
  }

  /* Show the checkmark when checked */
  .container input:checked ~ .checkmark:after {
      display: block;
  }

  /* Style the checkmark/indicator */
  .container .checkmark:after {
      left: 9px;
      top: 5px;
      width: 5px;
      height: 10px;
      border: solid white;
      border-width: 0 3px 3px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
  }
  input{
    display: block;
  }
  </style>

</head>

<body style="font-size: 15px;">

<h1>Select Who Is Playing Today:</h1>

<form action="roster.php" method="post">

  <label class="container"><input type="checkbox" checkbox="checked" name="player1" <?php if (isset($player1) && $player1=="player1") ?> value=1>Andy<br>
    <span class="checkmark"></span>
    </label>
  <label class="container"><input type="checkbox" checkbox="checked" name="player2" <?php if (isset($player2) && $player2=="player2") ?> value=1>Bart<br>
  <span class="checkmark"></span>
  </label>
  <label class="container"><input type="checkbox" checkbox="checked" name="player3" <?php if (isset($player3) && $player3=="player3") ?> value=1>Ben J.<br>
    <span class="checkmark"></span>
    </label>
  <label class="container"><input type="checkbox" checkbox="checked" name="player4" <?php if (isset($player4) && $player4=="player4") ?> value=1>Ben S.<br>
    <span class="checkmark"></span>
    </label>
  <label class="container"><input type="checkbox" checkbox="checked" name="player5" <?php if (isset($player5) && $player5=="player5") ?> value=1>Drew<br>
    <span class="checkmark"></span>
    </label>
  <label class="container"><input type="checkbox" checkbox="checked" name="player6" <?php if (isset($player6) && $player6=="player6") ?> value=1>Evan<br>
    <span class="checkmark"></span>
    </label>
  <label class="container"><input type="checkbox" checkbox="checked" name="player7" <?php if (isset($player7) && $player7=="player7") ?> value=1>Pete<br>
    <span class="checkmark"></span>
    </label>
  <label class="container"><input type="checkbox" checkbox="checked" name="player8" <?php if (isset($player8) && $player8=="player8") ?> value=1>Rhett<br>
    <span class="checkmark"></span>
    </label>
  <label class="container"><input type="checkbox" checkbox="checked" name="player9" <?php if (isset($player9) && $player9=="player9") ?> value=1>Scott<br>
    <span class="checkmark"></span>
    </label>
  <label class="container"><input type="checkbox" checkbox="checked" name="player10" <?php if (isset($player10) && $player10=="player10") ?> value=1>Sean<br>
    <span class="checkmark"></span>
    </label>
  <label class="container"><input type="checkbox" checkbox="checked" name="player11" <?php if (isset($player11) && $player11=="player11") ?> value=1>Tim<br>
    <span class="checkmark"></span>
    </label>
  <label class="container"><input type="checkbox" checkbox="checked" name="player12" <?php if (isset($player12) && $player12=="player12") ?> value=1>Guest<br>
    <span class="checkmark"></span>
    </label>


<input style="font-size: 50px;" type="submit">

</form>

</body>
</html>
