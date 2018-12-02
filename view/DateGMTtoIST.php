<?php
include_once('Header.php');
?>

<!DOCTYPE html>
<html lang="en">
<body>

<h1>DateGMTtoIST</h1>

<form class="form-inline" action="/action_page.php">
    <div class="form-inline margin5px">
      <label for="gmtDate">Current GMT date:</label>
      <input type="text" class="form-control"
        value='<?php echo date("Y-m-d H:i:s P e T"); ?>'
        id="gmtDate" size="64" disabled>
    </div>
    <div class="form-inline margin5px">
      <label for="gmtDate">Current ewsw date:</label>
      <input type="text" class="form-control"
        value='<?php echo date("Y-m-d H:i:s P"); ?>'
        id="gmtDate" size="35" disabled>
    </div>
 <div class="form-inline margin5px">
   <label for="gmtDate">GMT date:</label>
   <input type="text" class="form-control" id="gmtDate">
 </div>
 <div class="form-inline margin5px">
   <label for="istDate">IST date:</label>
   <input type="text" class="form-control" id="istDate">
 </div>
 <button type="submit" class="btn btn-default margin5px">Submit</button>
</form>

<?php

echo "string".$gmtDate;

 ?>

</body>
</html>
