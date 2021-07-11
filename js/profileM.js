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


function edit() {
    document.getElementById("edit").onclick = function() {
        document.getElementById("desc").innerHTML = "<input type=text class='response' name='response'><button type=submit class='response-btn'>send</button>";

    }
}