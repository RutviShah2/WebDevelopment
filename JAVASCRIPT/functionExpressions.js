// Function expression stored in a variable
const multiply = function (x, y) {
  return x * y;
};

console.log("Product:", multiply(5, 4));

// Anonymous function example
const sayBye = function () {
  console.log("Goodbye, Rutvii!");
};

sayBye();

// Function expression with condition
const isEven = function (num) {
  return num % 2 === 0;
};

console.log("Is 8 even?", isEven(8));
console.log("Is 7 even?", isEven(7));
