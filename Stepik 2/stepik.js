function myFunction(login) {         
    //напишите ниже ваш код
    if (login === "admin"){
        console.log("Администрирование, Операции, Статистика, Роли.")
    }
    else if (login === "support"){
        console.log("Операции, Статистика.");
    }
    else if (login === "user"){
        console.log("Статистика.");
    }
    else{
        console.log("Неверный логин");
    }
    alert(login);
}
function myFunction2(check) {
    if(check >= 750)
    {console.log(parseInt(check*0.95))}
else{console.log(parseInt(check))}
};


function myFunction3(n=3, s=50) {    
    let totalprice=0;
    for (let i=0; i<=n; i++) {
      totalprice = s*i;
  }
  console.log(totalprice)
  }