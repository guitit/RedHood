let map;

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 31.046051, lng: 34.851612 },
        zoom: 8,
    });
}

function openMenu() {
    document.getElementsByClassName("menu")[0].onclick = function() {
        document.getElementsByClassName("menuC")[0].className = "menuContent";
        document.getElementsByClassName("menuA")[0].className = "menuArea";
        document.getElementsByClassName("wrapper-h4")[0].className = "menuB";
    }
}

function closeMenu() {
    document.getElementsByClassName("exitMenu")[0].onclick = function() {
        document.getElementsByClassName("menuArea")[0].className = "menuA";
        document.getElementsByClassName("menuContent")[0].className = "menuC";
        document.getElementsByClassName("menuB")[0].className = "wrapper-h4";

    }
}
(() => {

    const forms = document.querySelectorAll('.needs-validation');

    Array.prototype.slice.call(forms).forEach((form) => {
        form.addEventListener('submit', (event) => {
            var checkboxes = document.querySelectorAll("input[type=checkbox]");
            var checkboxesValid = false;
            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    checkboxesValid = true;
                }
            })
            if (!form.checkValidity() || !checkboxesValid) {

                event.preventDefault();
                event.stopPropagation();
                if (!checkboxesValid) {
                    document.getElementById("checkboxError").style.display = "block";
                }
            }
            form.classList.add('was-validated');
        }, false);
    });
})();

function makeSelected() {
    const selectObj = document.querySelector('attack');
    ind = selectObj.dataset.selected;
    console.log('ind');
    selectObj.options[ind - 1].selected = true;
}
/*form validation */

// function edit() {
//     var edit = document.getElementById("edit").onclick = function() {
//         console.log('edit');
//         document.getElementById("edit").innerHTML = "<?php $state=edit; ?>";
//     }
// }

// function delete_() {
//     var edit = document.getElementById("delete").onclick = function() {
//         $state = "delete";
//     }
// }


// window.onload = function init() {
//     edit();
//     delete_();
// }