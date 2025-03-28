<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up - AlgoNect</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
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
        <input type="email" class="form-control" placeholder="Enter email" name="email" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" placeholder="Create password" name="password" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Confirm Password</label>
        <input type="password" class="form-control" placeholder="Re-type password" name="confirm_password" required>
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
</body>
</html>
