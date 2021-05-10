const backgroundImg = document.querySelector('.background-img');
const video = document.querySelector('#video');
const homeLinkItem = document.querySelector('#homeLinkItem');

document.addEventListener('DOMContentLoaded', () => {
  // better iframe size per device
  // if (device === 'tablet') {
  //   video.style.width = '600px';
  //   video.style.height = '430px';
  // } else if (device === 'mobile') {
  //   video.style.width = '300px';
  //   video.style.height = '215px';
  // }

  homeLinkItem.classList.add('hidden');
});

const memberPage = (memberId) => {
  location.href = `${ROOT_URL}/member.php?member=${memberId}`;
};

document.getElementById('aboutBtn').addEventListener('click', (e) => {
  e.preventDefault();
  location.href = `${ABOUT_PATH}`;
});
