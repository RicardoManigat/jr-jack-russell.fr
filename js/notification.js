function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length,c.length);
        }
    }
    return "";
}

var monCookie = getCookie("visited");



if(monCookie===""){
    var notification = new NotificationFx({
        message : '<p>En poursuivant votre navigation sur ce site, vous acceptez l&apos;utilisation de cookies pour réaliser des statistiques de visite.<br><a href="./mentionslegales.php">En savoir plus.</a></p>',
        layout : 'growl',
        effect : 'slide',
        type : 'notice', // notice, warning or error
        ttl:600000,
        onClose : function() {
        }
    });
    notification.show();
}