(function () {
  let searchContainer = document.querySelector(".searchContainer");
  let [searchButtonMobile, searchButtonDesktop] = document.querySelectorAll(".searchIcon");
  let closeBtn = document.getElementById("closeBtn");
  let searchResults = document.querySelector(".searchResultsPositioner");

  function searchButtonEventListener(btn) {
    btn.addEventListener("click", () => {
      searchContainer.style.visibility = "visible";
    })
  }

  closeBtn.addEventListener("click", () => {
    searchContainer.style.visibility = "";
    searchResults.style.visibility = "";
  })
  searchButtonEventListener(searchButtonMobile);
  searchButtonEventListener(searchButtonDesktop);
})();