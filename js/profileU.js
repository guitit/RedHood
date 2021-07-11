function openMenu() {
    document.getElementsByClassName("menu")[0].onclick = function() {
        document.getElementsByClassName("menuC")[0].className = "menuContent";
        document.getElementsByClassName("menuA")[0].className = "menuArea";
        document.getElementsByClassName("wrapper")[0].className = "menuB";
    }
}

function closeMenu() {
    document.getElementsByClassName("exitMenu")[0].onclick = function() {
        document.getElementsByClassName("menuArea")[0].className = "menuA";
        document.getElementsByClassName("menuContent")[0].className = "menuC";
        document.getElementsByClassName("menuB")[0].className = "wrapper";

    }
}

function dele() {
    document.getElementById("delete").onclick = function() {
        alert("Are you sure you want to delete your profile?");
        this.innerHTML = ('<a href="deleteProfile.php?id=<?php echo($row[' + 'id' + '])?>"class="edit"><img src="images/delete.png"></a>')


    }
}

/*form validation */

function edit() {
    var edit = document.getElementById("edit").onclick = function() {

        document.getElementById("edit").innerHTML = "<?php $state=edit; ?>";
    }
}



// window.onload = function init() {
//     edit();
//     delete_();
// }