require('./bootstrap');
$(document).ready(function () {
    //SETUP
    var filter = $('#filter'),
    apiURL = window.location.protocol + '//' + window.location.host + '/api/students/genders',
    soruce = $('#').html(),
    template = Handlebars.compile(soruce),
    container = $('student');

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
                console.log(res.response);
            } else {
                console.log(res.error);
                
            }           
        })
        .fail( function () {
            console.error('API ERROR');
        });
        
    });
    
    
});// <-- END DOC READY