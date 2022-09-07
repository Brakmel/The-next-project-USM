/*Esto es de "tutorial.html"*/
/*Palen de tutorial 1*/
function paso1N(){
    document.getElementById('main_1').style.display = 'none';
}
function paso1B(){
    document.getElementById('main_1').style.display = 'block';
}
/*Palen de tutorial 2*/
function paso2N(){
    document.getElementById('main_2').style.display = 'none';
}
function paso2B(){
    document.getElementById('main_2').style.display = 'block';
}
/*Palen de tutorial 3*/
function paso3N(){
    document.getElementById('main_3').style.display = 'none';
}
function paso3B(){
    document.getElementById('main_3').style.display = 'block';
}
/*Palen de tutorial 4*/
function paso4N(){
    document.getElementById('main_4').style.display = 'none';
}
function paso4B(){
    document.getElementById('main_4').style.display = 'block';
}
/*Palen de tutorial 5*/
function paso5N(){
    document.getElementById('main_5').style.display = 'none';
}
function paso5B(){
    document.getElementById('main_5').style.display = 'block';
}
/*Palen de tutorial 6*/
function paso6N(){
    document.getElementById('main_6').style.display = 'none';
}
function paso6B(){
    document.getElementById('main_6').style.display = 'block';
}
/*Palen de tutorial 7*/
function paso7N(){
    document.getElementById('main_7').style.display = 'none';
}
function paso7B(){
    document.getElementById('main_7').style.display = 'block';
}
/*Palen de tutorial 8*/
function paso8N(){
    document.getElementById('main_8').style.display = 'none';
}
function paso8B(){
    document.getElementById('main_8').style.display = 'block';
}
/*Palen de tutorial 9*/
function paso9N(){
    document.getElementById('main_9').style.display = 'none';
}
function paso9B(){
    document.getElementById('main_9').style.display = 'block';
}
/*Palen de tutorial 10*/
function paso10N(){
    document.getElementById('main_10').style.display = 'none';
}
function paso10B(){
    document.getElementById('main_10').style.display = 'block';
}
/*Esto es para el login*/
function login(){
    var user, pass;

    user = document.getElementById("usua").value;
    pass = document.getElementById("contra").value;

    if(user == "USM" && pass == "CV2022soP"){
        window.location= "http://127.0.0.1:5500/htmls/panel.html"
    }
}
