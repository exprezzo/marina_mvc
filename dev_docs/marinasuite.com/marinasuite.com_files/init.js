var is_webkit = (navigator.userAgent.toLowerCase().indexOf('chrome') > -1) || (navigator.userAgent.toLowerCase().indexOf('safari') > -1);


function gup(name) {
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regexS = "[\\?&]" + name + "=([^&#]*)";
    var regex = new RegExp(regexS);
    var results = regex.exec(window.location.href);
    if (results == null)
        return "";
    else
        return results[1];
}

function goToPPC() {
    window.location = '?mode=ppc';
}

function leadFormSubmit() {
    if (is_webkit) {
        form.submit();
    } else {
        setTimeout(goToPPC(), 700);
    }
}