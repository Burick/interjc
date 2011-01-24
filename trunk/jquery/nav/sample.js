jQuery(function($){
    $.getJSON('data.js', Math.random(), function(data){
        $('#nav').navCreator(data);  
    });
});