let count = 0;
let countEl = document.getElementById("count");
let button = document.getElementById("animateButton");
let txtSize = 20;
countEl.style["font-size"] = txtSize + "px";

button.addEventListener("click", function() {
    countEl.classList.toggle("animate");
    countEl.innerHTML = "Helo dud";
});

function decrement() {
    chgTxtSize(-1);
    count--;
    countEl.innerHTML = count;
}

function increment() {
    chgTxtSize(1);
    count++;
    countEl.innerHTML = count;
}

function chgTxtSize(size) {
    if(txtSize == 100){
        toggleAnimation("rotate");
    }
    if(txtSize + size < 5) return;
    if(txtSize + size > 100) return;
    if(size < 0) {
        toggleAnimation("scaleDown");
    }
    else {
        toggleAnimation("scaleUp");
    }
    txtSize += size;
    countEl.style["font-size"] = txtSize + "px";
}

function toggleAnimation(name) {
    countEl.classList.toggle(name);
        setTimeout(function() {
            countEl.classList.toggle(name);
        }, 300);
}