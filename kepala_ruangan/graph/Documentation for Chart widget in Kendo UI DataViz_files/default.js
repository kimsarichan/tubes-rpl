$(function () {
    $('.greyback .searchContainer').fadeIn();
    if ($('.allContentFilteredMessage').length > 0) {
        UpdateContentItemCountsAndVisiblity();
    }
    jQuery.expr[':'].containsInsensitive = function (a, i, m) {
        return jQuery(a).text().toUpperCase()
            .indexOf(m[3].toUpperCase()) >= 0;
    };

    $('.button').on('click', function () {
        $(this).addClass('pressed').delay(200).queue(function (next) {
            $(this).removeClass('pressed');
            next();
        });
    });

    $('li.expanded, li.collapsed').each(function () {
        $(this).children('a:first').on('click', function (e) {
            e.preventDefault();
            SwapClass(this);
        });
    });

    $('nav ul li a').click(function () {
        var path = $(this).attr('href') || "";
        path = path.replace('http://docs.kendoui.com/', '');
        _gaq.push(['_trackPageview', path]);
    });

    var containerElement = $(".sfitemRichText");
    var timeout;
    $("input#_filter").keyup(function () {
        var text = this;
        clearTimeout(timeout);
        timeout = setTimeout(function () {
            if (text.value) {
                containerElement.children(":not(h1,h2,.nav)").hide().end().find("h3:containsInsensitive('" + text.value + "')").addClass('highlight').show().next().show();
            } else {
                containerElement.children('.highlight').removeClass('highlight');
                containerElement.children(':hidden').show();
            }
            UpdateContentItemCountsAndVisiblity();
        }, 50);
    });

    $("ul.nav li").each(function () {
        var href = $(this).find("a").attr("href");

        var dropdown = $("<ul></ul>", { "class": "dropdown" }).appendTo($(this));
        $(href).nextUntil("h2", "h3").each(function () {
            AddDropdownLi(dropdown, this);
        });

    });
});

function UpdateContentItemCountsAndVisiblity() {
    $('.nav li').each(function () {
        var header = $($(this).find('a').attr('href'));
        var visibleSections = header.nextUntil($('h2'), 'section:visible');
        var numberOfVisibleSections = visibleSections.length;
        var shouldShowSections = numberOfVisibleSections !== 0;

        var dropdown = $(".dropdown", this);
        dropdown.html("");
        visibleSections.prev().each(function () {
            AddDropdownLi(dropdown, this);
        });

        $(this).toggle(shouldShowSections);
        header.toggle(shouldShowSections);
        $(this).find('.contentItemCount').text(numberOfVisibleSections);
    });
    if ($('.toc').length > 0) {
        var allContentFiltered = $('.nav li:visible').length === 0;
        $('.allContentFilteredMessage').toggle(allContentFiltered);
        $('.toc').toggle(!allContentFiltered);
    }
}

function SwapClass(el) {
    $(el).parent().toggleClass('expanded').toggleClass('collapsed');
}

function AddDropdownLi(dropdown, element) {
    var item = $("<li></li>");
    item.append($("<a></a>", { html: $(element).html(), href: "#" + $(element).attr("id") }));
    dropdown.append(item);
}
