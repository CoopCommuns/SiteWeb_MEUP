
window.addEventListener("scroll", function() {
   let sidebar = document.querySelector(".sidebar");
   let remove = document.querySelector("#sidebar-remove");
    
   if (window.scrollY >= 700){
      sidebar.classList.add("sidebar-fixed");

      if(window.scrollY >= 1556){
         sidebar.classList.add("erase");
         
      }else{
         sidebar.classList.remove("erase");
      
      }
   
   }else{
      sidebar.classList.remove("sidebar-fixed");

   }


});

