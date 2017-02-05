<?php //order form ?>
<html>
<head>
    <title>HackMT 2017 Group 7</title>
<!--    <script src="read_db.js"></script>-->
<?php include('./bootstrap_cdn.php'); ?>
</head>
<body>

  <div class=".container-fluid">
    <div class="row">
      <form action="index.php" method="post" role="form">
        <div class="form-group">

          <select class="form-control" name="pizza" id="pizza">
            <option value="1">Cheese pizza</option>
            <option value="2">Meat Lovers</option>
            <option value="3">Supreme</option>
          </select>

        </div>



      </div>
      <div class="row">
        <button type="submit" class="btn btn-default">Submit</button>
        <input type="hidden" name="submitted" value="1">
        <input type="hidden" name="id" value="">


      </div>
    </form>
  </div>
<?php


?>



</body>
</html>
