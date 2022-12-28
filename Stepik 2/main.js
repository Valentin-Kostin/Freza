

let btnElement=document.querySelector('.btn');
let resultElement=document.querySelector('.result');
let FirstNameElement=document.querySelector('[name=FirstName]')
let SecondNameElement=document.querySelector('[name=SecondName]')

btnElement.addEventListener("click", function(){
    resultElement.textContent = `Здравствуйте, ${FirstNameElement.value} ${SecondNameElement.value}!`
})

btnElement = document.querySelector(".btn");

resultElement = document.querySelector(".result");

radioButtons = document.querySelectorAll('[name="food"]');


btnElement.addEventListener("click", function(){  //по нажатию на кнопку Отправить
    let selectedFoodValues = 0;                     
    for (const radioButton of radioButtons){      //для каждой checkbox-кнопки из списка checkbox-кнопок
        if(radioButton.checked){                  //если checkbox-кнопка выбрана
            selectedFoodValues = parseInt(selectedFoodValues) + parseInt(radioButton.value);   //добавляем значение в список выбранных
        }
    }
    if (parseInt(selectedFoodValues) != 0) { //если список не пустой (т.е. длина списка  не равна 0)
        resultElement.textContent = selectedFoodValues + ' руб'; //записываем значения в result
    } else {
        resultElement.textContent = "ничего не выбрано." //иначе записываем в result, что ничего не выбрано
    }
});

btnElement = document.querySelector(".btn"); 
resultElement = document.querySelector(".result"); 
checkboxButtons = document.querySelectorAll('[name="sweets"]'); 

btnElement.addEventListener("click", function(){  
    let Total = 0;                 
    for (const checkboxButton of checkboxButtons){      
        if(checkboxButton.checked){                  
            Total += parseInt(checkboxButton.value);
        }
    }
    resultElement.textContent = `${Total} руб`;
});

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
