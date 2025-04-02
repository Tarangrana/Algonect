<!-- Right Sidebar -->
<aside class="right-sidebar">
  <div class="p-4 rounded shadow-sm rightbar">
    <h6 class="fw-semibold text-primary mb-3">🏆 Leaderboard</h6>

    <?php
    require_once 'includes/db_connect.php';

    $leaderboardQuery = "
    SELECT u.id, u.name, u.profile_pic, COUNT(p.id) AS post_count
    FROM users_info u
    JOIN posts p ON u.id = p.user_id
    GROUP BY u.id
    ORDER BY post_count DESC
    LIMIT 5
";


    $result = $conn->query($leaderboardQuery);
    ?>

    <?php if ($result && $result->num_rows > 0): ?>
      <ol class="ps-2">
        <?php while ($row = $result->fetch_assoc()): ?>
          <li class="d-flex align-items-center mb-3">
          <?php $picPath = (!empty($row['profile_pic']) && strpos($row['profile_pic'], 'pics/') !== 0)
           ? "pics/" . $row['profile_pic']
           : (!empty($row['profile_pic']) ? $row['profile_pic'] : "pics/default-pfp.png");
           ?>
            <img src="<?= $picPath ?>" class="rounded-circle me-3" width="40" height="40" />
            <div class="d-flex flex-column">
  <a href="php/user_profile.php?id=<?= $row['id'] ?>" class="fw-semibold text-decoration-none text-dark">
    <?= htmlspecialchars($row['name']) ?>
  </a>
  <small class="text-muted"><?= $row['post_count'] ?> posts</small>
</div>

          </li>
        <?php endwhile; ?>
      </ol>
    <?php else: ?>
      <p class="text-muted">No leaderboard data available.</p>
    <?php endif; ?>
  </div>
</aside>
