const backgroundImg = document.querySelector('.background-img');
const video = document.querySelector('#video');
const homeLinkItem = document.querySelector('#homeLinkItem');

document.addEventListener('DOMContentLoaded', () => {});

const memberPage = (memberId) => {
  location.href = `${ROOT_URL}/member.php?member=${memberId}`;
};

document.getElementById('aboutBtn').addEventListener('click', (e) => {
  e.preventDefault();
  location.href = `${ABOUT_PATH}`;
});
