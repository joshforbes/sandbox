(function() {
    var pusher = new Pusher('bf3b73f9a228dfef0913');
    var channel = pusher.subscribe('demoChannel');

    channel.bind('commentPosted', function(data) {
        var template = Handlebars.compile($('#comment-template').html());
        $(template({
            name: data['name'],
            body: data['body'],
            time: data['timestamp']}))
        .prependTo('section');
    });

    var submitLaravelRequest = function(e) {
        var form = $(this);
        var method = 'POST';

        $.ajax({
            type: method,
            url: form.prop('action'),
            data: form.serialize(),
            success: function() {

            }
        });

        e.preventDefault();
    };

    $('form').on('submit', submitLaravelRequest);

})();