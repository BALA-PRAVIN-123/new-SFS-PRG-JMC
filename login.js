function login (){
const username = document.getElementById("userid").value
const password = document.getElementById("password").value
if(username==="pravin" & password==="123"){
    alert("Welcome admin")
    window.document.location.href="index.html";
}
else{
    alert("Wrong user name (or) password please try again")
}
}
