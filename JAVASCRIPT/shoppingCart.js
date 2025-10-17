let cart = [
    { item: "Chocolate", price: 50 },
    { item: "Notebook", price: 80 },
    { item: "Pen", price: 20 }
];

let total = 0;

for (let product of cart)
     {
    console.log(`Item: ${product.item}, Price: ₹${product.price}`);
    total += product.price;
}

console.log(`Total Cart Value: ₹${total}`);
