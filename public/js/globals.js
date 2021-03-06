const toggle = document.querySelector('#toggle-icon');
const navigation = document.querySelector('.navigation');
const menuItems = document.querySelector('.menu-items-ul');
const toggleNavItems = document.querySelector('.toggleNavItems');
const homeLink = document.querySelector('#homeLink');
const activitiesLink = document.querySelector('#activitiesLink');
const contactLink = document.querySelector('#contactLink');
const navbar = document.querySelector('#navbar');
const logoImg = document.querySelector('#logo_img');
const currentPage = location.href;
const navMenuItems = menuItems.children;
let device = 'desktop';
let prevScrollpos = window.pageYOffset;
let menuLinkNames = [];

document.addEventListener('DOMContentLoaded', () => {
  if (screen.availWidth <= 500) {
    device = 'mobile';
  } else if (screen.availWidth <= 1068) {
    device = 'tablet';
  }

  for (let child of Object.keys(navMenuItems)) {
    let childElement = navMenuItems[child];
    let linkName = childElement.children[0].name;
    if (linkName && currentPage.includes(linkName)) {
      childElement.children[0].classList.add('active-navLink');
    }
  }
});

toggle.addEventListener('click', (e) => {
  e.preventDefault();

  toggle.className =
    toggle.classList[1] === 'fa-bars'
      ? 'fas fa-times fa-3x'
      : 'fas fa-bars fa-3x';

  navigation.classList.toggle('active');
});

window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;

  document.getElementById('navbar').style.top =
    prevScrollpos > currentScrollPos ? '0' : '-100px';

  prevScrollpos = currentScrollPos;
};

const closeToggleMenu = () => {
  toggle.className = 'fas fa-bars fa-3x';
  navigation.classList.remove('active');
};
