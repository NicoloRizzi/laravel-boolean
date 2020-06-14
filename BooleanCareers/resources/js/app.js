require('./bootstrap');
$(document).ready(function () {
    //SETUP
    var filter = $('#filter'),
    apiURL = window.location.protocol + '//' + window.location.host + '/api/students/genders';
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
            console.log(res);
            
        })
        .fail( function () {
            console.error('API ERROR');
        });
        
    });
    
    
});// <-- END DOC READY