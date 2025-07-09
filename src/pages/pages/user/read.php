<?php

require_once "../../../config.php";
require_once "../../../src/actions/user.php";
require_once "../../../src/modules/messages.php";
require_once "../partials/header.php";

$users = readUserAction($conn);

?>
<div class="container">
  <div class="row">
    <a href="../../../"><h1>Users - Read</h1></a>
    <a class="btn btn-success text-white" href="./create.php">New</a>
  </div>
  <div class="row flex-center">
    <?php if(isset($_GET["message"])) echo(printMessage($_GET["message"])); ?>
  </div>
</div>