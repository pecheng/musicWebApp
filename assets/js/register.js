$(document).ready(function(){
    $("#registerForm").hide();
    $("#hideLogin").click(function(){
        $("#registerForm").show();
        $("#loginForm").hide();
    });

    $("#hideRegister").click(function(){
        $("#loginForm").show();
        $("#registerForm").hide();
    });

   
    
});