

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
resultElement = document.querySelector(".result"); //получаем элемент с классом result
radioButtons = document.querySelectorAll('[name="contact"]'); //получаем список всех checkbox элементов
let selectedContactValues = []; //массив для хранения выбранных checkbox


radioButtons.forEach(element => {                   //для каждого элемента из списка элементов checkbox
    element.addEventListener("change", function(){  //при изменении элемента
        if(element.checked){                        //если checkbox-кнопка выбрана
            selectedContactValues.push(element.value);   //добавляем значение в массив выбранных
        } else {                                         //иначе удаляем из массива выбранных
            selectedContactValues.splice(selectedContactValues.indexOf(element.value),1)
        }

        if (selectedContactValues.length != 0) { //если массив не пустой (т.е. длина массива  не равна 0)
            resultElement.textContent = selectedContactValues.join(", "); //записываем значения в resultElement
        } else {
            resultElement.textContent = "ничего не выбрано." //иначе записываем в resultElement, что ничего не выбрано
        }
    });
});

const contactChecked = { // объект
    email: false, // ключ "email" - значение false
    phone: false, // ключ "phone" - значение false
    mail: false,  // ключ "mail" - значение false
};
const btn = document.querySelector("#btn");  //элемент btn
const checkboxElements = document.querySelectorAll('[name="contact"]'); //элементы checkbox


btn.addEventListener("click", function(){ //по клику на кнопку
    checkboxElements.forEach(element => {    //для каждого елемента checkbox
        contactChecked[element.value] = element.checked;  
//в объект contactChecked по ключу element.value записываем значение checked
    })
    console.log(contactChecked);                    //выведем в консоль объект
});

const btn = document.querySelector("#btn");  //элемент btn
const radioElements = document.querySelectorAll('[name="goods"]'); //элементы radio

const choiceGood = { //объект для характеристик выбранного товара
    value: "",
    price: 0,
    size: "",
};

btn.addEventListener("click", function() { //по клику на кнопку
    radioElements.forEach(element => {     //проверяем каждый элемент radio
        if (element.checked) {             //если элемент выбран
            choiceGood.value = element.value;                   //записываем значение value
            choiceGood.price = parseInt(element.dataset.price); //записываем значение из dataset price (преобразуя в целое число)
            choiceGood.size = element.dataset.size;             //записываем значение из dataset size
        }
    })
    console.log(choiceGood);  //выводим в консоль объект
});