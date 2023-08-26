document.getElementById("contact-form").addEventListener("submit", function (event) {
    event.preventDefault(); // Empêche l'envoi par défaut du formulaire

    // Récupérer les valeurs des champs
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var subject = document.getElementById("subject").value;
    var message = document.getElementsByName("message")[0].value;

    // Construire le lien de messagerie
    var mailtoLink = "mailto:alifaouza10@gmail.com" +
        "?subject=" + encodeURIComponent(subject) +
        "&body=" + encodeURIComponent( message + "\n\n\n Cordialement " + name );

    // Ouvrir le lien de messagerie
    window.location.href = mailtoLink;
});