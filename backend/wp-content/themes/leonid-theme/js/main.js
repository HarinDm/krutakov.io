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
    loop: false,
    navigation: {
      nextEl:'.swiper-button-next',
      prevEl:'.swiper-button-prev',
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
   

    // }
    breakpoints: {
      // when window width is >= 320px
      320: {
         slidesPerView: 1.5,
        // spaceBetween: 20
      },
      // when window width is >= 768px
      768: {
         slidesPerView: 3,
        // spaceBetween: 20
      },
      // when window width is >= 1024px
      1024: {
         slidesPerView: 4,
        // spaceBetween: 20
      },
      // when window width is >= 1600px
      1600: {
        slidesPerView: 5,
        // spaceBetween: 30
      },
      // when window width is >= 1920px
      1920: {
        slidesPerView: 7,
        // spaceBetween: 40
      }
    },
  });
}





var sliderArticlesLogo = document.querySelector('#sliderArticlesLogo');
 
if(sliderArticlesLogo) {
   var SwiperSliderArticlesLogo = new Swiper(SwiperSliderArticlesLogo, {
    slidesPerView: 4,
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
        slidesPerView: 3,
        spaceBetween: 40
      },
      1920:{
        slidesPerView: 3,
        spaceBetween: 40
      },

    }
  });
}






// var ticker = document.querySelector(".ticker");
// var list = document.querySelector(".ticker__list");
// var clone = list.cloneNode(true);

// ticker.append(clone);


$(".custom-select").each(function() {
  var classes = $(this).attr("class"),
      id      = $(this).attr("id"),
      name    = $(this).attr("name");
  var template =  '<div class="' + classes + '">';
      template += '<span class="custom-select-trigger">' + 'все СМИ' + '</span>';
      template += '<div class="custom-options">';
      $(this).find("option").each(function() {
        template += '<a href='+$(this).data("href")+' class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</a>';
      });
  template += '</div></div>';
  
  $(this).wrap('<div class="custom-select-wrapper"></div>');
  $(this).hide();
  $(this).after(template);
});
$(".custom-option:first-of-type").hover(function() {
  $(this).parents(".custom-options").addClass("option-hover");
}, function() {
  $(this).parents(".custom-options").removeClass("option-hover");
});
$(".custom-select-trigger").on("click", function() {
  $('html').one('click',function() {
    $(".custom-select").removeClass("opened");
  });
  $(this).parents(".custom-select").toggleClass("opened");
  event.stopPropagation();
});
$(".custom-option").on("click", function() {
  $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
  $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
  $(this).addClass("selection");
  $(this).parents(".custom-select").removeClass("opened");
  $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
});


const articleCards = document.querySelectorAll('.article-card');
if(articleCards && articleCards.length !== 0){
  const plateLeftShort = document.querySelector('.plate-articles .plate__left');
  const plateRightFull = document.querySelector('.plate-articles .plate__right');
  // card.classList.add('.article-card_short');
  // сделать значение по-дефолту
  // 2 способа 
  // 1 - пишешь html разметку с классами для первого случая например 1 состояние это короткие карточки
  // 2 - после загрузки страницы добавbть этот класc через js. 
  function onCardShortWidth(e) {
    console.log(e);
    plateLeftShort.classList.add('isActive');
    plateRightFull.classList.remove('isActive');
    articleCards.forEach(function(card){
      card.classList.add('article-card_short');
      // card.classList.toggle('article-card_short');
      card.classList.remove('article-card_full');
      // card.classList.toggle('.article-card_full');
    });
    
    // document.getElementById('foo').style.cssText = 'width: 100%;'
    // document.getElementById('foo').style.cssText = 'width: 100%;'
  }
  
  function onCardFullWidth() {
    plateLeftShort.classList.remove('isActive');
    plateRightFull.classList.add('isActive');
    articleCards.forEach(function(card){
      card.classList.remove('article-card_short');
      card.classList.add('article-card_full');
    });
  }
}


const tabLinks = document.querySelectorAll('.tab-link');
if(tabLinks && tabLinks.length !== 0) {


  const plateToggles = document.querySelector('.plate-articles-toggles');
  const articlesToggles = document.querySelector('.articles-select');


  tabLinks.forEach((item)=>{
    item.addEventListener('click', (element)=>{
      if(element.target.textContent === 'Заметки'){
        plateToggles.classList.remove('plate-articles_none');
        console.log('plate-articles Становятся видимыми');
      } else {
          plateToggles.classList.add('plate-articles_none');
          console.log('блоки не видны');
      };
      if(element.target.textContent === 'я в СМИ'){
        articlesToggles.classList.remove('articles-select_none');
        console.log('articles-select Становятся видимыми');
      } else {
        articlesToggles.classList.add('articles-select_none');
          console.log('блоки не видны');
      }
    });
  });
}





