const toggle = document.querySelector('#toggle-icon');
const navigation = document.querySelector('.navigation');
const menuItems = document.querySelector('.menu-items-ul');
const homeLink = document.querySelector('#homeLink');
const teamMembersLink = document.querySelector('#teamMembersLink');
const activitiesLink = document.querySelector('#activitiesLink');
const contactLink = document.querySelector('#contactLink');
const navbar = document.querySelector('#navbar');
const currentPage = location.href;
let device = 'desktop';
let prevScrollpos = window.pageYOffset;

document.addEventListener('DOMContentLoaded', () => {
  if (screen.availWidth <= 500) {
    device = 'mobile';
  } else if (screen.availWidth <= 1068) {
    device = 'tablet';
  }

  // correcting the nav links for the home page
  if (!currentPage.includes('about.php') && !currentPage.includes('members/')) {
    homeLink.href = '';
    teamMembersLink.href = '#team-members';
    contactLink.href = 'contact.php';
  }

  console.log(menuItems.children);
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
  if (prevScrollpos > currentScrollPos) {
    document.getElementById('navbar').style.top = '0';
  } else {
    document.getElementById('navbar').style.top = '-100px';
  }
  prevScrollpos = currentScrollPos;
};

const closeToggleMenu = () => {
  toggle.className = 'fas fa-bars fa-3x';
  navigation.classList.remove('active');
};
