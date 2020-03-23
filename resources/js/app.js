require('./bootstrap');

const $ = require('jquery');

$(document).ready(function(){
    //elemento che sto cambiando
    $('#filter').change(function(){
        //prendi il valore di quel momento
        // console.log($(this).val());
        $.ajax({
            'url': window.location.protocol + '//' + window.location.host + '/api/students/genders',
            'data' : {
                'gender': $(this).val(),
            },
            'method': 'POST',
            success: function(data){
                console.log(data);
            },
            error: function(){
                console.log('error');
            }
        });
        
    });
});

