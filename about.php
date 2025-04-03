<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About - AlgoNect</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f8f9fa;
      color: #212529;
    }

    .about-section {
      max-width: 900px;
      margin: 0 auto;
      padding: 60px 20px;
    }

    .about-section h1 {
      font-weight: 700;
      margin-bottom: 20px;
    }

    .about-section h4 {
      margin-top: 40px;
      font-weight: 600;
    }

    .about-section p {
      font-size: 1rem;
      line-height: 1.7;
      margin-bottom: 1.5rem;
    }

    .contact-box {
      background: #fff;
      border: 1px solid #ddd;
      padding: 20px;
      border-radius: 10px;
    }

    a {
      color: #0d6efd;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<?php include 'includes/header.php'; ?>

<div class="about-section">
  <h1>Welcome to AlgoNect</h1>
  <p>
    A platform built exclusively for university students to connect, collaborate, and grow — starting right here at Algoma University.
  </p>
  <p>
    AlgoNect was born out of a desire to make university life more engaging and supportive. As students ourselves, we often found it hard to share experiences, express thoughts, or discover peers going through similar academic challenges and milestones.
    That’s why we created a space where students can post updates, tell stories, share advice, or even rant — all within a friendly, campus-focused community.
  </p>
  <p>
    The name “AlgoNect” comes from combining “Algoma” and “Connect” — reflecting our mission to foster meaningful, student-to-student interaction at Algoma.
    Whether you’re a first-year looking for guidance, or a senior offering tips, AlgoNect is your digital lounge to be heard, seen, and supported.
  </p>
  <p>
    Our platform is designed to be clean, minimal, and distraction-free — a safe space for students to focus on community instead of clutter. With features like post tags, image sharing, profile pages, and leaderboards, AlgoNect brings your university experience to life online.
  </p>

  <h4>About the Creators</h4>
  <p>
    AlgoNect was developed by a group of passionate Algoma University students who wanted to build a network that reflects real student life. We faced the same issues you might be facing: the feeling of being disconnected, the struggle to keep up with studies, or simply the need to speak up without judgment.
    Through our shared experiences, we envisioned AlgoNect as a tool that could make our campus feel smaller, more connected, and more empowering.
  </p>
  <p>
    The project was built using open-source technologies like PHP, MySQL, Bootstrap, and JavaScript. It’s a beginner-friendly but feature-complete social web app — and we’re proud to keep improving it with feedback from our fellow students.
  </p>

  <h4>Contact</h4>
  <div class="contact-box mt-3">
    <p>If you have questions, suggestions, or concerns, feel free to email us at <a href="mailto:support@algonect.com">support@algonect.com</a>.</p>
    <p>To report a bug or suggest a new feature, please post about it <a href="#">here</a> on AlgoNect.</p>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>
