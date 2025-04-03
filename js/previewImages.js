// Script to preview images before uploading

function previewSingleImage(event) {
  // Container to display the preview
  // The container is where the image preview will be displayed
  const container = document.getElementById("singlePreview");
  container.innerHTML = "";

  //Get the file from the input element
  // The event.target.files[0] gets the first file selected by the user
  const file = event.target.files[0];
  if (!file) return;

  // FileReader is a built-in JavaScript object that allows you to read the contents of files asynchronously
  // It is used here to read the image file and convert it to a data URL for previewing
  const reader = new FileReader();
  reader.onload = function (e) {
    // Create a wrapper div to hold the image and remove button
    const wrapper = document.createElement("div");
    wrapper.className = "position-relative d-inline-block";

    const img = document.createElement("img");
    img.src = e.target.result; // Styling the image with the data URL
    img.style.width = "120px";
    img.style.height = "120px";
    img.style.objectFit = "cover";
    img.classList.add("rounded");

    // Create a remove button to clear the preview
    const removeBtn = document.createElement("span");
    removeBtn.innerHTML = "&times;";
    removeBtn.className =
      "position-absolute top-0 end-0 text-danger bg-white rounded px-2";
    removeBtn.style.cursor = "pointer";

    removeBtn.onclick = () => {
      event.target.value = ""; // Reset input
      container.innerHTML = "";
    };

    // Insert the image and remove button into the wrapper
    // The wrapper is used to position the remove button on top of the image
    wrapper.appendChild(img);
    wrapper.appendChild(removeBtn);
    container.appendChild(wrapper);
  };

  reader.readAsDataURL(file);
}
