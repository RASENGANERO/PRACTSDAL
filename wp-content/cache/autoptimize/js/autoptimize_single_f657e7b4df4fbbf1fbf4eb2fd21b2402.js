jQuery(document).ready(function($){$('#ccbd-popup-calc-type').selectmenu({change:function(event,ui){$('#ccbd-popup-calc-type-m').val(ui.item.value);$('#vid_raboty').val(ui.item.value);$('#ccbd-popup-calc-type-m').selectmenu('refresh');}});$('body').on('click','.ccbd-form-label',function(event){$(this).next().next().trigger('click');});if($('#ccbd-reviews-swiper').length>0)
{let ccbd_reviews_swiper=new Swiper('#ccbd-reviews-swiper',{spaceBetween:50,slidesPerView:1,pagination:{el:'.swiper-pagination',clickable:true,},navigation:{nextEl:'.swiper-button-next',prevEl:'.swiper-button-prev',},breakpoints:{768:{slidesPerView:2,},1024:{slidesPerView:3,},}});}});