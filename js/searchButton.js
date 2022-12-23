(function () {
  let searchContainer = document.querySelector(".searchContainer");
  let [searchButtonMobile, searchButtonDesktop] = document.querySelectorAll(".searchIcon");
  let closeBtn = document.getElementById("closeBtn");
  let searchResults = document.querySelector(".searchResultsPositioner");
  let searchInput = document.getElementById("searchInput");

  function searchButtonEventListener(btn) {
    btn.addEventListener("click", () => {
      searchContainer.style.visibility = "visible";
    })
  }

  closeBtn.addEventListener("click", () => {
    searchContainer.style.visibility = "";
    searchResults.style.visibility = "hidden";
    searchInput.value = "";
  })
  searchButtonEventListener(searchButtonMobile);
  searchButtonEventListener(searchButtonDesktop);
})();