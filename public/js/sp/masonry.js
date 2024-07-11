$(function() {
    var $grid = jQuery('.grid').imagesLoaded(function() {
        $grid.masonry({
            itemSelector: '.grid-item'
        });
    });
});
