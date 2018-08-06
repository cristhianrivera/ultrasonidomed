<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Dialog - Default functionality</title>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="css/main.css">

  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script>
    $( function() {
      $('#testimonialOpen').dialog({
          autoOpen:false
      });

      $(".h1 a").click(function(e) {
          e.preventDefault();
          $('#testimonialOpen').dialog('open');
      });
    });

  </script>
</head>
<body>


  <p id="testimonialOpen">This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.
    <img src="imagesEstudios/GinecoFrame.png" alt="myimage" />
  </p>


<p class="h1">

    <br>
    <a href="#testimonialOpen">
        <!-- <img id="readMore"  src="img/b1.jpg"/> -->
        Link here
    </a>
</p>



</body>
</html>
