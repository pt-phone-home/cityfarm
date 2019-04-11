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

// document.getElementById('navBtn').addEventListener('click', function () {

//     let tl = new TimelineMax({
//         paused: false
//     });

//     tl.fromTo('#mobNav', .3, {
//             opacity: 0,
//             display: 'none',
//             width: 0,
//             height: 0
//         }, {
//             opacity: 1,
//             display: 'flex',
//             width: '40%',
//             height: '100%'
//         })
//         .staggerFrom('#mobNav>ul>li', .3, {
//             opacity: 0,
//             x: -20
//         }, .1);
// })

document.getElementById('navBtn').addEventListener('click', function () {
    TweenMax.fromTo('#mobNav', .5, {
        opacity: 0,
        display: 'none',
        width: 0,
        height: 0
    }, {
        opacity: 1,
        display: 'flex',
        width: '100%',
        height: '100%'
    });
    TweenMax.staggerFrom('#mobNav>ul>li', .3, {
        opacity: 0,
        x: -20,
        delay: .4
    }, .1);
})

document.getElementById('closeBtn').addEventListener('click', function () {
    TweenMax.to('#mobNav', .5, {
        opacity: 0,
        display: 'none',
        width: 0,
        height: 0
    });
})

// document.getElementById('dropdownMob').addEventListener('mouseenter', function () {
//     let tl = new TimelineMax({

//     });

//     tl.fromTo('#dropdownContent', .2, {
//         opacity: 0,
//         display: 'none'
//     }, {
//         opacity: 1,
//         display: 'flex',

//     }).staggerFromTo('#dropdownContent>li', .2, {
//         opacity: 0,
//         x: -20
//     }, {
//         opacity: 1,
//         x: 0
//     }, .1);

//     document.getElementById('dropdownMob').addEventListener('mouseleave', function () {
//         tl.reverse();
//     });
// });

let community = document.getElementById('community');
let comBtn = document.getElementById('comBtn');

let slideAnimation = TweenMax.to(community, .2, {
        opacity: 1,
        display: 'flex',
        height: 'auto',
    })
    .reverse();



comBtn.addEventListener('click', function () {
    slideAnimation.reversed(!slideAnimation.reversed());
});


let love = document.getElementById('love');
let loveBtn = document.getElementById('loveBtn');

let loveAnimation = TweenMax.to(love, .2, {
        opacity: 1,
        display: 'flex',
        height: 'auto',
    })
    .reverse();


loveBtn.addEventListener('click', function () {
    loveAnimation.reversed(!loveAnimation.reversed());
});

// Get Involved DropDown
let involved = document.getElementById('involved');
let invBtn = document.getElementById('invBtn');

let invAnimation = TweenMax.to(involved, .2, {
        opacity: 1,
        display: 'flex',
        height: 'auto',
    })
    .reverse();


invBtn.addEventListener('click', function () {
    invAnimation.reversed(!invAnimation.reversed());
});

// Info Drop down
let info = document.getElementById('info');
let infBtn = document.getElementById('infBtn');

let infAnimation = TweenMax.to(info, .2, {
        opacity: 1,
        display: 'flex',
        height: 'auto',
    })
    .reverse();


infBtn.addEventListener('click', function () {
    infAnimation.reversed(!infAnimation.reversed());
})
