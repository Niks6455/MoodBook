"use strict"

  
document.addEventListener('DOMContentLoaded', function(){


     //license
     const license__open = document.querySelector('.license__btn');
     const license__close = document.querySelector('.license__btn__2');
     let license__inner = document.querySelector('.license__inner');

     license__open.addEventListener('click', (event) =>{ 
        license__inner.classList.add('active'); 
     });
 
     license__close.addEventListener('click', (event) =>{ 
        license__inner.classList.remove('active'); 
     });

    
     

   //vse
   const  vse = document.querySelector('.vse');  
   const  vse__inner = document.querySelector('.vse__inner'); 
   
   
   var scrollHeight = Math.max(
      document.body.scrollHeight, document.documentElement.scrollHeight,
      document.body.offsetHeight, document.documentElement.offsetHeight,
      document.body.clientHeight, document.documentElement.clientHeight
    );
    vse.style.height = scrollHeight + "px";
    
   
    
});




