<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Unifichiamoci</title>
    <link rel="stylesheet" href="../../css/create_article.css" type="text/css">
    <link href="../../css/style.css" rel="stylesheet"type="text/css">
  </head>
  <body style="margin: 0;">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../../js/create_article.js" charset="utf-8"></script>
    <?php
  	echo file_get_contents("../header.php");
  	 ?>
     <div class="centering">

     </div>
     <form class="post_creator_form" action="#" method="post">
       <input type="text" name="title" value="Inserisci un titolo">
       <div contenteditable="true" class="input_div" id="input_div">

       </div>
       <p id="empty_div">inserisci qui il testo dell'articolo</p>
       <button type="button" id="butz" onclick="choose_a_file();">susina</button>
       <input type="file" id="image_adder" value="image" style="visibility: hidden;">
       <input type="submit" name="banana" value="invia">
     </form>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="../../js/create_article.js" charset="utf-8"></script>
    <iframe src="../footer.html" width="100%" height="142px;" style="border: none; margin-top: 10px;"></iframe>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script></div>
  </body>
</html>
