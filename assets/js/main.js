!function(){"use strict";let a=(a,b=!1)=>(a=a.trim(),b)?[...document.querySelectorAll(a)]:document.querySelector(a),b=(d,e,f,c=!1)=>{let b=a(e,c);b&&(c?b.forEach(a=>a.addEventListener(d,f)):b.addEventListener(d,f))},e=a(".back-to-top");if(e){let c=()=>{window.scrollY>100?e.classList.add("active"):e.classList.remove("active")};window.addEventListener("load",c),((a,b)=>{a.addEventListener("scroll",b)})(document,c)}b("click",".mobile-nav-toggle",function(b){a("#navbar").classList.toggle("navbar-mobile"),this.classList.toggle("bi-list"),this.classList.toggle("bi-x")}),b("click",".navbar .dropdown > a",function(b){a("#navbar").classList.contains("navbar-mobile")&&(b.preventDefault(),this.nextElementSibling.classList.toggle("dropdown-active"))},!0);let f=a("#hero-carousel-indicators");a("#heroCarousel .carousel-item",!0).forEach((b,a)=>{0===a?f.innerHTML+="<li data-bs-target='#heroCarousel' data-bs-slide-to='"+a+"' class='active'></li>":f.innerHTML+="<li data-bs-target='#heroCarousel' data-bs-slide-to='"+a+"'></li>"}),window.addEventListener("load",()=>{let c=a(".portfolio-container");if(c){let d=new Isotope(c,{itemSelector:".portfolio-item"}),e=a("#portfolio-flters li",!0);b("click","#portfolio-flters li",function(a){a.preventDefault(),e.forEach(function(a){a.classList.remove("filter-active")}),this.classList.add("filter-active"),d.arrange({filter:this.getAttribute("data-filter")}),d.on("arrangeComplete",function(){AOS.refresh()})},!0)}}),GLightbox({selector:".portfolio-lightbox"}),new Swiper(".portfolio-details-slider",{speed:400,loop:!0,autoplay:{delay:5e3,disableOnInteraction:!1},pagination:{el:".swiper-pagination",type:"bullets",clickable:!0}});let d=a(".skills-content");d&&new Waypoint({element:d,offset:"80%",handler:function(b){a(".progress .progress-bar",!0).forEach(a=>{a.style.width=a.getAttribute("aria-valuenow")+"%"})}}),window.addEventListener("load",()=>{AOS.init({duration:1e3,easing:"ease-in-out",once:!0,mirror:!1})})}()