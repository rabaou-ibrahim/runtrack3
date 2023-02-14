$(document).ready(function(){

    $("#button1").click(function(){
        $("body").append("<p>Les logiciels et les cathédrales, c'est un peu la même chose - d'abord on les construit, ensuite on prie.<p>");
    });

    $("#button2").click(function(){
        $("p").remove();
    })
})