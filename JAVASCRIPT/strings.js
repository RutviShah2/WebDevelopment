let message = " Hello JavaScript World ";

// length of string
console.log(message.length);

// convert case
console.log(message.toUpperCase());
console.log(message.toLowerCase());

// trim spaces
console.log(message.trim());

// substring
console.log(message.substring(6, 16));

// split into array
let words = message.trim().split(" ");
console.log(words);

// includes()
console.log(message.includes("JavaScript")); // true

// replace()
let newMsg = message.replace("JavaScript", "Rutvii");
console.log(newMsg);
