// Tăng giảm số lượng sản phẩm đặt
const increaseQuantity = document.getElementById('increase-quantity');
const decreaseQuantity = document.getElementById('decrease-quantity');
const quantityNumber = document.getElementById('quantity-number');

increaseQuantity.addEventListener('click', ()=>{
    quantityNumber.value = parseInt(quantityNumber.value) + 1;
});

decreaseQuantity.addEventListener('click', ()=>{
    if(quantityNumber.value > 1) {
        quantityNumber.value = parseInt(quantityNumber.value) - 1;
    }
});

// Thiết lập xem thêm thông tin và chính sách đổi trả, giao hàng
document.querySelectorAll('.accordion-header').forEach(button => {
    button.addEventListener('click', () => {
        const content = button.nextElementSibling;
        
        // Mở hoặc đóng accordion được bấm
        const isOpen = content.style.maxHeight;
        if (isOpen) {
            content.style.maxHeight = null;
            content.style.opacity = 0;
        } else {
            content.style.maxHeight = content.scrollHeight + 'px';
            content.style.opacity = 1;
    }
});
});

// Thiết lập viền khung size khi chọn
const sizeM = document.getElementById('size_M');
const sizeL = document.getElementById('size_L');
const sizeXL = document.getElementById('size_XL');

sizeM.addEventListener('click', ()=> {
    sizeM.style.backgroundColor = 'black';
    sizeM.style.color = 'white';
    sizeL.style.backgroundColor = 'white';
    sizeL.style.color = '#333';
    sizeXL.style.backgroundColor = 'white';
    sizeXL.style.color = '#333';
});
sizeL.addEventListener('click', ()=> {
    sizeL.style.backgroundColor = 'black';
    sizeL.style.color = 'white';
    sizeM.style.backgroundColor = 'white';
    sizeM.style.color = '#333';
    sizeXL.style.backgroundColor = 'white';
    sizeXL.style.color = '#333';
}); 
sizeXL.addEventListener('click', ()=> {
    sizeXL.style.backgroundColor = 'black';
    sizeXL.style.color = 'white';
    sizeL.style.backgroundColor = 'white';
    sizeL.style.color = '#333';
    sizeM.style.backgroundColor = 'white';
    sizeM.style.color = '#333';
});



