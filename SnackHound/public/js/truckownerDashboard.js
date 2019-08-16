// After filtiring, keeping the same form display of the radio choosen before

let radioValue = document.querySelector('input[name="typeSearch"]:checked').value

if(radioValue === 'user') {
    showUser();
} else if(radioValue === 'date') {
    showDate();
} else {
    showAmount();
}

function user(x) {
    if (x.checked) {
      showUser();
    }
  }

function date(x) {
    if (x.checked) {
        showDate();
    }
}

function amount(x) {
    if (x.checked) {
        showAmount();
    }
}

function showAmount() {
    document.querySelector(".filter-date-mobile").style.display = "none";
    document.querySelector(".filter-amount-mobile").style.display = "block";
    document.querySelector(".filter-user-mobile").style.display = "none";
}

function showDate() {
    document.querySelector(".filter-date-mobile").style.display = "block";
    document.querySelector(".filter-amount-mobile").style.display = "none";
    document.querySelector(".filter-user-mobile").style.display = "none";
}

function showUser() {
    document.querySelector(".filter-date-mobile").style.display = "none";
    document.querySelector(".filter-amount-mobile").style.display = "none";
    document.querySelector(".filter-user-mobile").style.display = "block";
}


// remove and add classes depending of the device size
let nodes;

nodes = this.document.querySelectorAll('.desktop-row');
if (window.innerWidth > 1024) {

    for (let i = 0; i < nodes.length; i++) {
       nodes[i].classList.remove('desktop-row');

    }
}

if (window.innerWidth < 1024) {

    for (let i = 0; i < nodes.length; i++) {
       nodes[i].classList.add('desktop-row');

    }
}

window.addEventListener("resize", function() {
    if (window.innerWidth > 1024) {

        for (let i = 0; i < nodes.length; i++) {
           nodes[i].classList.remove('desktop-row');

        }
    }
  });

  window.addEventListener("resize", function() {
    if (window.innerWidth < 1024) {

        for (let i = 0; i < nodes.length; i++) {
           nodes[i].classList.add('desktop-row');

        }
    }
  });
