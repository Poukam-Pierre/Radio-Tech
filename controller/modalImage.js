
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var modalImg = document.getElementById("img01");
function modalImages(event){
    modal.style.display = "block";
    modalImg.src = event.target.src;
  }
  // Get the <span> element that closes the modal
var span = document.getElementsByClassName("closes")[0];
// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
  }