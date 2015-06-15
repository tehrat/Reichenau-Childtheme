<<<<<<< HEAD
/* Tooltipster Scripts v1.0.1 */
jQuery(document).ready(function($){
    // setup some defaults for all tooltipsters
    $.fn.tooltipster('setDefaults', {
        theme: 'tooltipster-shadow',
        touchDevices: true
    });
    //target a href links for title text
    $('a[href]').tooltipster({
        animation: 'fade',
        multiple: true
    });
    //target tooltip class for title text
    $('.tooltip').tooltipster({
        animation: 'grow',
        multiple: true
    });
=======
/* Tooltipster Scripts v1.0.1 */
jQuery(document).ready(function($){
    // setup some defaults for all tooltipsters
    $.fn.tooltipster('setDefaults', {
        theme: 'tooltipster-shadow',
        touchDevices: true
    });
    //target a href links for title text
    $('a[href]').tooltipster({
        animation: 'fade',
        multiple: true
    });
    //target tooltip class for title text
    $('.tooltip').tooltipster({
        animation: 'grow',
        multiple: true
    });
>>>>>>> origin/master
});