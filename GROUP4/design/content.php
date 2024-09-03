<?php
if(isset($_SESSION['username'])){
  header("location: index.php");
}


// Check for error message in session
$errorMessage = isset($_SESSION['error']) ? $_SESSION['error'] : '';
unset($_SESSION['error']); // Clear error message after displaying it
?>

<section>
  <div class="container-fluid vh-100">
    <div class="row h-100">
      <!-- Left Side: Image, Logo, and Text -->
      <div class="col-md-7 d-flex flex-column justify-content-center align-items-start text-white"
      style="background: linear-gradient(to right, rgba(255,255,255,0.3), rgba(211,211,211,0.3), rgba(135,206,250,0.7)), 
                  url('design/back.jpg') no-repeat left center / cover;">
        <div class="px-5"> 
          <section class="content">         
        </section></p>
        </div>
      </div>

      <!-- Right Side: Login Form -->
      <div class="col-md-5 d-flex flex-column justify-content-center align-items-center" style="background-color: white;">
  <div class="w-75">
    <!-- form wrapper including the logo -->
    <div style="border: 2px solid #ccc; padding: 20px; border-radius: 20px;">
      <div class="text-center mb-4">
        <img src="design/logo.png" alt="Logo" class="mb-4" style="max-width: 150px;">
      </div>
      <h3 class="text-center mb-4" style="color: #333;">SIGN IN</h3>
      <form action="config/data.php" method="POST">
        <div class="mb-3">
          <input type="email" id="email" name="email" class="form-control" placeholder="Username" style="background-color: #f5f5f5; border-color: #ccc; color: #333;" />
        </div>
        <div class="mb-3">
          <input type="password" id="password" name="password" class="form-control" placeholder="Password" style="background-color: #f5f5f5; border-color: #ccc; color: #333;" />
        </div>
        <div class="mb-3 d-flex justify-content-between align-items-center">
          <div>
            <input type="checkbox" id="showPassword" />
            <label for="showPassword" class="ms-2" style="color: #333;">Show password</label>
          </div>
        </div>
        <button type="submit" class="btn btn-success w-100 mb-3">LOGIN</button>
      </form>
    </div>
  </div>
</div>


          <!-- end form -->
        </div>
      </div>
    </div>
  </div>
</section>



