<!--<video controls autoplay="autoplay" muted="muted" loop="loop">

<div class="slide" style="height: 500px;">

        <div class="slidevideo">

            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">

                <source src="mp4/jg.mp4" type="video/mp4">
            </video>

        </div>
        <div class="slidetexto">
            Tour pela oficina
        </div>
    </div>
-->
<div class="container-fluid bg-3 text-center">
    <h2></h2>

</div>
<div class="container-fluid bg-3 text-center">
    <h2>De nossos clientes</h2>



    <br>
    <?php

    $diretorio = scandir("images/blog");
    $qtd = count($diretorio) - 2;
    //echo ("$qtd");
    $fim = $qtd / 3;
    //echo "$fim";
    //echo '<br>';
    for ($image = $fim; $image > 0; +$image--) {
    ?>
        <article>
            <div class="row">

                <div class="col-sm-4" align="center">
                    <h2><?php require_once("images/blog/" . $image . ".txt") ?></h2>
                </div>
                <div class="col-sm-4" align="center">

                    <p class="text-justify"><?php include_once("images/blog/{$image}.des") ?></p>
                </div>
                <div class="col-sm-4" align="center">

                    <img src='<?= "images/blog/" . $image . ".jpg" ?>' class="img-responsive" style="width:75%" alt="Foto">
                </div>

            </div>
        </article>
        <br>
    <?php } ?>

</div>