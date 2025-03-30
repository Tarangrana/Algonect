<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About - Iscicle</title>
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
  <h1>Welcome to Iscicle</h1>
  <p>
    A place for international students to connect, learn, and succeed.
  </p>
  <p>
    Iscicle began as a simple idea in a tiny Manhattan apartment during the summer of 2022. “What if we could create something that would make the lives of international students easier?”
    Naturally, we first considered some form of a job-search platform. Then we thought about the challenges of actually figuring out how to study abroad.
    After throwing around a few more ideas, we came to a realization:
  </p>
  <p>
    International students go through so much struggle and difficulty just to stay afloat studying in another country and trying to land jobs and internships.
    More importantly, they go through these experiences thousands of miles away from home, alone.
    As any successful person will tell you, “it takes a village” — so we realized that the best way to help international students is to bring that village to them. Every single one of them.
  </p>
  <p>
    Iscicle is more than just a space for students, of any stage, to come together and learn from one another. It is your home away from home.
    A guarantee that you won’t be alone, whether it’s applying to school, shuffling through job applications (and auto-rejections),
    or simply trying to make it in a country you didn’t grow up in. We’re stronger together, and we’re just getting started.
  </p>

  <h4>About the Founders</h4>
  <p>
    <strong>Vitor</strong> came to the U.S. as an international student in 2017, from his hometown of Curitiba, Brazil.
    He began to work towards dreams of landing a job on Wall Street by studying economics at the College of San Mateo,
    and later transferring to Cal Poly SLO. During his last year at Cal Poly, he took a Programming for Economics course where he was introduced to Python.
    It was in this class that he discovered a passion for coding. He realized that he wanted to build things to help others,
    and began to teach himself how to code. As he reflected on the many challenges he had faced as an international student,
    he knew he wanted to build something to help other students in their journeys, leading to the creation of Iscicle.
  </p>

  <p>
    <strong>Ariana</strong> is the daughter of immigrants, and first came to the U.S. as a child.
    As a first-generation American, she had no clue how to navigate the higher education system, leading her to enroll at the College of San Mateo.
    She then transferred to Stanford, where she had intended to complete her studies in Political Science,
    before going to law school to become an immigration lawyer. Throughout this time, she watched as her partner struggled to find internships and jobs,
    grapple with uncertainty around visa restrictions, and generally battle with the many issues that impact international students.
    Her parents shared similar memories with her of their experiences as international students in Europe.
    It was through these interactions that she realized her dream of supporting immigrants could come true in a different way — and that way is Iscicle.
  </p>

  <h4>Contact</h4>
  <div class="contact-box mt-3">
    <p>If you wish to contact us about any issues, questions or concerns, please send an email to <a href="mailto:support@algonect.com">support@algonect.com</a>.</p>
    <p>If you’d like to report a bug or suggest a feature, you may do so by creating a post <a href="#">here</a>.</p>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>
