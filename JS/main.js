const popUp = document.querySelector('.popup');
const openPopUp = document.querySelectorAll('[data-acao]');
const closePopUp = document.querySelector('.cancelar');


openPopUp.forEach((element) => {
    element.addEventListener('click', () => {
        popUp.style.display = 'flex';
    });
});

closePopUp.addEventListener('click', () => {
    popUp.style.display = 'none';
});