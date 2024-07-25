document.getElementById("read-more-btn").addEventListener("click", function() {
  var description = document.getElementById("description");
  if (description.classList.contains("full-description")) {
      description.classList.remove("full-description");
      this.textContent = "Read More";
  } else {
      description.classList.add("full-description");
      this.textContent = "Read Less";
  }
});


function toggleLike(likeBtn) {
  const likeCountElement = likeBtn.querySelector('.like-count');
  const likeIcon = likeBtn.querySelector('.fa-heart');
  const currentLikes = parseInt(likeCountElement.textContent);

  if (likeBtn.classList.contains('liked')) {
    likeCountElement.textContent = currentLikes - 1;
    likeIcon.style.color = '#D1D0CF';
  } else {
    likeCountElement.textContent = currentLikes + 1;
    
    likeIcon.style.color = 'red'; // Set the color to red
  }

  likeBtn.classList.toggle('liked');
}