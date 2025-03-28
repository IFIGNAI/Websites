if (localStorage.getItem('buttonPressCount') === null) 
    { 
        localStorage.setItem('buttonPressCount', 0);
    }

function checkMode(){
    let buttonPressCount = parseInt(localStorage.getItem('buttonPressCount'), 10);
    if (buttonPressCount % 2 === 0) {
        darkVersion();
    } else {
        lightVersion();
    }
}


document.addEventListener('DOMContentLoaded', (event) => { checkMode();});

function darkMode(){
    let buttonPressCount = parseInt(localStorage.getItem('buttonPressCount'), 10);
    buttonPressCount++;
    localStorage.setItem('buttonPressCount', buttonPressCount);

    if (buttonPressCount % 2 === 0) {
        darkVersion();
    } else {
        lightVersion();
    }
}

function darkVersion(){
        document.body.style.backgroundColor = "black";
        document.querySelector("footer").style.backgroundColor = "#264ACC";
        changePicsDark();
        turnWhite("p");
        turnWhite("h1");
        turnWhite("h2");
        turnWhite("h3");
        turnWhite("h4");
        turnWhite("a");
        turnWhite("div");
        turnWhite("label");
        turnWhite("span");
}

function lightVersion(){
        document.body.style.backgroundColor = "white";
        document.querySelector("footer").style.backgroundColor = "#96C8E6";
        changePicsLight();
        turnBlack("p");
        turnBlack("h1");
        turnBlack("h2");
        turnBlack("h3");
        turnBlack("h4");
        turnBlack("a");
        turnBlack("div");
        turnBlack("label");
        turnBlack("button");
        turnBlack("span");


}

function turnWhite(tagName){
    let tag = document.querySelectorAll(tagName);
    for(let i = 0; i < tag.length; i++){
        tag[i].style.color = "white";
        if (tagName === "a" && tag[i].id === "buttonsi"){
            tag[i].style.color = "black";
        }
        if (tagName === "button"){
            tag[i].style.color = "black";
        }
        if (tagName === "label") {
            tag[i].style.backgroundColor = "black";
            let elements = document.querySelectorAll(`.tips_block`);
            elements[i].style.borderColor = "white";
        }
        if (tagName === "div"){
            tag[i].style.borderColor = "white";
        }
        if (tagName === "p"){
            tag[i].style.borderColor = "white";
        }
    }
}

function turnBlack(tagName){
    let tag = document.querySelectorAll(tagName);
    for(let i = 0; i < tag.length; i++){
        tag[i].style.color = "black";
        if (tagName === "button"){
            tag[i].style.color = "black";
        }
        if (tagName === "a"){
            tag[i].style.color = "black";
        }
        if (tagName === "label") {
            tag[i].style.backgroundColor = "white";
            let elements = document.querySelectorAll(`.tips_block`);
            elements[i].style.borderColor = "black";

        }
        if (tagName === "div"){
            tag[i].style.borderColor = "black";
        }
        if (tagName === "p"){
            tag[i].style.borderColor = "black";
        }
    }
}

function changePicsDark(){
    // let newImg = document.createElement("img");

    let images = document.querySelectorAll("img");
    for(let i = 0; i < images.length; i++){
        if(images[i].src.includes("assets/media/Home_Hero_img.png")){
            images[i].src = "assets/media/DarkV_Home_Hero_img.png"
        }
        if(images[i].src.includes("assets/media/Contrast_Hero.png")){
            images[i].src = "assets/media/DarkV_Contrast_HERO.png";
        }
        if(images[i].src.includes("assets/media/Contrast_3.png")){
            images[i].src = "assets/media/DarkV_Contrast_3.png";
        }
        if(images[i].src.includes("assets/media/Contrast_4.png")){
            images[i].src = "assets/media/DarkV_Contrast_4.png";
        }
        if(images[i].src.includes("assets/media/Repetition_Hero.png")){
            images[i].src = "assets/media/DarkV_Repetition_HERO.png";
        }
        if(images[i].src.includes("assets/media/Repetition_1.png")){
            images[i].src = "assets/media/DarkV_Repetition_1.png";
        }
        if(images[i].src.includes("assets/media/Repetition_2.png")){
            images[i].src = "assets/media/DarkV_Repetition_2.png";
        }
        if(images[i].src.includes("assets/media/Repetition_4.png")){
            images[i].src = "assets/media/DarkV_Repetition_4.png";
        }
        if(images[i].src.includes("assets/media/Alignment_Hero.png")){
            images[i].src = "assets/media/DarkV_Alignment_HERO.png";
        }
        if(images[i].src.includes("assets/media/Alignment_1.png")){
            images[i].src = "assets/media/DarkV_Alignment_1.png";
        }
        if(images[i].src.includes("assets/media/Alignment_2.png")){
            images[i].src = "assets/media/DarkV_Alignment_2.png";
        }
        if(images[i].src.includes("assets/media/Alignment_3.png")){
            images[i].src = "assets/media/DarkV_Alignment_3.png";
        }
        if(images[i].src.includes("assets/media/Alignment_4.png")){
            images[i].src = "assets/media/DarkV_Alignment_4.png";
        }
        if(images[i].src.includes("assets/media/Proximity_Hero.png")){
            images[i].src = "assets/media/DarkV_Proximity_HERO.png";
        }
        if(images[i].src.includes("assets/media/Proximity_1.png")){
            images[i].src = "assets/media/DarkV_Proximity_1.png";
        }
        if(images[i].src.includes("assets/media/Proximity_2.png")){
            images[i].src = "assets/media/DarkV_Proximity_2.png";
        }
        if(images[i].src.includes("assets/media/Proximity_3.png")){
            images[i].src = "assets/media/DarkV_Proximity_3.png";
        }
        if(images[i].src.includes("assets/media/Proximity_4.png")){
            images[i].src = "assets/media/DarkV_Proximity_4.png";
        }
    }
}

function changePicsLight(){
    // let newImg = document.createElement("img");

    let images = document.querySelectorAll("img");
    for(let i = 0; i < images.length; i++){
        if(images[i].src.includes("assets/media/DarkV_Home_Hero_img.png")){
            images[i].src = "assets/media/Home_Hero_img.png "
        }
        if(images[i].src.includes("assets/media/DarkV_Contrast_HERO.png")){
            images[i].src = "assets/media/Contrast_Hero.png";
        }
        if(images[i].src.includes("assets/media/DarkV_Contrast_3.png")){
            images[i].src = "assets/media/Contrast_3.png ";
        }
        if(images[i].src.includes("assets/media/DarkV_Contrast_4.png")){
            images[i].src = "assets/media/Contrast_4.png";
        }
        if(images[i].src.includes("assets/media/DarkV_Repetition_HERO.png")){
            images[i].src = "assets/media/Repetition_Hero.png";
        }
        if(images[i].src.includes("assets/media/DarkV_Repetition_1.png")){
            images[i].src = "assets/media/Repetition_1.png";
        }
        if(images[i].src.includes("assets/media/DarkV_Repetition_2.png")){
            images[i].src = "assets/media/Repetition_2.png";
        }
        if(images[i].src.includes("assets/media/DarkV_Repetition_4.png")){
            images[i].src = "assets/media/Repetition_4.png";
        }
        if(images[i].src.includes("assets/media/DarkV_Alignment_HERO.png")){
            images[i].src = "assets/media/Alignment_Hero.png";
        }
        if(images[i].src.includes("assets/media/DarkV_Alignment_1.png")){
            images[i].src = "assets/media/Alignment_1.png";
        }
        if(images[i].src.includes("assets/media/DarkV_Alignment_2.png")){
            images[i].src = "assets/media/Alignment_2.png";
        }
        if(images[i].src.includes("assets/media/DarkV_Alignment_3.png")){
            images[i].src = "assets/media/Alignment_3.png";
        }
        if(images[i].src.includes("assets/media/DarkV_Alignment_4.png")){
            images[i].src = "assets/media/Alignment_4.png";
        }
        if(images[i].src.includes("assets/media/DarkV_Proximity_HERO.png")){
            images[i].src = "assets/media/Proximity_Hero.png";
        }
        if(images[i].src.includes("assets/media/DarkV_Proximity_1.png")){
            images[i].src = "assets/media/Proximity_1.png";
        }
        if(images[i].src.includes("assets/media/DarkV_Proximity_2.png")){
            images[i].src = "assets/media/Proximity_2.png";
        }
        if(images[i].src.includes("assets/media/DarkV_Proximity_3.png")){
            images[i].src = "assets/media/Proximity_3.png";
        }
        if(images[i].src.includes("assets/media/DarkV_Proximity_4.png")){
            images[i].src = "assets/media/Proximity_4.png";
        }
    }
}
