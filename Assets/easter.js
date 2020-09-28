// Display or Hide the easter egg
$('#easter_open').on("click", function(){
    $('#hidden_section').removeClass('isHidden');
});

$('#easter_close').on("click", function(){
    $('#hidden_section').addClass('isHidden');
});