<?php
  echo $_GET['bla']
?>
<html>
  <script type="text/javascript">
    document.cookie = "macookie=asdfjkl";
    document.write(document.cookie);
  </script>
  <form action="/index.php">
    <input type="text" name="bla"><br />
    <input type="submit" value="Submit">
  </form>
</html>
