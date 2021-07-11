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

(function($) {
    $(window).on('load', getAttackJson);

    function getAttackJson() {
        $.get("js/list.json", processJson);
    }

    function processJson(data) {
        $('.attack').each(
            function() {
                var el = $(this)
                var index = el.data('attackid')
                if (index < 5 && index > 0) {
                    el.html(data[index-1]['name'])
                    el.css({ color: data[index-1]['color'] })
                }

            })
    }

})(jQuery)