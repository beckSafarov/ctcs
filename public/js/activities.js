// Get the modal
const modal = document.getElementById('modal');
const modalImg = document.getElementById('modalImage');
const captionText = document.getElementById('caption');

const modalImgClicked = (imgName, description = 'Sample Image') => {
  modal.style.display = 'block';
  modalImg.src = `${ROOT_URL}/public/img/${imgName}`;
  captionText.innerHTML = description;
};

modal.addEventListener('click', (e) => {
  if (e.target.id !== 'modalImage' && e.target.id !== 'caption') {
    modal.style.display = 'none';
  }
});
