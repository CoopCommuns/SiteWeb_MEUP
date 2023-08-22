
window.addEventListener("scroll", function() {
    var sidebar = document.querySelector(".sidenav"); // Sélectionnez le sidebar par sa classe
    var footer = document.querySelector("#footer");
    var header = document.querySelector("#header");

    var headerHeight = header.clientHeight; // Hauteur du header

    if (window.innerWidth >= 768) {
        // Si la largeur de l'écran est supérieure ou égale à 768px, appliquer le positionnement du sidebar
        if (window.scrollY + window.innerHeight >= footer.offsetTop) {
            sidebar.style.position = "absolute";
            sidebar.style.top = "auto";
            sidebar.style.bottom = "240px";
            sidebar.style.marginLeft = "75%";
        } else if (window.scrollY >= headerHeight) {
            sidebar.style.position = "fixed";
            sidebar.style.top = "0";
            sidebar.style.bottom = "auto";
            sidebar.style.marginLeft = "75%";
        } else {
            sidebar.style.position = "relative";
            sidebar.style.top = "0px";
            sidebar.style.bottom = "auto";
            sidebar.style.marginLeft = "75%";
        }
    } else {
        // Si la largeur de l'écran est inférieure à 768px, désactiver le positionnement fixe
        sidebar.style.position = "relative";
        sidebar.style.top = "0";
        sidebar.style.bottom = "auto";
        sidebar.style.marginLeft = "0";
    }
});

