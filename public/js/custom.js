$(document).ready(function () {
    var userfeed = new Instafeed({
        get: 'user',
        userId: '7336542448',
        limit: 12,
        resolution: 'standard_resolution',
        accessToken: '7336542448.1677ed0.c0deef072c7e44c5ae37a1984a156d3a',
        sortBy: 'most-recent',
        template: '<div class="w-20p ml-4 flex"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class=" hover:opacity-75 "/></a></div>',
    });
    userfeed.run();
})

$(document).ready(function () {
    // This will create a single gallery from all elements that have class "gallery-item"
    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
})

TweenMax.to('#calendar', 1, {
    opacity: 1
});
