$(function(){
    var url = window.location.href;
    var activePage = url;
    $('.nav-item a.nav-link').each(function () {
        var linkPage = this.href;

        if (activePage == linkPage) {
            $(this).addClass("active");
            // $(this).parent().parent().closest("ul").parent().addClass('is-expanded');
            $(this).parent().parent().closest("ul").parent().addClass('open');
        }
    });
});