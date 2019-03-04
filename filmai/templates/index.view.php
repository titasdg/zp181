<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Start Bootstrap </div>
      <div class="list-group list-group-flush">
        <a href="/filmai/?page=all-films" class="list-group-item list-group-item-action bg-light">Visi Filmai</a>
        <a href="/filmai/?page=filter-films" class="list-group-item list-group-item-action bg-light">Filmai pagal Žanra</a>
        <a href="/filmai/?page=search-films" class="list-group-item list-group-item-action bg-light">Filmo paieška</a>
        <a href="/filmai/?page=stats" class="list-group-item list-group-item-action bg-light">statistika</a>
    
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

     <?php include "_partials/nav.view.php";?>

      <div class="container-fluid">
        <h1 class="mt-4">Simple Sidebar</h1>
      
        <?php
   
      include "inc/functions.php";
  if(isset($_GET['page']))
  {

 switch ($_GET['page']) {
    case "all-films":
        include "pages/all_films.page.php";
        break;
    case "filter-films":
    include "pages/filer_films.page.php";
        break;
    case "search-films":
    include "pages/search.page.php";
        break;
        case "stats":
        include "pages/stats.page.php";
        break;
  
  }
}
  else{
    include "pages/home.page.php";
  }

        

   

?>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
