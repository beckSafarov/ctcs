const tabMenu = document.querySelector('.tab');
const infoBtn = document.querySelector('#infoBtn');
const contactBtn = document.querySelector('#contactBtn');
const infoSection = document.querySelector('.info-section');
const contactSection = document.querySelector('.contact-section');

tabMenu.addEventListener('click', (e) => {
  e.preventDefault();
  if (
    e.target.className.includes('tab-btn') &&
    !e.target.className.includes('active')
  ) {
    infoBtn.classList.toggle('active');
    contactBtn.classList.toggle('active');
    contactSection.classList.toggle('hidden');
    infoSection.classList.toggle('hidden');
  }
});
