<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Terms of Service - Iscicle</title>
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
    By accessing or using Iscicle, you agree to be bound by these Terms of Service.
    If you do not agree with any part of the terms, you may not access the platform.
  </p>

  <h5>1. Use of the Platform</h5>
  <p>
    You agree to use Iscicle only for lawful purposes and in a way that does not infringe
    the rights of others or restrict or inhibit anyone else's use of the platform.
  </p>

  <h5>2. User Content</h5>
  <p>
    You are responsible for the content you share. We reserve the right to remove or moderate content
    that violates our Community Guidelines or is otherwise harmful or inappropriate.
  </p>

  <h5>3. Accounts</h5>
  <p>
    You are responsible for maintaining the confidentiality of your account and password.
    You agree to notify us immediately of any unauthorized use of your account.
  </p>

  <h5>4. Changes</h5>
  <p>
    We may modify these Terms at any time. Continued use of the platform after changes implies agreement to the new terms.
  </p>

  <h5>5. Termination</h5>
  <p>
    We reserve the right to suspend or terminate access to the platform at any time, without notice or liability.
  </p>

  <h5>6. Contact</h5>
  <p>
    If you have any questions about these terms, contact us at
    <a href="mailto:support@algonect.com">support@algonect.com</a>.
  </p>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>
