
window.addEventListener("scroll", function() {
   let sidebar = document.querySelector(".sidebar");
   let remove = document.querySelector("#sidebar-remove");
    // var footer = document.querySelector("#footer");
    // let header = document.querySelector("#header");

    // var headerHeight = header.clientHeight; 

    // if (window.innerWidth >= 768) {
    //     if (window.scrollY + window.innerHeight >= footer.offsetTop) {
            
    //         sidebar.style.top = "auto";
    //         sidebar.style.bottom = "400px";
    //         sidebar.style.marginLeft = "75%";

    //     } else if (window.scrollY >= headerHeight) {
    //         sidebar.style.position = "fixed";
    //         sidebar.style.top = "0px";
    //         sidebar.style.bottom = "auto";
    //         sidebar.style.marginLeft = "75%";
    //     } else {
    //         sidebar.style.position = "relative";
    //         sidebar.style.top = "auto";
    //         sidebar.style.bottom = "auto";
    //         sidebar.style.marginLeft = "5%";
    //     }
    // }
    
   if (window.scrollY >= 700){
      sidebar.classList.add("sidebar-fixed");

      if(window.scrollY >= 1450){
         remove.classList.add("erase");
      }else{
         remove.classList.remove("erase");
      }
   
   }else{
      sidebar.classList.remove("sidebar-fixed");

   }


});

