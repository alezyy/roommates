   var menu = $("#menu");
var ul = menu.find("ul");
var content = $("#content")[0];
var data = $("#data");
var menuHeight = menu[0].getBoundingClientRect().bottom;
var inView= true;

$(document).scroll(function(evt) {
    evt.preventDefault();
    var top = content.getBoundingClientRect().top;
    var nextInView = top+menuHeight > 0;

    if (inView ^ nextInView)
    {
        data.append("<div>Switching.</div>")
        inView = nextInView;
        if (inView)
        {
            menu.removeClass("out");
        }
        else
        {
            menu.addClass("out");
            ul.hide().slideDown("fast");
        }
    }
});
