<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: user.php");
  }
?>
<?php include_once("header.php");?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Realtime Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data">
        <div class="error-txt"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First Name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last Name" required>
          </div>
        </div> 
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password"required >
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" required>
        </div>
        <div class="field button">
          <input type="submit" value="Continue to Chat">
        </div>
        <div class="link">Already signed up? <a href="login.php">Login now</a></div>
      
      </form>
    </section>
  </div>
  
  <script src="js/pass_show_hide.js"></script>
  <script src="js/signup.js"></script>
</body>
</html>