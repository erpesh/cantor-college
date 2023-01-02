(function () {
  let setMenu = function () {
    // variables
    let burgerMenu = document.querySelector(".burger");
    let navBar = document.querySelector("nav");
    let navBarStatus = false;
    if (navBar.style.left === "") {
      burgerMenu.addEventListener("click", () => {
        if (navBarStatus) {
          navBarStatus = false;
          navBar.removeAttribute("style");
		  burgerMenu.setAttribute("class", "burger");
        } else {
          navBarStatus = true;
          navBar.style.left = "0px";
          burgerMenu.setAttribute("class", "burger changeBurger");
        }
      });
    } else {
      navBarStatus = false;
      navBar.removeAttribute("style");
    }
  };
  setMenu();
  // resize
  window.addEventListener("resize", () => setMenu());

  function highlightActivePage(){
    document.querySelectorAll("nav > menu > li > a").forEach(item => {
      const path = document.location.pathname.split("/");
      const fileName = path[path.length - 1];
      console.log(fileName)
      if (!!fileName && item.getAttribute("href").includes(fileName)){
          item.setAttribute("class", "activeNavItem");
      }
  });
  }
  highlightActivePage();

})();
