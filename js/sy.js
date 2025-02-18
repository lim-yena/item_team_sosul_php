const openPopupBtn = document.getElementById("openPopup");
const popup = document.getElementById("popup");
const closeBtn = document.querySelector(".close-btn");
const btn = document.querySelector(".mo-search");

btn.addEventListener("click", function () {
    popup.style.display = "block";
});

closeBtn.addEventListener("click", function () {
    popup.style.display = "none";
});

// window.addEventListener("click", function (event) {
//     if (event.target === popup) {
//         popup.style.display = "none";
//     }
// });
