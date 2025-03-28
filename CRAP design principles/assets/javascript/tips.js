function toggleTip(tipId) {
    var content = document.getElementById(tipId);
    var icon = document.querySelector(`#${tipId} + label .plus-icon`);

    if (content.style.maxHeight) {
        content.style.maxHeight = null;
        icon.style.transform = "rotate(0deg)";
    } else {
        content.style.maxHeight = content.scrollHeight + "px";
        icon.style.transform = "rotate(45deg)";
    }
}


