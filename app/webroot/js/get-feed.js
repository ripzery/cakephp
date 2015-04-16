

function getFeed() {

    var rss = $('#select_rss');
    if (rss !== null) {

        var str = rss.options[rss.selectedIndex].value;
        alert(str);
    }
    if (str.length == 0) {
        $('#rssOutput').innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {  // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("rssOutput").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "menus/php_database/getfeed.php?q=" + str, true);
    xmlhttp.send();
}