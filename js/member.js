const sizeHandlerIcon = document.querySelector('#expand');
const publications = document.querySelector('#publications');
let expandPublications = false;

// expand or collapse extra info in member.html
sizeHandlerIcon.addEventListener('click', (e) => {
  e.preventDefault();
  console.log(device);
  if (!expandPublications) {
    publications.style.overflow = 'visible';
    publications.style.height = 'max-content';
    expandPublications = true;
  } else {
    publications.style.height = device === 'mobile' ? '100px' : '598px';
    publications.style.overflow = 'hidden';
    expandPublications = false;
  }

  sizeHandlerIcon.className =
    sizeHandlerIcon.classList[1] === 'fa-chevron-down'
      ? 'fas fa-chevron-up'
      : 'fas fa-chevron-down';
});
