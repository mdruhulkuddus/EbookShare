/* back to top */


$(document).ready(function(){
        $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
    $('body,html').animate({
    scrollTop: 0
}, 400);
    return false;
});
});

    /* slick slider for author */

$('.author-logo-slider').slick({
    slidesToShow: 4,
    slidesToscrool: 1,
    dots: true,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true
});

/* show more */

function toggleText() {
    var points = document.getElementById("points");
    var showMoreText = document.getElementById("moreText");
    var buttonText = document.getElementById("textButton");

    if (points.style.display === "none") {
    showMoreText.style.display = "none";
    points.style.display = "inline";
    buttonText.innerHTML = "Show More";
}
    else {
    showMoreText.style.display = "inline";
    points.style.display = "none";
    buttonText.innerHTML = "Show Less";
}
}

/*    read more */

    let noOfChar = 200;
    let contents = document.querySelectorAll(".reviewsUser");
    contents.forEach(reviewsUser => {
    if(reviewsUser.textContent.length < noOfChar){
    reviewsUser.nextElementSibling.style.display = "none";
}
    else {
    let displayText = reviewsUser.textContent.slice(0, noOfChar);
    let moreText = reviewsUser.textContent.slice(noOfChar);
    reviewsUser.innerHTML = `${displayText} <span class="dots"> ...</span>
<span class="hide more">${moreText}</span>`;
}
});
    function readMore(mybtn){
    let post = mybtn.parentElement;
    post.querySelector(".dots").classList.toggle("hide");
    post.querySelector(".more").classList.toggle("hide");
    mybtn.textContent == "Read More" ? mybtn.textContent = "Read Less" : mybtn.textContent = "Read More";
}

/* product slider */

$(document).ready(function()
    {
        if($('.bbb_viewed_slider').length)
    {
        var viewedSlider = $('.bbb_viewed_slider');

        viewedSlider.owlCarousel(
    {
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        nav:false,
        dots:false,
        responsive:
    {
        0:{items:1},
        575:{items:2},
        768:{items:3},
        991:{items:4},
        1199:{items:6}
    }
    });

        if($('.bbb_viewed_prev').length)
    {
        var prev = $('.bbb_viewed_prev');
        prev.on('click', function()
    {
        viewedSlider.trigger('prev.owl.carousel');
    });
    }

        if($('.bbb_viewed_next').length)
    {
        var next = $('.bbb_viewed_next');
        next.on('click', function()
    {
        viewedSlider.trigger('next.owl.carousel');
    });
    }
    }
    });

// /* cart */
// const addCart = document.querySelectorAll('.add-bag');
// //console.log(addCart);
// const  cartShow = document.querySelector('.shopping-bag span');
// for(var i = 0; i < addCart.length; i++){
//     addCart[i].addEventListener('click', () => {
//         cartCount();
//     })
// }
// function cartCount(){
//     prdCount = localStorage.getItem('cartsCount');
//     prdCount = parseInt(prdCount);
//     if(prdCount){
//         localStorage.setItem('cartsCount', prdCount + 1);
//         cartShow.textContent = prdCount + 1;
//     }
//     else
//     {
//         localStorage.setItem('cartsCount', 1);
//         prdCount = 1;
//         cartShow.textContent = prdCount;
//     }
// }
// function displayCart(){
//     localStorage.setItem('cartsCount', 0);
//     let prdCount = 0;
//     cartShow.textContent = prdCount;
// }
// displayCart();
