<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="author" content="Lucas José de Araújo">
    <title>My Site</title>
    <!--Import Google Icon Font-->

    <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="style/estilo.css">
    <link rel="stylesheet" type="text/css" href="animate.css" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


</head>

<body>
    <?php include_once 'php_action/db_connect.php'; ?>

        <!--navbar-->

        <nav class="navbar navbar-expand-lg navbar-light bg-light teste">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="feed.php">feed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>


        <!--------------------------NAVBAR--------------------------------------------------------------------->


        <!-----------------------------Feed------------------------------------------------------------->




        <!------------------------------------------------------------------------------------------------------------->

        <?php

        $sql = "SELECT * FROM noticias";
        $resultado = mysqli_query($connect, $sql);
               
                if(mysqli_num_rows($resultado) > 0 ){
                while($dados = mysqli_fetch_array($resultado)){ ?>

            <div class="container mt-5 border shadow p-3 mb-5 bg-white rounded ">


                <!--------------------------------->

                <div class="row">
                    <div class="col-12 col-md-6">
                        <!---------------imagem------------------>
                        <div class="cont">
                            <img src="img/<?php echo $dados['img'] ?>" class="img-thumbnail float-left img-fluid" alt="">
                        </div>
                    </div>
                    <!----------------imagem----------------->
                    <div class="col-12 col-md-6 ">
                        <!----------------TEXTO---------------->
                        <h5 class="mt-1"><?php echo $dados['titulo'] ?></h5>
                        <p>
                            <?php echo $dados['texto'] ?>
                        </p>
                        <div class="d-flex flex-row-reverse ">
                            <!--------------Botão------------------->
                            <div class="p-2 ">
                                <button type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#demo">Ler tudo</button>


                            </div>



                            <div id="demo" class="collapse">
                                Lorem ipsum dolor text....
                            </div>
                        </div>

                    </div>
                </div>


                <div class="d-flex flex-row-reverse ">
                    <div class="p-2">
                        <button type="button" class="btn btn-outline-primary ">Editar</button>
                    </div>
                    <div class="p-2">
                        <button type="button" class="btn btn-outline-danger ">Deletar</button>
                    </div>



                </div>







                <!--------------Botoes editar------------------->





            </div>



            <?php }} ?>



                <!------------------------------------------------------------------------------------------------------------->

                <!------------------------------------------------------------------------------------------------------------->










                <!------------------------------------------------------------------------------------------------------------->

                <!--------------------------------------------Paginação--------------------------------------------------------->
                <div class="container mt-4">
                    <ul class="pagination justify-content-center pagination-lg">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>

                    <!------------------------------------------------------------------------------------------------------------->
                    <!------------------------------------------------------------------------------------------------------------->
                </div>
                

                <!-- REDIMENCIONAR IMG COM BACKGROUND COVER ele vai ocupa toda div
                <style type="text/css">
                    .exemplo4 {
                        width: 100px;
                        height: 90px;
                        padding: 5px;
                        border: 1px solid #333;
                        background-image: url(img/img4.jpg);
                        background-size: cover;
                        background-repeat: no-repeat;
                    }

                </style>

                <div class="exemplo4">Exemplo de background-size: cover</div>

-->

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<script src="script/funcao.js"></script>




</html>
