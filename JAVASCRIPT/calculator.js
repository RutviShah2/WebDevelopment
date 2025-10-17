let num1 = 15;
let num2 = 5;
let operator = '+';
let result;

if (operator === '+')
     {
    result = num1 + num2;
} 
else if (operator === '-')
     {
    result = num1 - num2;
} 
else if (operator === '*') 
{
    result = num1 * num2;
} 
else if (operator === '/') 
{
    result = num1 / num2;
} 
else 
{
    result = "Invalid operator!";
}

console.log(`${num1} ${operator} ${num2} = ${result}`);
