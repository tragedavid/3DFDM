texts = document.querySelectorAll("h3.progress-text span");

// for(let i=0; i < texts.length; i++) {
//     console.log(i)
//     console.log(texts[i]);
//     texts[i].style.color = "purple";
//     texts[i].textContent = 80;
// }
const speed = 800; // The lower the slower
count = 0;
function increase() {
    count++;
    if(count <= 100) {
        for(let i=0; i < texts.length; i++) {
            // texts[i].style.color = "purple";
            texts[i].textContent = count;
        }
    }
    else {
        count = 101;
        for(let i=0; i < texts.length; i++) {
            path = "ferth";
            texts[i].innerHTML = '<a href="' + path + '">Produit imprimé</a>';
        }
    }
}
setInterval(increase, 40);