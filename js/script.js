$(document).ready( function(){//carga esta funcion cuando se carga todo el documneto
 
     $('#mostrar').click(function(){//
        if($(this).hasClass('fa-eye')){
            $('#usu_contra').removeAttr('type', 'text');
            $('#mostrar').addClass('fa-eye-slash').removeClass('fa-eye');
          }
          else{
          $('#usu_contra').attr('type','password');
          $('#mostrar').addClass('fa-eye').removeClass('fa-eye-slash');
        }
      });
  });


