<?php
require 'V_header.php';

?>

<section class="main container">
    <h4><?php echo $titulo; ?>  </h4>
    <div class="row">
        <section class="posts col-md-12">
            

            <?php foreach ($resultados as $post): ?>

                <article class="post clearfix">
                <a href="single.php?id_articulo=<?php echo $post['id_articulo']; ?>" class="thumb float-left">
                    <img class="img-thumbnail" src="<?php echo RUTA;?>img/<?php echo $post['art_thumb']; ?>    " alt="">
                </a>

                <h2 class="post-title">
                    <a href="single.php?id_articulo=<?php echo $post['id_articulo']; ?>">
                        <?php echo $post['art_titulo']; ?>
                    </a>
                </h2>

                <p><span class="post-fecha"><?php echo fecha($post['art_fecha']);?> </span> por <span class="post-autor"><a href="#">ComDia</a></span></p>

                <p class="post-contenido text-justify">
                    <?php echo $post['art_extracto']; ?>
                </p>

                <div class="contenedor-botones">
                    <a href="single.php?id_articulo=<?php echo $post['id_articulo']; ?>" class="btn btn-primary">Leer Más</a>
                    
                </div>
            </article> 




            <?php endforeach ?>


            
        </section>

        
    </div>
</section>


<?php require 'V_footer.php';?>


<?php
include 'V_pie.php';
?>