
<?php
    include("config.php");
?>



<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
          <?php include 'log/header.php' ?>
        </header>
        <main>



      <div class="container" >
      <div style="background-color:beige; padding:20px;margin-top:170px;border-radius:20px; "><img src="img/yo2.gif" alt="" width="650px" height="200px"><SPAn style="font-family: fantasy;font-size:30px;margin-left:200px"> MIS APLICACIONES WEB</SPAn></div>
       <br>
      <img src="img/usuari01.jpg" class="rounded-circle" alt="Cinque Terre" width="204" height
      ="156">
      <div style="margin-left: 250px;margin-top:-150px">
      <h1>CARLOS LOPEZ</h1>
      <h4>@carloslopez</h4>
      <button type="button" class="btn btn-light">Personalice Canal</button>
      <a href="ver_videos.php">
      <button type="button" class="btn btn-light">Gestione Videos</button>
      </a>
      </div>
     <br><br>
     <h5>  <a href=""> <samp style=" color:black" >video</samp> </a>  <a href=""> <samp style="margin-left: 50px; color:black" >Lista</samp> </a> <a href=""> <samp style="margin-left: 50px; color:black" >Publicacion</samp> </a>   <samp style="margin-left: 50px; color:black" > <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg></samp> </a>     </h5>
      <hr>





      </div>




      

       
    <div class="row" style="margin-left:180px;  ">
     <?php
    $query = $db->prepare("SELECT * FROM videos ORDER BY id DESC");
    $query->execute();
    $data = $query->fetchAll();
        foreach ($data as $row):
            echo "<div class='col-md-6' style='width= 1500px '>";
            $ubicacion = $row['ubicacion'];
            echo "<div class='col-md-6'>";
            echo "<video src='videos/".$ubicacion."' controls width='300px' height='200px'; >";
            echo "video";          
            echo "</div>";
            echo "</div>";
        endforeach;
        ?>
          
    </div>

    </div>





        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
