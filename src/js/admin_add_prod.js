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
    // all new elements that are needed
    const div = document.createElement("div");
    const label = document.createElement("label");
    const label_amount = document.createElement("label");
    const input = document.createElement("input");
    const input_amount = document.createElement("input");
    const span = document.createElement("span");
    // define new div
    div.className = "flex w-96 justify-between";
    // define new labels
    label.className = "inline-flex items-center";
    label_amount.className = "inline-flex items-center";
    // define all flavour input
    input.type = "checkbox";
    input.className = "form-checkbox";
    input.name = "flavors";
    input.value = newFlavor;
    // define amount input
    input_amount.type = "number";
    input_amount.className =
      "ml-10 w-36 rounded-md border border-[#e0e0e0] bg-white px-2 py-2 text-base font-medium outline-none focus:border-[#6A64F1] focus:shadow-md";
    input_amount.min = "0";
    input_amount.value = "0";
    // define span with flavour name
    span.className = "ml-2";
    span.textContent = newFlavor;
    // define structure of defined elements
    label.appendChild(input);
    label.appendChild(span);
    label_amount.appendChild(input_amount);
    div.appendChild(label);
    div.appendChild(label_amount);
    // put all to page + set 'enter a flavour' to empty
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
