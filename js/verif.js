$(document).ready(function() {
    $('form').submit(function(){
        event.preventDefault();
        envoiFormulaire();
        $('.erreur').remove();
    })
  function envoiFormulaire() {
    var postData = {
        'prenom' : $('#prenom').val(),
        'nom' : $('#nom').val(),
        'email' : $('#email').val(),
        'text' : $('#text').val(),
    };
    $.ajax(
        {
            dataType: 'json',
            type: 'POST',
            url: 'transfert.php',
            data: postData,
            success: function (reponse) {
                if(reponse === true){
                    alert('Message en bonne forme')
                }else{
                    $.each(reponse, function(champ, erreur) {
                        $('#'+champ).after('<span class="erreur">'+erreur+'</span>')	
                    });
                }
            },
            error: function(){
                console.log('Problème de validation');
            }
        }
    )
  }
});