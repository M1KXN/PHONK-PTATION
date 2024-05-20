function Search() {
    let input = document.getElementById('searchbar').value;
    input = input.toLowerCase();
    let x = document.getElementsByClassName('article');
    for (i = 0; i < x.length; i++) {
        if (!x[i].innerText.toLowerCase().includes(input)) {
            x[i].style.display = "none";
        } else {
            x[i].style.display = "block";
        }
    }
}