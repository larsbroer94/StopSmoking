//$("nav a[href^='#']").on('click', function(e) {
$("a[href^='#']").on('click', function(e) {

    // prevent default anchor click behavior
    e.preventDefault();

    // store hash
    var hash = this.hash;
    var offset = 0;

    if(screen.width < 1000)
        offset = 75;

    if(hash == '#home')
        offset = 0;

    // animate
    $('html, body').animate({
        scrollTop: $(hash).offset().top - offset
    }, 600, function(){

        // when done, add hash to url
        // (default click behaviour)
        window.location.hash = hash;
    });

});


$(".nav a").on("click", function(){
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
});


var count=4;
var counter=setInterval(timer, 1000); //1000 will  run it every 1 second

function timer()
{
    count=count-1;
    if (count <= 0)
    {
        clearInterval(counter);
        count=4;
        return;
    }

    document.getElementById("timer").innerHTML=count; // watch for spelling
}