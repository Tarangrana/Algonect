<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up - AlgoNect</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .auth-container {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #f0f2f5;
    }
    .auth-box {
      width: 100%;
      max-width: 500px;
      padding: 30px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.05);
    }
  </style>
</head>
<body>

<?php
require_once 'includes\db_connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Get form data
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $confirm  = $_POST['confirm_password'];
    $monthMap = [
        "Jan" => "01", "Feb" => "02", "Mar" => "03", "Apr" => "04",
        "May" => "05", "Jun" => "06", "Jul" => "07", "Aug" => "08",
        "Sep" => "09", "Oct" => "10", "Nov" => "11", "Dec" => "12"
    ];
    $month    = $monthMap[$_POST['birth_month']];
    $birth    = $_POST['birth_year'] . '-' . $month . '-' . str_pad($_POST['birth_day'], 2, "0", STR_PAD_LEFT);
    $gender   = $_POST['gender'];

    // Password validation: Match check
    if ($password !== $confirm) {
        echo "<script>alert('Passwords do not match');</script>";
    } else {
      // Insert user into database if passwords match
        // Check if email is valid and belongs to algomau.ca domain
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users_info (name, email, password, birthdate, gender) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $hashedPassword, $birth, $gender);

        if ($stmt->execute()) {
            echo "<script>alert('Signup successful!'); window.location.href='login.php';</script>";
        } else {
            echo "<script>alert('Signup failed. Email may already be registered.');</script>";
        }

        $stmt->close();
    }
}
?>

<div class="auth-container">
  <div class="auth-box">
    <h3 class="mb-4 text-center text-primary">Create an AlgoNect Account</h3>
    <form method="POST" action="#">
      <div class="mb-3">
        <label class="form-label">Full Name</label>
        <input type="text" class="form-control" placeholder="Enter full name" name="name" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
<span id="emailWarning" class="text-danger small d-none">Only @algomau.ca emails are allowed.</span>
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Create password" required>
      </div>

      <div class="mb-3">
      <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Re-type password" required>
      <span id="passwordWarning" class="text-danger small d-none">Passwords do not match.</span>
      </div>

      <div class="mb-3">
        <label class="form-label">Birthdate</label>
        <div class="row">
          <div class="col">
            <select class="form-select" name="birth_month" required>
              <option value="">Month</option>
              <option>Jan</option><option>Feb</option><option>Mar</option>
              <option>Apr</option><option>May</option><option>Jun</option>
              <option>Jul</option><option>Aug</option><option>Sep</option>
              <option>Oct</option><option>Nov</option><option>Dec</option>
            </select>
          </div>
          <div class="col">
            <select class="form-select" name="birth_day" required>
              <option value="">Day</option>
              <?php for ($d = 1; $d <= 31; $d++) echo "<option>$d</option>"; ?>
            </select>
          </div>
          <div class="col">
            <select class="form-select" name="birth_year" required>
              <option value="">Year</option>
              <?php for ($y = date("Y"); $y >= 1900; $y--) echo "<option>$y</option>"; ?>
            </select>
          </div>
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Gender</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" value="Female" required>
          <label class="form-check-label">Female</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" value="Male" required>
          <label class="form-check-label">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" value="Custom" required>
          <label class="form-check-label">Custom</label>
        </div>
      </div>

      <button type="submit" class="btn btn-primary w-100 mt-3">Sign Up</button>
    </form>

    <div class="mt-3 text-center">
      <small>Already have an account? <a href="login.php">Log In</a></small>
    </div>
  </div>
</div>
<script src="js/email-password-validate.js"></script>

</body>
</html>
