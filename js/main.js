async function sendForm(form){
    let response=await fetch("php/autorizationProcessor.php", {
        method:"POST",
        body:new FormData(form),
    });
    let result = await response.text();
    if (result == "ok") {
        alert("Добро пожаловать!");
        location.href ="/lk";
        // location.href ="php/lk.php";
    } else {
        info.innerText = "Логин неверный";
    }
}