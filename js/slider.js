(function () {

  let currentImageIndex = 0;
  let slider = document.querySelector(".slider");
  let images = [];

  for (let i = 0; i < 8; i++){
    let newImage = new Image();
    newImage.src = "images/slider/"+i+".webp";
    images.push(newImage);
  }

  function nextImage(){
    currentImageIndex = currentImageIndex === 7 ? 0 : currentImageIndex + 1;
    slider.innerHTML = "";
    slider.appendChild(images[currentImageIndex]);
  }
  setInterval(() => {
    nextImage();
  }, 4000)
})();