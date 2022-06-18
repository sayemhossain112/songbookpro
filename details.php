<?php
  require_once 'config.php';
  

  if (isset($_POST['submit'])) {
    $title = $_POST['search'];

    $sql = 'SELECT * FROM song WHERE title = :title';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['title' => $title]);
    $row = $stmt->fetch();
  } else {
    header('location: .');
    exit();
  }

 
?>



</select>
        



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="theme.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i">
  <script src="bootstrap/scripts/jquery.min.js"></script>
  <script src="/bootstrap/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Test ChordProPHP">
    <meta name="author" content="Nicolas Wurtz">
    <link rel="stylesheet" href="chordpro_css.css" />
</head>

<body class="bg-primary">
       
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!----- print clean file ------>
<script>
function printContent(el){
var restorepage = $('body').html();
var printcontent = $('#' + el).clone();
$('body').empty().html(printcontent);
window.print();
$('body').html(restorepage);
}
</script>
<!----------------------------->

    <div class="container mx-auto"> 
    <div class="row text-left">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="https://cbana.us/songbook/"><strong>CHRISTIAN HLABU</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
      </li>
    </ul>
            <form action="details.php" method="post" class="">
              <div class="input-group textbox-rounded">
                <input type="text" name="search" id="search" class="form-control form-control-md textbox-rounded border-primary" placeholder="Search..." autocomplete="on" required>
                <div class="input-group-append">
                  <input type="submit" name="submit" value="Search" class="btn btn-primary textbox-rounded">
                </div>
              </div>
            </form>
</nav>



        
<div class="container mx-auto">
     <div class="list-group" id="show-list">
          <!-- Here autocomplete list will be display -->
     </div>
</div>
    <div class="col-8 mx-auto">
        
  

    <?php
      require_once 'ChordPro/GuessKey.php';
      $guess = new ChordPro\GuessKey();
      $key = $guess->guessKey($song);
      $key2 = $guess->$scales;

      echo $key2;
    ?>


<select name="month" class="month">
<?php  foreach($key as $k => $v) {
    echo "<option value='" . $k . "'>" . $v . "</option>";
} ?>







</select>

<script type="text/javascript">
$(document).ready(function(){
    $("select.month").change(function(){
        var selectedCountry = $(".month option:selected").text();
        $("#keyNum").text = selectedCountry;
       document.getElementById('keyNum').innerHTML = selectedCountry;


      //  alert(selectedCountry);
        $.ajax({
            type: "POST",
            url: $guess,
            data: { month : selectedCountry } 
            
        }).done(function(data){
            
        });
    });
});
</script>
        









        
        <!-- <form action = "https://cbana.us/songbook/details.php" method = "post">
<select id="select" name="key_select">
<option value ="Fb">Fb</option>
<option value ="Cb">Cb</option>
<option value ="Gb">Gb</option>
<option value ="Db">Db</option>
<option value ="Ab">Ab</option>
<option value ="Eb">Eb</option>
<option value ="6">Bb</option>
<option value ="7">F</option>
<option value ="8">C</option>
<option value ="9">G</option>
<option value ="10">D</option>
<option value ="11">A</option>
<option value ="12">E</option>
<option value ="13">C</option>
<option value ="14">F#</option>
<option value ="15">C#</option>
<option value ="16">G#</option>
</select>
<button type="submit">Select</button> -->

      <h1>HTML</h1>
      <?php echo $txt_html; 
      ?>
      <h1>Plain text</h1>
      <?php echo '<pre>'.$txt.'</pre>'; ?>

        
        
        
        
        
        
      <div class ="titleText"><?= ucwords($row['title'])?></div>
      <div >Key: <label id="keyNum">A</label></div><br>
    <pre data-key="C">
     
    <?= nl2br(htmlentities(ucfirst($row['lyrics'])))?>
    </pre>
    </div>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
    <script type="text/javascript" src="/jquery.transposer.js"></script>
    <script type="text/javascript">
  $(function() {
    $("pre").transpose({ key : 'B' });
  });
</script>
    <div class="col-md-4">
    <div class="card text-white bg-primary mb-3" style="max-width: auto;">
    <div class="card-header">Summary</div>
    <div class="card-body">
    <div class="card-title">Title : <?= ucwords($row['title'])?>
    <div class="card-title">Master key : <?= strtoupper($row['chord'])?>
    <div class="card-title bi bi-123">Hla Number :  <?= $row['number']?>

    </br>
    </br>
    <p class="card-text"><strong>Download :</strong></p>
    <span class = "social_logo">
      <button type="button" class="btn btn-light px-1"><a href='uploads/<?=$row['pdf']?>'> <img src="uploads/icons/file-earmark-pdf.svg" alt="" width="40" height="40"></a>PDF</button>
      <button type="button" class="btn btn-light px-1"><a href='uploads/<?=$row['ppt']?>'> <img src="uploads/icons/file-earmark-ppt.svg" alt="" width="40" height="40"></a>PPT</button>
      <button type="button" class="btn btn-light px-1"><a href='uploads/<?=$row['pro']?>'> <img src="uploads/icons/file-earmark-play.svg" alt="" width="40" height="40"></a>PRO</button>
      </span>
      <br>
      <br>
      <br>
      <button type="button" class="btn btn-light" onclick="printContent('print');">Print</button>
    </div>
    </div>
    </div>

</div>
</div>
</div><div class="footer bg-light"><img src="uploads/icons/footer_logo_hd.png" width="161" height="50"></div>
</div>


<?php 


?>


</body>
</html>



