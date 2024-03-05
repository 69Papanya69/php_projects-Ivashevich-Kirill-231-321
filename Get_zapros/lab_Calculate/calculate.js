const buttons = document.querySelectorAll('.value');
const input = document.querySelector('.input');

handleClick = (evt) => {
    evt.preventDefault()
    const data = evt.target.innerText;
    let currentValue = input.value;
    let updatedValue = currentValue+data;
    input.value = updatedValue;
}

buttons.forEach((element) => {
    console.log(element)
    element.addEventListener('click', handleClick)
})
