const toggle = document.querySelector('#toggle-icon');
const navigation = document.querySelector('.navigation');
const backgroundImg = document.querySelector('.background-img');
const homeLink = document.querySelector('#homeLink');
const aboutUsLink = document.querySelector('#aboutUsLink');
const teamMembersLink = document.querySelector('#teamMembersLink');
const activitiesLink = document.querySelector('#activitiesLink');
const coursesLink = document.querySelector('#coursesLink');
const contactLink = document.querySelector('#contactLink');
const video = document.querySelector('#video');
let device = 'desktop';

document.addEventListener('DOMContentLoaded', () => {
  if (screen.availWidth <= 500) {
    device = 'mobile';
  } else if (screen.availWidth <= 1068) {
    device = 'tablet';
  }

  // better iframe size per device
  if (device === 'tablet') {
    video.style.width = '600px';
    video.style.height = '430px';
  } else if (device === 'mobile') {
    video.style.width = '300px';
    video.style.height = '215px';
  }

  // correcting the nav links for the home page
  if (!location.href.includes('about') && !location.href.includes('members')) {
    homeLink.href = '';
    aboutUsLink.href = '#about';
    teamMembersLink.href = '#team-members';
    activitiesLink.href = '#about';
    coursesLink.href = '#about';
    contactLink.href = '#contact';
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

const closeToggleMenu = () => {
  toggle.className = 'fas fa-bars fa-3x';
  navigation.classList.remove('active');
};

const memberPage = (member) => {
  location.href = `${ROOT_URL}/members/${member}.php`;
};
