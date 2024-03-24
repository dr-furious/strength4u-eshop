document.addEventListener("DOMContentLoaded", () => {
  window.onload = () => {
    document.getElementById("title").value = "Whey Protein Ultra";
    document.getElementById("desc").value =
      "Highly nutritious whey protein with exceptional biological value, enriched with digestive enzymes for optimal absorption. A global bestseller, featuring premium whey protein isolate, complemented by whey protein concentrate and hydrolyzed whey isolate for comprehensive muscle support.\n" +
      "\n" +
      "\n" +
      "Each serving delivers not only the essential amino acids your body needs to thrive but also is fortified with digestive enzymes. This thoughtful addition guarantees optimal protein absorption and digestion, making it a gentle choice for your stomach while maximizing the nutritional benefits.";
    document.getElementById("secondary_desc").value =
      "Introducing the ultimate whey protein powder crafted for the modern man, where unmatched taste meets supreme nutrition. This powerhouse protein blend is not just a supplement; it's a testament to strength, vigour, and the relentless pursuit of greatness. Each scoop is packed with high-quality, micro-filtered whey protein concentrate and isolate, delivering a whopping 25 grams of pure muscle-building protein to support recovery, muscle growth, and strength.\n" +
      "\n" +
      "\n" +
      "But it's not just about the protein. This blend is infused with a robust, manly flavour profile that sets it apart from the rest. Imagine the rich, deep taste of dark chocolate, seamlessly combined with the bold, earthy notes of espresso and a hint of smoky bourbon. It's a flavour that commands attention, satisfying the palate with every sip, making your protein shake not just a part of your routine, but a luxurious ritual.";
    addImageToPreview("./../../images/protein.png");
    addImageToPreview("./../../images/protein.png");
    addImageToPreview("./../../images/protein.png");
    addImageToPreview("./../../images/protein.png");

    const addEntryBtn = document.getElementById("add-entry-btn");
    // Simulate the click to add more entry rows
    addEntryBtn.dispatchEvent(new Event("click"));
    addEntryBtn.dispatchEvent(new Event("click"));

    document.getElementById("flavour1").value = "vanilla";
    document.getElementById("size1").value = "500g";
    document.getElementById("price1").value = "$40.79";
    document.getElementById("discount1").value = "20%";
    document.getElementById("amount1").value = "1000";
    document.getElementById("category").value = "protein";
    document.getElementById("vendor").value = "protein";

    document.getElementById("flavour2").value = "chocolate";
    document.getElementById("size2").value = "2000g";
    document.getElementById("price2").value = "$80.90";
    document.getElementById("discount2").value = "0%";
    document.getElementById("amount2").value = "500";

    document.getElementById("flavour3").value = "natural";
    document.getElementById("size3").value = "1000g";
    document.getElementById("price3").value = "$65.90";
    document.getElementById("discount3").value = "0%";
    document.getElementById("amount3").value = "100";
  };
});
