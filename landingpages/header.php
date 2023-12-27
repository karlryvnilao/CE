<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
    /* Add your custom styles here */
    body {
      padding-top: 56px; /* Adjust the padding-top to accommodate the fixed navbar */
    }
    img.d-block.w-100 {
    height: 800px;
    }
  </style>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <!-- Logo -->
    <a class="navbar-brand" href="#">
      <img src="assets/images/logo-inverse.png" alt="Your Logo" height="30" class="d-inline-block align-top">
    </a>

    <!-- Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links (left side) -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FAQ</a>
        </li>
      </ul>
    </div>

    <!-- Login button (right side) -->
    <div class="navbar-collapse flex-grow-0">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link btn btn-outline-primary" href="login.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
