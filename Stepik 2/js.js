

let btnElement=document.querySelector('.btn');
let resultElement=document.querySelector('.result');
let FirstNameElement=document.querySelector('[name=FirstName]')
let SecondNameElement=document.querySelector('[name=SecondName]')

btnElement.addEventListener("click", function(){
    resultElement.textContent = `Здравствуйте, ${FirstNameElement} ${SecondNameElement}!`
})

