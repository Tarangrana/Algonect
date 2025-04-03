<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Terms of Service - AlgoNect</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f8f9fa;
      color: #212529;
    }

    .terms-section {
      max-width: 900px;
      margin: 0 auto;
      padding: 60px 20px;
    }

    h1, h5 {
      font-weight: 700;
      margin-top: 2rem;
    }

    p {
      font-size: 1rem;
      line-height: 1.7;
    }
  </style>
</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="terms-section">
  <h1>Terms of Service</h1>
  <p>Last updated: <?= date("F j, Y") ?></p>

  <p>
    By accessing or using AlgoNect, you agree to be bound by these Terms of Service.
    If you do not agree with any part of these terms, you may not use the platform.
  </p>

  <h5>1. Use of the Platform</h5>
  <p>
    You agree to use AlgoNect only for academic, social, or informational purposes related to student life.
    You must not engage in any activity that harms the community or violates local laws.
  </p>

  <h5>2. User Content</h5>
  <p>
    You are solely responsible for the posts, comments, and images you upload. Content must follow our <a href="community.php">Community Guidelines</a>.
    We reserve the right to remove content that is abusive, inappropriate, or disruptive.
  </p>

  <h5>3. Accounts</h5>
  <p>
    You are responsible for maintaining the confidentiality of your AlgoNect login credentials.
    If you suspect unauthorized activity on your account, notify us immediately.
  </p>

  <h5>4. Modifications to Terms</h5>
  <p>
    AlgoNect may update these Terms of Service from time to time.
    We will notify users of major changes. Your continued use after such updates constitutes your agreement to the revised terms.
  </p>

  <h5>5. Suspension or Termination</h5>
  <p>
    We may suspend or permanently terminate accounts that repeatedly violate these terms or our guidelines.
    This may occur with or without prior notice depending on the severity of the violation.
  </p>

  <h5>6. Contact Us</h5>
  <p>
    For questions, feedback, or support regarding these terms, contact us at
    <a href="mailto:support@algonect.com">support@algonect.com</a>.
  </p>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>
