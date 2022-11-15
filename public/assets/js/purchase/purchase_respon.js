const content_wrap = document.getElementById('purchase-page-payment-method-about-wrap-respon');
const content_wr = document.querySelector('.purchase_page_payment_popDown');
const content_popUp = document.getElementById('purchase-page-payment-method-title')
const btn_close = document.getElementById('purchase-page-payment-method-hidden-close');
content_wrap.addEventListener('click', () => {
    content_wr.classList.toggle('purchase_page_payment_popUp')
    content_wrap.style.display = "none";
})
btn_close.addEventListener('click', () => {
    content_wr.classList.toggle('purchase_page_payment_popUp')
    content_wrap.style.display = "none";
})
content_popUp.addEventListener('click', () => {
    content_wrap.style.display = "block";
    content_wr.classList.toggle('purchase_page_payment_popUp')
})