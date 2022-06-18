<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LAI HLABU</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="theme.css">

</head>

<body class="bg-primary">
  <div class="container">
    <div class="row mt-4">
      <div class="col-md-8 mx-auto bg-light rounded p-4">
        <h5 class="text-center font-weight-bold">Lai Hlabu</h5>
        <hr class="my-1">
        <h5 class="text-center text-dark">A hnuai ah hla hmin ngan aw la hawl aw</h5>
        <form action="details.php" method="post" class="p-3">
          <div class="input-group">
            <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-primary width =250px;" placeholder="Search..." autocomplete="off" required>
            <div class="input-group-append">
              <input type="submit" name="submit" value="Search" class="btn btn-primary rounded-right">
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6" style="position: relative;margin-top: -38px;margin-left: 215px;">
        <div class="list-group" id="show-list">
          <!-- Here autocomplete list will be display -->
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>
</body>

</html>