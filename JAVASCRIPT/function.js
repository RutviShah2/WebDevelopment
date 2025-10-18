// Simple Function
function greet() {
  console.log("Hello Rutvii! Have a wonderful day!");
}

greet();

// Function with parameters
function add(a, b) {
  return a + b;
}

let sum = add(10, 20);
console.log("Sum:", sum);

// Function with default parameter
function introduce(name = "Guest") {
  console.log("Welcome,", name);
}

introduce("Rutvii");
introduce();
