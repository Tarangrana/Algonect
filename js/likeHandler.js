// This script handles the like button functionality for posts.
// It sends an AJAX request to the server to update the like count in the database.

document.querySelectorAll(".like-btn").forEach((button) => {
  button.addEventListener("click", () => {
    const postId = button.getAttribute("data-post-id");

    // Send an AJAX request to the server to like the post
    // The server-side script (like_post.php) should handle the database update
    fetch("php/like_post.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: `post_id=${postId}`,
    })
      .then((res) => res.json())
      .then((data) => {
        console.log(data); // for debug
        if (data.success) {
          document.getElementById(
            `like-count-${postId}`
          ).textContent = `${data.likes} likes`;
        } else {
          alert(data.message || "Something went wrong");
        }
      })
      .catch((err) => {
        console.error("Like error:", err);
      });
  });
});
