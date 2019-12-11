/*
 * Bootstrap 3.3.6 IconPicker - jQuery plugin for Icon selection
 *
 * Copyright (c) 20013 A. K. M. Rezaul Karim<titosust@gmail.com>
 * Modifications (c) 20015 Paden Clayton<fasttracksites.com>
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *   https://github.com/titosust/Bootstrap-icon-picker
 *
 * Version:  1.0.1
 *
 */

(function($) {

	$.fn.iconPicker = function( options ) {

		var mouseOver=false;
		var $popup=null;
		var icons=["ficon-24hour-check-in",
			"ficon-24-hour-front-desk",
			"ficon-24-hour-room-service",
			"ficon-24-hour-security",
			"ficon-desktop-ic-black-down-arrow",
			"ficon-desktop-ic-profile",
			"ficon-internet",
			"ficon-iron",
			"ficon-additional-bathroom",
			"ficon-additional-information",
			"ficon-additional-toilet",
			"ficon-air-conditioning",
			"ficon-air-purifier",
			"ficon-airport-transfer-big",
			"ficon-airport-transfer-small",
			"ficon-airport-transfer",
			"ficon-alarm-clock",
			"ficon-american-express",
			"ficon-apartment",
			"ficon-app-android",
			"ficon-app-apple",
			"ficon-app-windos",
			"ficon-arrow-right",
			"ficon-assembly-pin-border",
			"ficon-assembly-restaurant",
			"ficon-atm-cash-machine-on-site",
			"ficon-babysitting",
			"ficon-badminton-court",
			"ficon-balcony-terrace",
			"ficon-balloon",
			"ficon-bathrobes",
			"ficon-bathroom-basics",
			"ficon-bathroom-phone",
			"ficon-bathrooms",
			"ficon-bathtub",
			"ficon-bbq-facilities",
			"ficon-bc-global-card",
			"ficon-bed",
			"ficon-bedroom",
			"ficon-bicycle-rental",
			"ficon-billiards",
			"ficon-blackout-curtains",
			"ficon-boats",
			"ficon-book-now-pay-later",
			"ficon-book-without-a-creditcard",
			"ficon-bowling-alley",
			"ficon-breakfast",
			"ficon-business-center",
			"ficon-business-facilities",
			"ficon-buzzer-wireless-intercom",
			"ficon-callcenter",
			"ficon-cancellation-policy-non-refund-special-condition",
			"ficon-canoe",
			"ficon-car-hire",
			"ficon-car-park",
			"ficon-car-power-charging-station",
			"ficon-carbon-monoxide-detector",
			"ficon-carpeting",
			"ficon-carrouselarrow-left",
			"ficon-carrouselarrow-right",
			"ficon-cash",
			"ficon-casino",
			"ficon-chapel",
			"ficon-check-box",
			"ficon-child",
			"ficon-children-high-chair",
			"ficon-children-playground",
			"ficon-city-view",
			"ficon-cleaning-products",
			"ficon-close-popup",
			"ficon-closet",
			"ficon-clothes-dryer-pay",
			"ficon-clothes-rack",
			"ficon-clothes-washer-free",
			"ficon-coffee-shop",
			"ficon-coffee-tea-maker",
			"ficon-complimentary-bottled-water",
			"ficon-complimentary-instant-coffee",
			"ficon-complimentary-tea",
			"ficon-concierge",
			"ficon-control-close-circle",
			"ficon-control-collapse",
			"ficon-control-expand",
			"ficon-coupon",
			"ficon-credit-card-bf",
			"ficon-credit-card",
			"ficon-currency-exchange",
			"ficon-daily-housekeeping",
			"ficon-newspapers",
			"ficon-dart-board",
			"ficon-deal-gift-card",
			"ficon-deal-insider",
			"ficon-desk",
			"ficon-diners-clubs-card",
			"ficon-discover-card",
			"ficon-dishwasher",
			"ficon-diving",
			"ficon-domestic-rates",
			"ficon-dot-seperater",
			"ficon-dressing-room",
			"ficon-dryer",
			"ficon-dryer",
			"ficon-dvd-cd-player",
			"ficon-edit",
			"ficon-electric-blanket",
			"ficon-elevator",
			"ficon-email-envelope",
			"ficon-essentials",
			"ficon-essentials",
			"ficon-executive-floor",
			"ficon-executive-lounge-access",
			"ficon-express-check-in-check-out",
			"ficon-private-check-in-check-out",
			"ficon-extra-long-beds",
			"ficon-facebook-logo",
			"ficon-facilities-for-disabled-guests",
			"ficon-family-room",
			"ficon-fan",
			"ficon-favorite",
			"ficon-fax-machine",
			"ficon-feedback",
			"ficon-fire-extinguisher",
			"ficon-fireplace",
			"ficon-first-aid-kit",
			"ficon-fishing",
			"ficon-fitness-center",
			"ficon-flash-deal",
			"ficon-flight-earn",
			"ficon-free-cancellation",
			"ficon-free-welcome-drink",
			"ficon-free-wifi-in-all-rooms",
			"ficon-garden",
			"ficon-gift-card",
			"ficon-gift-souvenir-shop",
			"ficon-golf-course-on-site",
			"ficon-golf-course-within-3-km",
			"ficon-grocery-deliveries",
			"ficon-guest-house",
			"ficon-gym",
			"ficon-hair-dryer",
			"ficon-halal-restaurant",
			"ficon-half-full-board",
			"ficon-hangers",
			"ficon-heating",
			"ficon-hiking-trails",
			"ficon-holiday-house",
			"ficon-homestay",
			"ficon-horse-riding",
			"ficon-hot-spring-bath",
			"ficon-hot-tub",
			"ficon-hotel-book-last",
			"ficon-hotel-great-location",
			"ficon-hotel-people-looking",
			"ficon-hotel-star-half",
			"ficon-hotel-wifi",
			"ficon-hover-details",
			"ficon-humidifier",
			"ficon-icon-arrow-down",
			"ficon-icon-arrow-up",
			"ficon-in-room-safe",
			"ficon-in-room-tablet",
			"ficon-in-room-video-games",
			"ficon-indoor-pool",
			"ficon-infant",
			"ficon-infirmary",
			"ficon-info-with-circle",
			"ficon-inhouse-movies",
			"ficon-insider-deal-desktop",
			"ficon-interconnecting-room-available",
			"ficon-ipod-docking-station",
			"ficon-islamic-prayer-room",
			"ficon-jacuzzi-bathtub",
			"ficon-jcb",
			"ficon-karaoke",
			"ficon-kids-club",
			"ficon-kitchen",
			"ficon-kitchenware",
			"ficon-kosher-restaurant",
			"ficon-laptop-friendly-workspace",
			"ficon-laptop-safe-box",
			"ficon-laundromat",
			"ficon-laundry-service",
			"ficon-library",
			"ficon-limit-deal",
			"ficon-line-close",
			"ficon-line-empty-circle",
			"ficon-linens",
			"ficon-lockers",
			"ficon-luggage-storage",
			"ficon-luggage",
			"ficon-map-airport",
			"ficon-map-attraction",
			"ficon-map-city",
			"ficon-map-night",
			"ficon-map-room",
			"ficon-map-transportation",
			"ficon-map-view",
			"ficon-massage",
			"ficon-mastercard",
			"ficon-max-occupancy-plus",
			"ficon-max-occupancy",
			"ficon-meeting-facilities",
			"ficon-menu-bookings",
			"ficon-microwave",
			"ficon-bar",
			"ficon-minus-thin",
			"ficon-minus-with-circle",
			"ficon-mirror",
			"ficon-mosquitonet",
			"ficon-motorbike",
			"ficon-mountain-view",
			"ficon-nav-back",
			"ficon-nav-down-bold",
			"ficon-nav-down-thin",
			"ficon-nav-left-bold",
			"ficon-nav-left-thin",
			"ficon-nav-right-bold",
			"ficon-nav-right-thin",
			"ficon-nav-up-bold",
			"ficon-nav-up-thin",
			"ficon-negative",
			"ficon-nightclub",
			"ficon-non-smoking-room",
			"ficon-noti-balloon-answer",
			"ficon-noti-balloon-question",
			"ficon-noti-check-mark-rounded-inner",
			"ficon-noti-check-mark-sharp",
			"ficon-notice-info",
			"ficon-number-of-rooms",
			"ficon-outdoor-pool",
			"ficon-pay-at-the-place",
			"ficon-payment-option-no-credit-card",
			"ficon-personal-cheque",
			"ficon-pets-allowed",
			"ficon-photocopying",
			"ficon-pin",
			"ficon-pin-star",
			"ficon-plus-thin",
			"ficon-plus-with-circle",
			"ficon-pointsmax-line-logo",
			"ficon-pointsmax-logo",
			"ficon-pointsmax",
			"ficon-pool-kids",
			"ficon-pool",
			"ficon-poolside-bar",
			"ficon-portable-wifi-rental",
			"ficon-positive",
			"ficon-postal-service",
			"ficon-printer",
			"ficon-private-beach",
			"ficon-private-entrance",
			"ficon-private-pool",
			"ficon-promotion-right",
			"ficon-question-mark",
			"ficon-refrigerator",
			"ficon-residence",
			"ficon-restaurant",
			"ficon-right-tick",
			"ficon-room-promotion-for-flashdeal",
			"ficon-room-promotion-for-mobiledeal",
			"ficon-room-promotion-for-otherdeal",
			"ficon-room-promotion-for-smartdeal",
			"ficon-room-promotion-super-savedeal",
			"ficon-room-promotion",
			"ficon-room-service",
			"ficon-safety-deposit-boxes",
			"ficon-salon",
			"ficon-sauna",
			"ficon-scale",
			"ficon-search-calendar",
			"ficon-search-icon",
			"ficon-seating-area",
			"ficon-secure-icon",
			"ficon-separate-dining-area",
			"ficon-separate-living-room",
			"ficon-separate-shower-and-tub",
			"ficon-sewing-kit",
			"ficon-shampoo",
			"ficon-shared-kitchen",
			"ficon-shoeshine-kit",
			"ficon-shopping",
			"ficon-shops",
			"ficon-shower",
			"ficon-shrine",
			"ficon-shuttle-service",
			"ficon-ski-equipment-rentals",
			"ficon-ski-lessons",
			"ficon-skiing",
			"ficon-slippers",
			"ficon-smoke-detector",
			"ficon-smoking-allowed",
			"ficon-smoking-area",
			"ficon-snorkeling",
			"ficon-sofa",
			"ficon-solarium",
			"ficon-soundproofing",
			"ficon-spa",
			"ficon-special-condition",
			"ficon-sqm",
			"ficon-squash-courts",
			"ficon-steamroom",
			"ficon-suitable-for-events",
			"ficon-surfing-lessons",
			"ficon-table-tennis",
			"ficon-tamil",
			"ficon-tax-receipt-available",
			"ficon-taxi-service",
			"ficon-telephone",
			"ficon-tennis-courts",
			"ficon-theme-park",
			"ficon-thin-arrow-left",
			"ficon-thin-arrow-right",
			"ficon-thumb-up-line",
			"ficon-thumb-up-solid",
			"ficon-thumb-up",
			"ficon-ticket-service",
			"ficon-time-icon",
			"ficon-toiletries",
			"ficon-tooltip",
			"ficon-topic-calendar",
			"ficon-topic-filter",
			"ficon-topic-hotel-highlight",
			"ficon-topic-search",
			"ficon-topic-user",
			"ficon-tours",
			"ficon-towels",
			"ficon-triangle-warning",
			"ficon-trouser-press",
			"ficon-shared-lounge-tv-area",
			"ficon-tv",
			"ficon-umbrella",
			"ficon-user-font-icon",
			"ficon-valet-parking",
			"ficon-vending-machine",
			"ficon-views",
			"ficon-villa",
			"ficon-visa",
			"ficon-wake-up-service",
			"ficon-walking",
			"ficon-washer",
			"ficon-water-park",
			"ficon-water-sports-motorized",
			"ficon-water-sports-non-motorized",
			"ficon-watersports-equipment-rentals",
			"ficon-wifi",
			"ficon-wooden-parqueted-flooring",
			"ficon-x-icon",
			"ficon-yoga-room",
			"ficon-free-wi-fi-in-all-rooms",
			"ficon-wi-fi-in-public-areas",
		];
		var settings = $.extend({

		}, options);
		return this.each( function() {
			element=$(this);
			if(!settings.buttonOnly && $(this).data("iconPicker")==undefined ){
				$this=$(this).addClass("form-control");
				$wraper=$("<div/>",{class:"input-group"});
				$this.wrap($wraper);

				$button=$("#service-table #pickerIcon");
				$this.after($button);
				(function(ele){
					$button.click(function(){
						createUI(ele);
						showList(ele,icons);
					});
				})($this);

				$(this).data("iconPicker",{attached:true});
			}

			function createUI($element){
				$popup=$('<div/>',{
					css: {
						'top':$element.offset().top+$element.outerHeight()+6,
						'left':$element.offset().left
					},
					class:'icon-popup'
				})

				$popup.html('<div class="ip-control"> \
						          <ul> \
						            <li><a href="javascript:;" class="btn" data-dir="-1"><span class="ficon ficon-nav-left-thin"></span></a></li> \
						            <li><input type="text" class="ip-search" placeholder="Search" /></li> \
						            <li><a href="javascript:;"  class="btn" data-dir="1"><span class="ficon ficon-nav-right-thin"></span></a></li> \
						          </ul> \
						      </div> \
						     <div class="icon-list"> </div> \
					         ').appendTo("body");


				$popup.addClass('dropdown-menu').show();
				$popup.mouseenter(function() {  mouseOver=true;  }).mouseleave(function() { mouseOver=false;  });

				var lastVal="", start_index=0,per_page=30,end_index=start_index+per_page;
				$(".ip-control .btn",$popup).click(function(e){
					e.stopPropagation();
					var dir=$(this).attr("data-dir");
					start_index=start_index+per_page*dir;
					start_index=start_index<0?0:start_index;
					if(start_index+per_page<=360){
						$.each($(".icon-list>ul li"),function(i){
							if(i>=start_index && i<start_index+per_page){
								$(this).show();
							}else{
								$(this).hide();
							}
						});
					}else{
						start_index=180;
					}
				});

				$('.ip-control .ip-search',$popup).on("keyup",function(e){
					if(lastVal!=$(this).val()){
						lastVal=$(this).val();
						if(lastVal==""){
							showList(icons);
						}else{
							showList($element, $(icons)
								.map(function(i,v){
									if(v.toLowerCase().indexOf(lastVal.toLowerCase())!=-1){return v}
								}).get());
						}

					}
				});
				$(document).mouseup(function (e){
					if (!$popup.is(e.target) && $popup.has(e.target).length === 0) {
						removeInstance();
					}
				});

			}
			function removeInstance(){
				$(".icon-popup").remove();
			}
			function showList($element,arrLis){
				$ul=$("<ul>");

				for (var i in arrLis) {
					$ul.append("<li><a href=\"#\" title="+arrLis[i]+"><span class=\"ficon ficon-size "+arrLis[i]+"\"></span></a></li>");
				};

				$(".icon-list",$popup).html($ul);
				$(".icon-list li a",$popup).click(function(e){
					e.preventDefault();
					var title=$(this).attr("title");
					$("#service-table :input[name=icon]").val("ficon "+title);
					removeInstance();
				});
			}

		});
	}

}(jQuery));
