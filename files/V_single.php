<?php 
require 'V_header.php';
?>


<section class="main container">
    <div class="row">
        <section class="posts col-md-9">
            
            <article class="post clearfix">
             
                    <img class="img-thumbnail" src="<?php echo RUTA; ?>img/<?php echo $post['art_thumb']; ?> " alt="<?php echo $post['art_titulo']; ?>">
            
                <h2 class="post-title">
                    
                        <?php echo $post['art_titulo']; ?>
                    
                </h2>
                <p><span class="post-fecha">

                    <?php echo fecha($post['art_fecha']); ?>
                        
                    </span> por <span class="post-autor"><a href="#">ComDia</a></span></p>

                <p class="extracto">
                    <?php echo nl2br($post['art_texto']); ?>
                        
                    </p>

        
            </article>



        </section>
    </div>
</section>


<?php require 'V_footer.php';  ?>



 <?php require 'V_pie.php'; ?>