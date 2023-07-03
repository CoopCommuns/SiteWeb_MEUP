function GetAllevent(){
    $.ajax(
        {
            type: "get",
            url: "./Getevent.php",
            success: function(data) {
                $('#event').append(data);
            },
            error: function(){
                alert("impossible d'afficher les données");
            }
              
        }
    )
}
function envoyerInscription() {
    var preferencesDiv = document.getElementById('preferences');
    var checkboxes = preferencesDiv.querySelectorAll('input[type="checkbox"]:checked');
    var corpsMessage = 'Inscription à la newsletter :\n';

    for (var i = 0; i < checkboxes.length; i++) {
        corpsMessage += '- ' + checkboxes[i].value + '\n';
    }

    var adresseEmail = document.getElementById('email').value;
    var sujetEmail = "S'inscrire à la newsletter";
    var adresseDestination = "alifaouza10@gmail.com";

    var lienMailto = 'mailto:' + encodeURIComponent(adresseDestination) + '?subject=' + encodeURIComponent(sujetEmail) + '&body=' + encodeURIComponent(corpsMessage);

    window.location.href = lienMailto;
    // Rafraîchir la page après l'envoi
    location.reload();
    }

 
    