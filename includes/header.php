<div class="headerContainer">
  <div class="searchContainer" style="visibility: <?php echo (isset($_POST["q"])) ? 'visible' : 'hidden'; ?>">
    <div class="searchResultsPositioner" style="visibility: <?php echo (isset($_POST["q"])) ? 'visible' : 'hidden'; ?>">
      <div class="searchResultsContainer">
        <table>
          <?php
          include("includes/search.php");
          ?>
        </table>
      </div>
    </div>
    <form method="POST" class="searchForm">
      <div class="searchInput">
        <input required minlength="3" type="text" id="searchInput" name="q" value="<?php echo (isset($_POST["q"])) ? $_POST["q"] : ''; ?>">
      </div>
      <button type="submit" class="searchIconInside">
        <img alt="Search" src="images/search.png" />
      </button>
    </form>
    <button id="closeBtn">
      <img alt="Close Search" src="images/close.svg" />
    </button>
  </div>
  <header>
    <div class="topBar">
      <div>
        <a href="index.php">
          <img alt="Logo" src="images/logo.png" />
        </a>
      </div>
      <div class="mobileIcons">
        <div class="searchIcon">
          <img alt="Search" src="images/search.png" />
        </div>
        <div class="burger">
          <img alt="Menu" src="images/menu.png" />
        </div>
      </div>
    </div>
    <div>
      <nav class="mainNav">
        <menu>
          <li><a class="navItem" href="index.php">Home</a></li>
          <li><a class="navItem" href="courses.php">Courses</a></li>
          <li><a class="navItem" href="facilities.php">Facilities</a></li>
          <li><a class="navItem" href="resources.php">Resources</a></li>
          <li><a class="navItem" href="forStaff.php">For Staff</a></li>
          <li><a class="navItem" href="forStudents.php">For Students</a></li>
          <li><a class="navItem" href="business.php">Business</a></li>
          <li><a class="navItem" href="contactUs.php">Contact Us</a></li>
        </menu>
        <div class="searchIcon desktopIcon">
          <img alt="Search" src="images/search.png" />
        </div>
      </nav>
    </div>
  </header>
  <script src="js/searchButton.js"></script>
</div>