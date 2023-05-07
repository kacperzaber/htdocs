const THUMBNAILS = document.querySelectorAll(".thumbnail img");
const POPUP = document.querySelector(".popup");

THUMBNAILS.forEach((thumbnail) => {
    thumbnail.addEventListener("click", () => {   
             POPUP.classList.remove("hidden");
    });
});
