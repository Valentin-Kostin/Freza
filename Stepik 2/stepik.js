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
  
function getSum(a, b, c){
    return a + b + c;
}

let Sum = getSum(3, 50, 10);
alert(Sum);

btnElement = document.querySelector(".btn"); //получаем элемент с классом btn
resultElement = document.querySelector(".result");//получаем элемент с классом result
inputElement = document.querySelector(".name");//получаем элемент с классом name

btnElement.addEventListener("click", function(){ //по клику на кнопку
    resultElement.textContent = inputElement.value; //записываем в result значение из input
});

btnElement2 = document.querySelector(".btn2"); //получаем элемент с классом btn2
resultElement2 = document.querySelector(".result2");//получаем элемент с классом result2
inputElement2 = document.querySelector(".name2");//получаем элемент с классом name

btnElement2.addEventListener("click", function two (){ //по клику на кнопку
    if (inputElement2.value === ""){              //если значение input пустое
        inputElement2.style.borderColor = "red";  //окрашиваем рамку в красный
        resultElement2.textContent = "";          //очищаем значение в result
    }
    else{                                         //иначе
        inputElement2.style.borderColor = "green";  // красим в зелёный  
        resultElement2.textContent = inputElement2.value; //записываем в result значение из input
    }
});
