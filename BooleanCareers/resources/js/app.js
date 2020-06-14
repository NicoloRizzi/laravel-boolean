require('./bootstrap');

$(document).ready(function () {
    //SETUP
    var filter = $('#filter'),
    apiURL = window.location.protocol + '//' + window.location.host + '/api/students/genders',
    soruce = $('#student-template').html(),
    template = Handlebars.compile(soruce),
    container = $('.students');

    filter.on('change', function() {
        var gender = $(this).val();
        console.log(gender);
        
        $.ajax({
            url: apiURL,
            method: 'POST',
            data: {
                filter: gender
            }

        })
        .done( function (res) {
            if (res.response.length > 0) {
                // RESET
                container.html(' ');
                for(var i = 0; i < res.response.length; i++) {
                    var item = res.response[i];
                    var context = {
                        slug: item.slug,
                        img: item.img,
                        nome: item.nome,
                        eta: item.eta,
                        assunzione: (item.genere == 'm') ? 'Assunto' : 'Assunta',
                        azienda: item.azienda,
                        ruolo: item.ruolo,
                        descrizione: item.descrizione
                    }
                    var output = template(context);
                    container.append(output);
                }
            } else {
                console.log(res.error);
                
            }           
        })
        .fail( function () {
            console.error('API ERROR');
        });
        
    });
    
    
});// <-- END DOC READY