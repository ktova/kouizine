// Display or Hide the easter egg
$('#easter_open').on("click", function(){
    $('#hidden_section').addClass('isVisible');
});

$('#easter_close').on("click", function(){
    $('#hidden_section').removeClass('isVisible');
});