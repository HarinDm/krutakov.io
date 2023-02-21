const buttoncopyToClipboard = document.querySelectorAll('[data-sharer="link"]')
function copyToClipboard(text) {
  var inputc = document.body.appendChild(document.createElement("input"));
  inputc.value = window.location.href;
  inputc.focus();
  inputc.select();
  document.execCommand('copy');
  inputc.parentNode.removeChild(inputc);
  alert("URL Copied.");
}

if(buttoncopyToClipboard){
  buttoncopyToClipboard.forEach((btn)=>{
    btn.onclick = () => {
      copyToClipboard();
    }
  })
}

console.log(1);
var sliderBannerBookmarks = document.querySelector('#sliderBannerBookmarks');
 
if(sliderBannerBookmarks) {
   var SwiperSliderBannerBookmarks = new Swiper(sliderBannerBookmarks, {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl:'.swiper-button-next',
      prevEl:'.swiper-button-prev',
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoint: {
      768: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      1600:{
        slidesPerView: 5,
        spaceBetween: 40
      },
      1920:{
        slidesPerView: 7,
        spaceBetween: 40
      },

    }
  });
}



// var ticker = document.querySelector(".ticker");
// var list = document.querySelector(".ticker__list");
// var clone = list.cloneNode(true);

// ticker.append(clone);
