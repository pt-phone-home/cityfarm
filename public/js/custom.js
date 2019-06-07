$(document).ready(function () {
    var userfeed = new Instafeed({
        get: 'user',
        userId: '7336542448',
        limit: 12,
        resolution: 'standard_resolution',
        accessToken: '7336542448.1677ed0.c0deef072c7e44c5ae37a1984a156d3a',
        sortBy: 'most-recent',
        template: '<div class="flex"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class=" hover:opacity-75 "/></a></div>',
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

// What's On Section Animations

// let WhatsOnButton = document.getElementById('WhatsOnButton');
// let WhatsOnSection = document.getElementById('WhatsOnSection');

// let whatsOnAnimation = TweenMax.to(WhatsOnSection, .2, {
//         opacity: 1,
//         display: 'block',
//         height: 'auto'
//     })
//     .reverse();

// WhatsOnButton.addEventListener('click', function () {
//     whatsOnAnimation.reversed(!whatsOnAnimation.reversed());
// })

// let WhatsOnButton2 = document.getElementById('WhatsOnButton2');
// let WhatsOnSection2 = document.getElementById('WhatsOnSection2');

// let whatsOnAnimation2 = TweenMax.to(WhatsOnSection2, .2, {
//         opacity: 1,
//         display: 'block',
//         height: 'auto'
//     })
//     .reverse();

// WhatsOnButton2.addEventListener('click', function () {
//     whatsOnAnimation2.reversed(!whatsOnAnimation2.reversed());
// })
// let WhatsOnButton3 = document.getElementById('WhatsOnButton3');
// let WhatsOnSection3 = document.getElementById('WhatsOnSection3');

// let whatsOnAnimation3 = TweenMax.to(WhatsOnSection3, .2, {
//         opacity: 1,
//         display: 'block',
//         height: 'auto'
//     })
//     .reverse();

// WhatsOnButton3.addEventListener('click', function () {
//     whatsOnAnimation3.reversed(!whatsOnAnimation3.reversed());
// })
// let WhatsOnButton4 = document.getElementById('WhatsOnButton4');
// let WhatsOnSection4 = document.getElementById('WhatsOnSection4');

// let whatsOnAnimation4 = TweenMax.to(WhatsOnSection4, .2, {
//         opacity: 1,
//         display: 'block',
//         height: 'auto'
//     })
//     .reverse();

// WhatsOnButton4.addEventListener('click', function () {
//     whatsOnAnimation4.reversed(!whatsOnAnimation4.reversed());
// })
// let WhatsOnButton5 = document.getElementById('WhatsOnButton5');
// let WhatsOnSection5 = document.getElementById('WhatsOnSection5');

// let whatsOnAnimation5 = TweenMax.to(WhatsOnSection5, .2, {
//         opacity: 1,
//         display: 'block',
//         height: 'auto'
//     })
//     .reverse();

// WhatsOnButton5.addEventListener('click', function () {
//     whatsOnAnimation5.reversed(!whatsOnAnimation5.reversed());
// })

// Volunteer Sections

// let VolBtn = document.getElementById('Test');
// let VolSec = document.getElementById('VolSec');

// let volunteerAnimation = TweenMax.to(VolSec, .2, {
//         opacity: 1,
//         display: 'block',
//         height: 'auto'
//     })
//     .reverse();

// VolBtn.addEventListener('click', function () {
//     volunteerAnimation.reversed(!volunteerAnimation.reversed());
// })
