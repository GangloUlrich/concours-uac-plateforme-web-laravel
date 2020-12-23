             
     $(document).ready(function(){

       
        //scroll to up 
        
        //animation des div 
        $(window).scroll(function() {
            $(".slideanim").each(function(){
              var pos = $(this).offset().top;
  
              var winTop = $(window).scrollTop();
              if (pos < winTop + 600) {
                $(this).addClass("slide");
              }
            });
          });
  
  
          //animation des titres 
          
            $(".des").css("animation-name","dess");
            $(".des").css("animation-duration","1s");
            $(".des").css("animation-delay","1.1s");
            $(".des").css("animation-timing-function","linear");

            //navbar

        
        
});
  
 
        
    