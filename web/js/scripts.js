$(document).ready(function() {
    $('.space').click(function() {
        $.post()
        $(this).addClass('piece');
    });
});

var findSpace = function(row, col) {
    return $('.row-' + row + ' .col-' + col);
};
