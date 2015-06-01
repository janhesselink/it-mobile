function loadCSS(bestand)
{
    var cssLink = "<link rel='stylesheet' type='text/css' href='css/"+bestand+"'>";
    $("head").append(cssLink);
}

function loadJS(bestand)
{
    var jsLink = '<script type="text/javascript" src="js/'+bestand+'"></script>';
    $("body").append(jsLink);
}