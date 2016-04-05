$(function () {
    var items = $('#user-tabs>ul>li').each(function () {
        $(this).click(function () {
            //remove previous class and add it to clicked tab
            items.removeClass('current');
            $(this).addClass('current');

            //hide all content divs and show current one
            //$('#user-tabs>div.tab-content').hide().eq(items.index($(this))).show();

            //$('#user-tabs>div.tab-content').hide().eq(items.index($(this))).fadeIn(100);    

            $('#user-tabs>div.tab-content').hide().eq(items.index($(this))).show();
            window.location.hash = $(this).attr('tab');
        });
    });

    if (location.hash) {
        showTab(location.hash);
    }
    else {
        showTab("personal-info");
    }

    function showTab(tab) {		
        $("#user-tabs ul li:[tab*=" + tab + "]").click();
		
    }

    // Bind the event hashchange, using jquery-hashchange-plugin
    $(window).hashchange(function () {
        showTab(location.hash.replace("#", ""));
    })

    // Trigger the event hashchange on page load, using jquery-hashchange-plugin
    $(window).hashchange();
});