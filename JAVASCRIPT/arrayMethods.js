let numbers = [1, 4, 9, 16, 25];

// map() – create a new array with modified values
let squared = numbers.map(num => num * 2);
console.log("Doubled:", squared);

// filter() – select only certain values
let even = numbers.filter(num => num % 2 === 0);
console.log("Even numbers:", even);

// reduce() – calculate a single value
let sum = numbers.reduce((total, num) => total + num, 0);
console.log("Sum:", sum);

// forEach() – loop through array
numbers.forEach(num => console.log("Number:", num));

// find() – get first match
let found = numbers.find(num => num > 10);
console.log("First number > 10:", found);

// sort() – sort array
let fruits = ["banana", "apple", "orange"];
fruits.sort();
console.log("Sorted fruits:", fruits);
