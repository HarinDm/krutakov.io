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
var swiper = new Swiper("#sliderBannerBookmarks", {
  slidesPerView: 7,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

