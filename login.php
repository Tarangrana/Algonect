<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - AlgoNect</title>
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
      max-width: 400px;
      padding: 30px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.05);
    }
  </style>
</head>
<body>
<div class="auth-container">
  <div class="auth-box text-center">
    <h3 class="mb-4 text-primary">Login to AlgoNect</h3>
    <form method="POST" action="#">
      <div class="mb-3 text-start">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" placeholder="Enter email" name="email">
      </div>
      <div class="mb-3 text-start">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" placeholder="Enter password" name="password">
      </div>
      <button type="submit" class="btn btn-primary w-100">Log In</button>
    </form>
    <div class="mt-3">
      <small>Don't have an account? <a href="signup.php">Sign Up</a></small>
    </div>
  </div>
</div>
</body>
</html>
