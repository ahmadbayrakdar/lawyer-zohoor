function toggleLanguage() {
    // Get current URL
    var currentUrl = window.location.href;

    // Extract language from URL
    var lang = currentUrl.includes("?lang=en") ? "en" : "ar";

    // Toggle language
    var newLang = lang === "en" ? "ar" : "en";

    // Construct new URL with updated language
    var newUrl;
    if (currentUrl.includes("?lang=")) {
        newUrl = currentUrl.replace("?lang=" + lang, "?lang=" + newLang);
    } else {
        newUrl = currentUrl + "?lang=" + newLang;
    }

    // Redirect to the new URL
    window.location.href = newUrl;
}
