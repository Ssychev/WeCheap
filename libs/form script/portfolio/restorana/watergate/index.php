<div class="container-fluid portfolioModal" id="portfolioModal__doc">
  <div class="row">
    <div class="col-lg-6 p-0">
      <ul id="imageGallery">
        <li data-thumb="/img/portfolio/watergate/1.jpg" data-src="/img/portfolio/watergate/1.jpg">
          <img src="/img/portfolio/watergate/1.jpg" class="portfolioModal__image" />
        </li>
        <li data-thumb="/img/portfolio/watergate/2.jpg" data-src="/img/portfolio/watergate/2.jpg">
          <img src="/img/portfolio/watergate/2.jpg" class="portfolioModal__image" />
        </li>
        <li data-thumb="/img/portfolio/watergate/3.jpg" data-src="/img/portfolio/watergate/3.jpg">
          <img src="/img/portfolio/watergate/3.jpg" class="portfolioModal__image" />
        </li>
        <li data-thumb="/img/portfolio/watergate/4.jpg" data-src="/img/portfolio/watergate/4.jpg">
          <img src="/img/portfolio/watergate/4.jpg" class="portfolioModal__image"/>
        </li>
        <li data-thumb="/img/portfolio/watergate/5.jpg" data-src="/img/portfolio/watergate/5.jpg">
          <img src="/img/portfolio/watergate/5.jpg" class="portfolioModal__image"/>
        </li>
        <li data-thumb="/img/portfolio/watergate/6.jpg" data-src="/img/portfolio/watergate/6.jpg">
          <img src="/img/portfolio/watergate/6.jpg" class="portfolioModal__image"/>
        </li>
        <li data-thumb="/img/portfolio/watergate/7.jpg" data-src="/img/portfolio/watergate/7.jpg">
          <img src="/img/portfolio/watergate/7.jpg" class="portfolioModal__image"/>
        </li>
      </ul>
		</div>
		<div class="col-lg-6 p-0">
			<div class="portfolioModal__block">
				<h2 class="modal-title portfolioModal__title" id="portfolioModalLongTitle">
        	Ресторан «Watergate» в отеле «Wardenclyffe Volgo-Balt»
        </h2>
        <div class="portfolioModal__info">
        	<div class="portfolioModal__item">
        		<img src="/img/icons/size.svg" alt="" class="portfolioModal__icon">
        		<p class="portfolioModal__value">
        			97м<sup>2</sup>
        		</p>
        	</div>
        	<div class="portfolioModal__item">
        		<img src="/img/icons/clock.svg" alt="" class="portfolioModal__icon">
        		<p class="portfolioModal__value">
        			40 дней
        		</p>
        	</div>
        	<div class="portfolioModal__item">
        		<img src="/img/icons/wallet.svg" alt="" class="portfolioModal__icon">
        		<p class="portfolioModal__value">
        			470 000 &#8381;
        		</p>
        	</div>
        </div>
        <p class="portfolioModal__description">
        	Ресторан «Watergate» расположен в цокольном этаже гостиничного комплекса «Wardenclyffe Volgo-Balt” и включает в себя: зал для Гостей (97 кв.м.) на 40-70 посадочных мест, бар-стойку и «открытую» кухню. Ресторан «Watergate» сочетает в себе атмосферу уюта, изысканную кухню, безукоризненное обслуживание и по-европейски элегантный интерьер.
        </p>
        <div class="cta portfolioModal__cta" data-toggle="modal" data-target="#callModal">
					<a href="#" class="cta__btn cta__btn_sec">
						Заказать проект
					</a>
				</div>
			</div>
		</div>
    <button type="button" class="portfolioModal__close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true" class="portfolioModal__cls">&times;</span>
    </button>
	</div>
</div>

 <script src="/bitrix/templates/gh/js/lightslider.min.js"></script>
  <script src="/bitrix/templates/gh/js/lightgallery.min.js"></script>
  <script src="/bitrix/templates/gh/js/lg-fullscreen.min.js"></script>
  <script>
    $('#imageGallery').lightSlider({
        gallery:true,
        item:1,
        thumbItem:4,
        slideMargin:0,
        galleryMargin: -40,
        thumbMargin: 15,
        enableDrag: false,
        controls: false,
        currentPagerPosition:'middle',
        responsive : [
          {
            breakpoint:767.8,
            settings: {
              thumbItem:3,
              thumbMargin: 20,
            }
          },
          {
            breakpoint:479.8,
            settings: {
              thumbItem:2,
              thumbMargin: 30,
            }
          }
        ],
        onSliderLoad: function(el) {
          el.lightGallery({
            selector: '#imageGallery .lslide'
          });
        }
    });
  </script>