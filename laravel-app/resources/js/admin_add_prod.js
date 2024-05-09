function toggleNewVendorInput() {
    const vendorSelect = document.getElementById("vendor");
    const newVendorSection = document.getElementById("new_vendor_section");
    const newVendorInput = document.getElementById("new_vendor");

    if (vendorSelect.value === "other") {
        newVendorSection.classList.remove("hidden");
        newVendorSection.classList.add("flex");
        newVendorInput.required = true; // Make input required if 'Other' is selected
    } else {
        newVendorSection.classList.remove("flex");
        newVendorSection.classList.add("hidden");
        newVendorInput.required = false; // Remove 'required' attribute otherwise
    }
}

// Function to capitalize the first letter of each word
function capitalize(str) {
    return str.replace(/\b\w/g, (char) => char.toUpperCase());
}

function addOptionToSelect(selectElement, newOptionValue) {
    // Get the currently selected item
    const selectedItem = selectElement.value;

    // Add the new option
    const newOption = new Option(newOptionValue, newOptionValue.toLowerCase());
    selectElement.add(newOption);

    // Sort options alphabetically
    const optionsArray = Array.from(selectElement.options);
    optionsArray.sort((a, b) => a.text.localeCompare(b.text));

    // Clear the select element and re-add sorted options
    while (selectElement.firstChild) {
        selectElement.removeChild(selectElement.firstChild);
    }
    optionsArray.forEach((option) => selectElement.add(option));

    // Restore the previously selected option
    selectElement.value = selectedItem;
}

function addProductEntry() {
    const template = document
        .getElementById("product-entry-template")
        .content.cloneNode(true);

    // Find the highest existing entry number to ensure uniqueness
    const existingEntries = document.querySelectorAll(
        '[id^="delete-product-entry-btn-"]',
    );
    let highestNumber = 0;
    existingEntries.forEach((entry) => {
        const currentNumber = parseInt(
            entry.id.replace("delete-product-entry-btn-", ""),
            10,
        );
        if (currentNumber > highestNumber) {
            highestNumber = currentNumber;
        }
    });

    // Use the next number after the highest for the new entry
    const newEntryNumber = highestNumber + 1;

    // Update IDs and names with the new number to ensure uniqueness
    ["flavour", "size", "price", "discount", "amount"].forEach((attr) => {
        const elem = template.querySelector(`[id="${attr}"]`);
        elem.id = `${attr}${newEntryNumber}`;
        elem.name = `${attr}${newEntryNumber}`;

        // Update the 'for' attribute for labels
        const label = template.querySelector(`label[for="${attr}"]`);
        if (label) {
            label.setAttribute("for", `${attr}${newEntryNumber}`);
        }

        if (attr == "flavour") {
            flavours.forEach((flavour) => {
                addOptionToSelect(elem, flavour);
            });
            elem.value = "---";
        }

        if (attr == "size") {
            sizes.forEach((size) => {
                addOptionToSelect(elem, size);
            });
            elem.value = "---";
        }
    });

    // Update the delete button's ID
    const deleteButton = template.querySelector(
        '[id^="delete-product-entry-btn-"]',
    );
    deleteButton.id = `delete-product-entry-btn-${newEntryNumber}`;

    // Add an event listener for the delete button
    deleteButton.addEventListener("click", function (e) {
        e.target.closest("li").remove(); // Removes the closest <li> ancestor, effectively deleting the product entry
        // + on this button will need to be a call to the database to update tables in case they were created
    });

    document.getElementById("product-entries").appendChild(template); // Append to the container
}

document.addEventListener("DOMContentLoaded", () => {
    // Add new flavour
    document
        .getElementById("add-flavor")
        .addEventListener("click", function () {
            const newFlavor = capitalize(
                document.getElementById("new-flavor").value.trim(),
            );
            // Clear the input field
            document.getElementById("new-flavor").value = "";

            // Early return if the input is empty
            if (!newFlavor) {
                alert("Please enter a flavor.");
                return;
            }

            const existingEntries =
                document.querySelectorAll('[id^="flavour"]');
            existingEntries.forEach((entry) => {
                // Check if the new flavor already exists in the options
                const flavorExist = Array.from(entry.options).some(
                    (option) => option.value === newFlavor.toLowerCase(),
                );

                if (flavorExist) {
                    console.log("Flavor already exists:", newFlavor);
                    return; // Skip adding if the flavor already exists
                }

                addOptionToSelect(entry, newFlavor);
                if (!flavours.includes(newFlavor)) {
                    flavours.push(newFlavor);
                }
            });
        });

    // Add new size
    document.getElementById("add-size").addEventListener("click", function () {
        const newSize = capitalize(
            document.getElementById("new-size").value.trim(),
        );
        // Clear the input field
        document.getElementById("new-size").value = "";

        // Early return if the input is empty
        if (!newSize) {
            alert("Please enter a flavor.");
            return;
        }

        const existingEntries = document.querySelectorAll('[id^="size"]');
        existingEntries.forEach((entry) => {
            // Check if the new size already exists in the options
            const sizeExist = Array.from(entry.options).some(
                (option) => option.value === newSize.toLowerCase(),
            );

            if (sizeExist) {
                console.log("Flavor already exists:", newSize);
                return; // Skip adding if the size already exists
            }

            addOptionToSelect(entry, newSize);
            if (!sizes.includes(newSize)) {
                sizes.push(newSize);
            }
        });
    });

    // Add an event listener to the 'add entry' button
    const addEntryBtn = document.getElementById("add-entry-btn");
    addEntryBtn.addEventListener("click", addProductEntry);
    // Simulate the click to add the first entry row
    addEntryBtn.dispatchEvent(new Event("click"));
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
