function previewSingleImage(event) {
  const container = document.getElementById("singlePreview");
  container.innerHTML = "";

  const file = event.target.files[0];
  if (!file) return;

  const reader = new FileReader();
  reader.onload = function (e) {
    const wrapper = document.createElement("div");
    wrapper.className = "position-relative d-inline-block";

    const img = document.createElement("img");
    img.src = e.target.result;
    img.style.width = "120px";
    img.style.height = "120px";
    img.style.objectFit = "cover";
    img.classList.add("rounded");

    const removeBtn = document.createElement("span");
    removeBtn.innerHTML = "&times;";
    removeBtn.className =
      "position-absolute top-0 end-0 text-danger bg-white rounded px-2";
    removeBtn.style.cursor = "pointer";

    removeBtn.onclick = () => {
      event.target.value = ""; // Reset input
      container.innerHTML = "";
    };

    wrapper.appendChild(img);
    wrapper.appendChild(removeBtn);
    container.appendChild(wrapper);
  };

  reader.readAsDataURL(file);
}
