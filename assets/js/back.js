
  const backLinks = document.querySelectorAll(".header.back");
  for (let i = 0; i < backLinks.length; i++) {
    backLinks[i].addEventListener("click", function(e) {
      e.preventDefault();
      window.history.back();
    });
  }

  