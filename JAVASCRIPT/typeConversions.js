let numStr = "123";
let num = Number(numStr);  // String → Number
console.log(typeof num, num);

let boolVal = Boolean(0);  // 0 → false, nonzero → true
console.log(boolVal);

let strVal = String(45);   // Number → String
console.log(typeof strVal, strVal);

// Implicit type conversion
console.log("5" + 3); // "53" (string)
console.log("5" - 3); // 2 (number)
console.log(true + 2); // 3 (true = 1)
