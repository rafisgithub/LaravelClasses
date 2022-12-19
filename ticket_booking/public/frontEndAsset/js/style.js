$(document).ready(function() {
    $("#base").focus(function() {
        $("#user").empty();
        $('.symInput').val("");
        $('#quote').html("<p>Quote will appear here.</p>");
    });

    var getQuote = function() {
        var baseSymbol = $('#base').val().toUpperCase();
        var targetSymbol = $('#target').val().toUpperCase();

        if (baseSymbol === '' || baseSymbol === '') {
            $('#quote').html('<p>Enter a symbol first</p>');
        } else {
            $.getJSON("https://api.fixer.io/latest?base=" + baseSymbol + "&symbols=" + targetSymbol, function(json) {

                if(typeof json.rates[targetSymbol] === 'undefined') {
                    $('#quote').html('<p>Symbol not found!</p>');
                } else {
                    $('#quote').html('<p>' + targetSymbol + ' ' + json.rates[targetSymbol] + '</p>');
                }
            });
        }
    }

    $("#search").on("click", function() {
        getQuote();
    });

    $('.symInput').keyup(function(event) {
        if (event.keyCode == 13) {
            getQuote();
        }
    });
})
