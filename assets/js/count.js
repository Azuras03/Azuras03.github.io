let count = 0;
let countEl = document.getElementById("count");
let button = document.getElementById("buttonSUS");
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
    if(count >= 1000){
        var meta = document.createElement('meta');
        meta.httpEquiv = "refresh";
        meta.content = "0;url=https://www.youtube.com/watch?v=dQw4w9WgXcQ";
        document.getElementsByTagName('head')[0].appendChild(meta);
    }
    countEl.innerHTML = count;
}

function chgTxtSize(size) {
    
    txtSize += size;

    if(txtSize >= 100 && txtSize <= 200) {
        toggleAnimation("rotate");
    }
    else if(txtSize > 200) {
        toggleAnimation("rotateMore");
    }
    
    if(txtSize + size < 5) return;
    
    if(txtSize + size > 100) return;

    if(size < 0) {
        toggleAnimation("scaleDown");
    }
    else {
        toggleAnimation("scaleUp");
    }
    countEl.style["font-size"] = txtSize + "px";
}

function toggleAnimation(name) {
    countEl.classList.toggle(name);
        setTimeout(function() {
            countEl.classList.toggle(name);
        }, 300);
}