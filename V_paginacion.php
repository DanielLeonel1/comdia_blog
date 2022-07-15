<?php 
$numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conexion); 
?>



<section  class="paginacion" aria-label="Page navigation example">
    <ul class="pagination">

        <?php  if (pagina_actual() === 1): ?>
        <li class="page-item disabled"><a class="page-link">&laquo;<span class="sr-onli"></span></a></li>

        <?php  else: ?>
            <li class=""><a class="page-link" href="index.php?p=<?php echo pagina_actual() -1 ?>">&laquo;<span class="sr-onli"></span></a></li>
        <?php endif; ?>

        <?php for($i = 1; $i <= $numero_paginas; $i++): ?>

            <?php if(pagina_actual() === $i): ?>
                <li class="page-item active">

                    <span class="page-link">
                    <?php echo $i ?>
                        <span class="sr-only">(current)</span>
                    
                </li>

            <?php else: ?>

            <li class="page-item"><a class="page-link" href="index.php?p=<?php echo $i ?>">  <?php echo $i; ?>   </a></li>

            <?php endif ?>

        <?php endfor;  ?>

        <?php if(pagina_actual() == $numero_paginas):  ?>

            <li class="page-item disabled"><a class="page-link">&raquo;<span class="sr-onli"></span></a></li>

        <?php else: ?>

            <li class="page-item"><a class="page-link" href="index.php?p=<?php echo pagina_actual() + 1; ?>">&raquo; <span class="sr-onli"></span></a></li>


        <?php endif; ?>


      
    </ul>

 </section>