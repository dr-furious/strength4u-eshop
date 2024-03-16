function toggleNewVendorInput() {
  const vendorSelect = document.getElementById("vendor");
  const newVendorSection = document.getElementById("new_vendor_section");
  const newVendorInput = document.getElementById("new_vendor");

  if (vendorSelect.value === "other") {
    newVendorSection.classList.remove("hidden");
    newVendorInput.required = true; // Make input required if 'Other' is selected
  } else {
    newVendorSection.classList.add("hidden");
    newVendorInput.required = false; // Remove 'required' attribute otherwise
  }
}

// add new flavour
document.getElementById("add-flavor").addEventListener("click", function () {
  const newFlavor = document.getElementById("new-flavor").value.trim();
  if (newFlavor) {
    const div = document.createElement("div");
    const label = document.createElement("label");
    label.className = "inline-flex items-center";
    const input = document.createElement("input");
    input.type = "checkbox";
    input.className = "form-checkbox";
    input.name = "flavors";
    input.value = newFlavor;
    const span = document.createElement("span");
    span.className = "ml-2";
    span.textContent = newFlavor;

    label.appendChild(input);
    label.appendChild(span);
    div.appendChild(label);
    document.getElementById("flavor-list").appendChild(div);

    document.getElementById("new-flavor").value = ""; // Clear input field
  }
});

//https://readymadeui.com/tailwind-components/form/upload-file
function addImageToPreview(src) {
  const preview = document.getElementById("imagePreview");
  const img = new Image();
  img.src = src;
  img.classList.add("w-24", "h-24", "object-cover"); // Tailwind classes for image styling
  preview.appendChild(img);
}

// Function to handle image file selection
function previewImage() {
  const files = document.getElementById("uploadFile").files;
  document.getElementById("imagePreview").innerHTML = ""; // Clear existing images
  if (files) {
    Array.from(files).forEach((file) => {
      if (/\.(jpe?g|png|gif|svg|webp)$/i.test(file.name)) {
        const reader = new FileReader();
        reader.onload = (e) => {
          addImageToPreview(e.target.result);
        };
        reader.readAsDataURL(file);
      }
    });
  }
}
