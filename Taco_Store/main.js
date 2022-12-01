const openModal=document.querySelector('.buttonGenR');
const openModalI=document.querySelector('.buttonGenI');
const openModalI2=document.querySelector('.linkI');
const openModalI3=document.querySelector('.linkR');
const modal=document.querySelector('.modalR');
const modalI=document.querySelector('.modalI');

openModal.addEventListener('click',(e)=>{
    e.preventDefault(e);
    modal.classList.add('modal--show');
});

openModalI.addEventListener('click',(e)=>{
    e.preventDefault(e);
    modalI.classList.add('modal--show');
});

openModalI2.addEventListener('click',(e)=>{
    e.preventDefault(e);
    modal.classList.add('modal--show');
});

openModalI3.addEventListener('click',(e)=>{
    e.preventDefault(e);
    modal.classList.add('modal--show');
});