$(function() {
    $('.nomnoml').each(function() {
        var canvasElement = $('canvas', this).get(0);
        var text = $('div', this).text();
        nomnoml.draw(canvasElement, text, 1);
    });
});
