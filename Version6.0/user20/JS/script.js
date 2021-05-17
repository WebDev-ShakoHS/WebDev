function changeText() {
    document.getElementById("textChange").innerHTML = "<ul>Thanks for liking my Webpage</ul>";
}
var space = " ";
var pos = 0;
var msg = "User 19";

function Scroll() {
    document.title = msg.substring(pos, msg.length) + space + msg.substring(0, pos);

    pos++;
    if (pos > msg.length) pos = 0;
    window.setTimeout("Scroll()", 0);
}
Scroll();

function WhichButton(event) {
    alert("You pressed button: " + event.button)
}
function myName() {
    var x = document.getElementById("fname");
    x.value = x.value.toUpperCase();
}
function myClick() {
    document.getElementById("demo").innerHTML = "Hello World";
}
function writeMessage() {
    document.forms[0].mySecondInput.value = document.forms[0].myInput.value;
}
function color(color) {
    document.forms[0].myInput.style.background = color;
}

function myElement(elmnt, clr) {
    elmnt.style.color = clr;
}
calculator__keys 
    display: grid; 
    /* other necessary CSS */
    const calculator = document.querySelector(calculator)
    const keys = calculator.querySelector(calculator__keys)
    
    keys.addEventListener(click, e => {
     if (e.target.matches(button)) {
       // Do something
     }
    })
    const key = e.target
const action = key.dataset.action
if (!action) {
    console.log('number key!')
  }
  if (
    action === 'add' ||
    action === 'subtract' ||
    action === 'multiply' ||
    action === 'divide'
  ) {
    console.log('operator key!')
  }
  if (action === 'decimal') {
    console.log('decimal key!')
  }
  
  if (action === 'clear') {
    console.log('clear key!')
  }
  
  if (action === 'calculate') {
    console.log('equal key!')
  }
  const display = document.querySelector('.calculator__display')

keys.addEventListener('click', e => {
  if (e.target.matches('button')) {
    const key = e.target
    const action = key.dataset.action
    const keyContent = key.textContent
    const displayedNum = display.textContent
    // ...
  }
})
if (!action) {
    if (displayedNum === '0') {
      display.textContent = keyContent
    }
  }
  if (!action) {
    if (displayedNum === '0') {
      display.textContent = keyContent
    } else {
      display.textContent = displayedNum + keyContent
    }
  }
  if (action === 'decimal') {
    display.textContent = displayedNum + '.'
  }
  if (
    action === 'add' ||
    action === 'subtract' ||
    action === 'multiply' ||
    action === 'divide'
  ) {
    key.classList.add('is-depressed')
  }
  keys.addEventListener('click', e => {
    if (e.target.matches('button')) {
      const key = e.target
      // ...
      
      // Remove .is-depressed class from all keys
      Array.from(key.parentNode.children)
        .forEach(k => k.classList.remove('is-depressed'))
    }
  })
  const calculator = document.querySelector('.calculator')
// ...

keys.addEventListener('click', e => {
  if (e.target.matches('button')) {
    // ...
    
    if (
      action === 'add' ||
      action === 'subtract' ||
      action === 'multiply' ||
      action === 'divide'
    ) {
      key.classList.add('is-depressed')
      // Add custom attribute
      calculator.dataset.previousKeyType = 'operator'
    }
  }
})
const previousKeyType = calculator.dataset.previousKeyType

if (!action) {
  if (displayedNum === '0' || previousKeyType === 'operator') {
    display.textContent = keyContent
  } else {
    display.textContent = displayedNum + keyContent
  }
}
if (action === 'calculate') {
    const secondValue = displayedNum
    // ...
  }
  if (
    action === 'add' ||
    action === 'subtract' ||
    action === 'multiply' ||
    action === 'divide'
  ) {
    // ...
    calculator.dataset.firstValue = displayedNum
    calculator.dataset.operator = action
  }
  if (action === 'calculate') {
    const firstValue = calculator.dataset.firstValue
    const operator = calculator.dataset.operator
    const secondValue = displayedNum
    
    display.textContent = calculate(firstValue, operator, secondValue)
  }
  const calculate = (n1, operator, n2) => {
    // Perform calculation and return calculated value
  }
  const calculate = (n1, operator, n2) => {
    let result = ''
    
    if (operator === 'add') {
      result = n1 + n2
    } else if (operator === 'subtract') {
      result = n1 - n2
    } else if (operator === 'multiply') {
      result = n1 * n2
    } else if (operator === 'divide') {
      result = n1 / n2
    }
    
    return result
  }
  const calculate = (n1, operator, n2) => {
    let result = ''
    
    if (operator === 'add') {
      result = parseFloat(n1) + parseFloat(n2)
    } else if (operator === 'subtract') {
      result = parseFloat(n1) - parseFloat(n2)
    } else if (operator === 'multiply') {
      result = parseFloat(n1) * parseFloat(n2)
    } else if (operator === 'divide') {
      result = parseFloat(n1) / parseFloat(n2)
    }
    
    return result
  }
// Example of how includes work.
const string = 'The hamburgers taste pretty good!'
const hasExclaimation = string.includes('!')
console.log(hasExclaimation) // true
// Do nothing if string has a dot
if (!displayedNum.includes('.')) {
    display.textContent = displayedNum + '.'
  }
  if (!action) {
    // ...
    calculator.dataset.previousKey = 'number'
  }
  
  if (action === 'decimal') {
    // ...
    calculator.dataset.previousKey = 'decimal'
  }
  
  if (action === 'clear') {
    // ...
    calculator.dataset.previousKeyType = 'clear'
  }
  
  if (action === 'calculate') {
   // ...
    calculator.dataset.previousKeyType = 'calculate'
  }  
  