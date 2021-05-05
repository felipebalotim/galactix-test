<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Indie+Flower&family=Marck+Script&family=Neucha&family=Rancho&display=swap" rel="stylesheet">
    
    <link href="css/main.css" rel="stylesheet">

    <title>Dog search API</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="menu col-12 col-md-4">
                <div class="row">
                    <div class="col text-white text-center my-5">
                        <h1>
                            <i class="fas fa-paw"></i>
                            DOG SEARCH
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-white">
                        <form action="search.php" method="POST">
                            <div class="mb-3">
                                <label for="breedName" class="form-label">Digite o nome da raça</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-dog"></i></span>
                                    <input id="breedName" class="form-control form-control-lg" type="text" name="breedName" placeholder="Raça" aria-label="Raça" value="<?php if (isset($_SESSION['breed'])) { echo $_SESSION['breed']; } ?>">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="fontFamily" class="form-label">Selecione o tipo da fonte</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fas fa-font"></i>
                                    </span>
                                    <select id="fontFamily" class="form-select form-select-lg" name="fontFamily" aria-label="Tipo de fonte">
                                        <option>(Selecione)</option>
                                        <option value="Indie Flower">Indie Flower</option>
                                        <option value="Marck Script">Marck Script</option>
                                        <option value="Amatic SC">Amatic SC</option>
                                        <option value="Neucha">Neucha</option>
                                        <option value="Rancho">Rancho</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="fontColor" class="form-label">Selecione a cor da fonte</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fas fa-palette"></i>
                                    </span>
                                    <select id="fontColor" class="form-select form-select-lg" name="fontColor" aria-label="Cor">
                                        <option>(Selecione)</option>
                                        <option value="0b6eef">Azul</option>
                                        <option value="22e53c">Verde</option>
                                        <option value="ff3232">Vermelho</option>
                                        <option value="f24a33">Laranja</option>
                                        <option value="420690">Roxo</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" onclick="setFontStyle()" class="btn btn-warning">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8 mt-5">
                <div class="row">
                    <div id="search-result" class="col text-center">
                        <?php if (isset($_SESSION['search'])) :
                        if ($_SESSION['search']->status == 'success') : ?>
                            <p class="breedNameSearch mb-5">
                                <?php echo $_SESSION['breed']; ?>
                            </p>
                            <img src="<?php echo $_SESSION['search']->message; ?>" alt="">
                        <?php else : ?>
                            <p>
                                <?php echo $_SESSION['search']->message; ?>
                            </p>
                        <?php endif;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script src="js/main.js" type="text/javascript"></script>
</body>

</html>