// Basic arrow function
const greetArrow = () => {
  console.log("Hey Rutvii, you're doing amazing!");
};

greetArrow();

// Arrow function with parameters
const divide = (a, b) => {
  return a / b;
};

console.log("Division:", divide(10, 2));

// Shorter version for single-line return
const square = n => n * n;

console.log("Square of 6:", square(6));

// Arrow function used in array method
const numbers = [2, 4, 6, 8];
const doubled = numbers.map(num => num * 2);

console.log("Doubled numbers:", doubled);
