document.addEventListener("DOMContentLoaded", () => {
    const tipsBlocks = document.querySelectorAll(".tips_block");
    tipsBlocks.forEach((block) => {
        const openButton = block.querySelector(".tips_open");
        const hiddenContent = block.querySelector(".tips_hidden");

        hiddenContent.style.display = "none";

        openButton.addEventListener("click", () => {
            if (hiddenContent.style.display === "none") {
                hiddenContent.style.display = "block";
                openButton.querySelector(".toggle-btn").textContent = "-";
            } else {
                hiddenContent.style.display = "none"; // Скрыть блок
                openButton.querySelector(".toggle-btn").textContent = "+";
            }
        });
    });
});

