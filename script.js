//  // Add event listener for the dropdown item clicks
//  $('.color-item').click(function() {
//     // Handle the click for สีทั้งหมด
//     console.log('Show สีแดง, น้ำเงิน, เขียว');
// });

// $('.price-item').click(function() {
//     // Handle the click for ราคา
//     console.log('Show มากไปน้อย, น้อยไปมาก');
// });

document.getElementById('addToCartBtn').addEventListener('click', function() {
    var cartQuantity = document.getElementById('cartQuantity');
    var currentQuantity = parseInt(cartQuantity.textContent);
    
    // Increment the quantity by 1
    cartQuantity.textContent = currentQuantity + 1;
  });