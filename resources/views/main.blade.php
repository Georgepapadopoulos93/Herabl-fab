<!DOCTYPE html>
#include:libraries=places;
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/script.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCojgiav8kJxwSHGggpIGgKFw-8ywXVa5Q&callback=initMap" async defer></script>

    <script>
        var map;
        var geocoder;

        function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 37.7749, lng: -122.4194},
            zoom: 8
        });
        geocoder = new google.maps.Geocoder();
        }

        function search() {
        var address = document.getElementById('address').value;
        var city = document.getElementById('city').value;
        var state = document.getElementById('state').value;
        var zip = document.getElementById('zip').value;
        
        var fullAddress = address + ', ' + city + ', ' + state + ' ' + zip;
        
        geocoder.geocode({'address': fullAddress}, function(results, status) {
            if (status === 'OK') {
            var location = results[0].geometry.location;
            map.setCenter(location);
            var marker = new google.maps.Marker({
                map: map,
                position: location
            });
            } else {
            alert('Geocode was not successful for the following reason: ' + status);
            }
        });
        }
    </script>
    <title>Herbal - Fabyouless</title>
</head>


<body >
          
    <header class="product-meta-header">
       <div class="container">
            <a class="logo" href="">
            <img width="141" height="141" src="https://dfjahi50i61tq.cloudfront.net/wp-content/plugins/wp-customisations-fabyouless-ecommerce/assets/img/herbal-essences.png" 
            data-lazy-src="https://dfjahi50i61tq.cloudfront.net/wp-content/plugins/wp-customisations-fabyouless-ecommerce/assets/img/herbal-essences.png" 
            data-ll-status="loaded" class="entered lazyloaded">

            </a>
       </div>
    </header>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="entry-content">

                <div class="container page-container"> 
                  
                        <div class="wrapper">   
                            <h1 style="text-align: center" class="custom_heading">Book Your Free Beauty Treatment</h1>
                            <p style="text-align: center;">
                                'Nearly there. To organise your free beauty treatment appointment, please complete
                                <strong>Fabyouless</strong>
                                simple
                                <strong>Appointment request form</strong>
                            </p>

                            <P style="text-align: center;">
                                "If you have trouble, please click on the ? in the blue circle for"
                                <strong>FAQs</strong>
                                and to
                                <strong>Contact Us</strong>
                            </P>
                        </div>                                                                                                               
                
                    <h1 style="text-align: center " class="custom_heading">Step 1: Find a participating salon near you</h1>
                
                <div class="venues-with-map venues-with-map-inline clearfix" data-disable-links="true">

                    <div class="left-column-serchbar">
                    <div id="map" style="height: 400px; width: 50%;"></div>
                        <form id="venues-filter" class="venues-filter" action="   " autocomplete="off">
                            <div class="form-group form-group-address-range claerfix">
                                <div class="form-group-address">
                                    <input id="address" class="form-control pac-target-input" name="address" placeholder="Location..." onclick="this.select();" type="text" aria-label="Address" autocomplete="off">
                                    <button id="get-current-location" class="current-location" title="Get current location">
                                        <span class="icon icon-loading hidden">
                                        <i class="fa fa-spinner fa-spin loading" aria-hidden="true"></i>
                                        </span>
                                        <span class="icon icon-location"></span>
                                    </button>
                                    <input id="address-lat" type="hidden" name="address-lat" value="">
                                    <input id="address-lng" type="hidden" name="address-lng" value="">
                                    <input id="address-postalcode" type="hidden" name="address-postalcode" value="">
                                    <input id="address-suggest" type="hidden" name="address-suggest" value="">
                                    <span id="address-error" class="error hidden">This field is required.</span>
                                </div>
                                    <div class="form-group-range">
                                        <select id="range" class="form-control pull-left select2-hidden-accessible" aria-label="Range" tabindex="-1" aria-hidden="true" data-select2-id="select2-data-range">
                                            <option value="1">1 mi.</option>
                                            <option value="2">2 mi.</option>
                                            <option value="5" selected="selected" data-select2-id="select2-data-18-6kj4">5 mi.</option>
                                            <option value="10">10 mi.</option>
                                        </select>
                                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-17-44sl" style="width: 90px;">
                                        <span class="selection">
                                            <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-range-container" aria-controls="select2-range-container">
                                                <span class="select2-selection__rendered" id="select2-range-container" role="textbox" aria-readonly="true" title="5 mi.">5 mi.</span>
                                                <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                            </span>
                                        </span>
                                        <span class="dropdown-wrapper" aria-hidden="true">
                                            <b role="presentation"></b>
                                        </span>
                                    </span>
                                    </div>

                                </div>

                            </div>
                        
                        </form>
                    </div>
                    <div class="column-no-padding right-column-map">
                        <div class="venue-map-wrapper">
                            <textarea id="venues-data" class="hidden" aria-label="Locations">false</textarea>
                                <div id="venues-map" data-venues="" style="position: relative;overflow: hidden;">
                                    <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                        <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                            <div>
                                                <button draggable="false" aria-label="Keyboard shortcuts" title="Keyboard shortcuts" type="button" style="background: none transparent; display: block; border: none; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; z-index: 1000002; outline-offset: 3px; right: 0px; bottom: 0px; transform: translateX(100%);"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <h1 style="text-align: center" class="custom_heading">Step 2: Add your acticvation cocde</h1>
                <div class="activation_container">
                    <div class="wrapper">


                    <form id="vcglf_actication_code" novalidate="novalidate">
                        <label for ="vcglf_activation_code">Activation Code </label>
                        <input type="text" class="form-control no-label" autocomplete="off" name="vcglf_activation_code" id="activation_code" placeholder="" value="">
                        
                        <label id="activation_code-error" class="error" for="activation_code" style>
                            This field is required.
                        </label>
                        <input type="hidden" id="activation_code_coupon_id"value="107473">
                        <input type="hidden" id ="activation_code_product_id"value>
                        <!--
                        <span class="icon">
                            <svg xmlns="http://www.we.org/2000/svg" vieBox="0 0 490.95 490.05" xml:space="preserve">
                                <path d="M418.275 418.275c95.7-95.7 95.7-250.8 0-346.5s-250.8-95.7-346.5 0-95.7 250.8 0 346.5 250.9 95.7 346.5 0zm-261.1-210.7 55.1 55.1 120.7-120.6 42.7 42.7-120.6 120.6-42.8 42.7-42.7-42.7-55.1-55.1 42.7-42.7z"></path>
                            </svg>
                        </span>
                        -->

                    </form>
                </div>
                               


                </div>
            
    

                    



            <h1 style="text-align: center" class="custom_heading">Step 3: Appointment Request Form</h1>
            <div class="wrapper">
                    <div class="sgv-product-add-to-cart-container text-left">
                        <form class="sgv-product-add-to-cart" action="" method="post" autocomplete="off">
                            <p> 
                                <label for="product_add_to_cart_postal_code">
                                    Your postcode<span class="required">*</span>
                                </label>
                                <input id="product_add_to_cart_postal_code" class="form-control sgv-day-picker valid" type="text" name="product_add_to_cart_postal_code" />
                            </p>
                            <p>
                                <label for="product_add_to_cart_salon">
                                    Preferred salon<span class="required">*</span>
                                </label>
                                <input id="product_add_to_cart_salon" class="form-control error" type="text" name="product_add_to_cart_salon" aria-required="true" aria-describedby="product_add_to_cart_salon-error" aria-invalid="true">
                                <em id="product_add_to_cart_salon-error" class="error">This field is required.</em>
                            </p>
                            <p>
                                <label for="product_add_to_cart_treatments">
                                    Treatment<span class="required">*</span>
                                </label>
                                    <select id="product_add_to_cart_treatments" class="treatments form-control error" name="product_add_to_cart_treatments" aria-required="true" aria-describedly="product_add_to_cart_treatments-error" aria-invaled="true">
                                        <option value="">Please select</option>
                                            <option value="blow-dry">Blow Dry</option>
                                            <option value="manicure">Manicure</option>
                                            <option value="pedicure">Pedicure</option>
                                            <option value="back-neck-shoulder-massage">Back Neck and Shoulder Massage</option>
                                            <option value="facial">Facial</option>
                                    </select>
                                    <em id="product_add_to_cart_treatments-error" class="error">This field is required.</em>
                            <p>
                                Please selected 3 preferred dates. These must be at least 2 weeks from today and at least 2 weeks apart but no later than 30/9/23.        
                            </p>
                            <p>
                                    <label for="product_add_to_cart_day_1">
                                        Day 1<span class="required">*</span>
                                    </label>
                                    <input id="product_add_to_cart_day_1" class="form-control sgv-day-picker flatpickr-input active" type="text" name="product_add_to_cart_day_1" readonly="readonly">
                                    <span id="product_add_to_cart_day_1_clear" class="input-clear-button">Clear</span>
                            </p>
                            <p>
                                <label for="product_add_to_cart_day_2">
                                    Day 2<span class="required">*</span>
                                </label>
                                    <input id="product_add_to_cart_day_2" class="form-control sgv-day-picker" type="text" name="product_add_to_cart_day_2" disabled  />
                                    <span id="product_add_to_cart_day_2_clear" class="input-clear-button">Clear</span>
                            </p>
                            <p>
                                <label for="product_add_to_cart_day_3">
                                    Day 3<span class="required">*</span>
                                </label>
                                <input id="product_add_to_cart_day_3" class="form-control sgv-day-picker" type="text" name="product_add_to_cart_day_3" disabled />
                                <span id="product_add_to_cart_day_3_clear" class="input-clear-button">Clear</span>
                            </p>
                            <p class="submit-button">
                                <input type="hidden" name="sgv-product-id" value="107472" />
                                <input type="hidden" name="sgv-action-id" value="svg-product-add-to-cart" />
                                <input type="hidden" id="sgv-product-add-to-cart-nonce" name="sgv-product-add-to-cart-nonce" value="a3a148c6d4" /><input type="hidden" name="_wp_http_referer" value="/herbal/" />            <button class="form-control btn btn-primary" type="submit">
                                    Continue                <span class="arrow">
                                </span>
                                </button>
                            </p>
                        </form>
                            
                    </div>
                </div>
                </div>
            </div>   
        </main>
    </div>

    <footer class="product-meta-footer">
        <div class="container">
            <div class="text-center">
                <div class="footer-powered-by">
                    Powered by
                    <a href="https://www.fabyouless.co.uk/" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1110 254" aria-hidden="true">
        					<use xlink:href="https://www.fabyouless.co.uk/wp-content/themes/subscription-group-fabyouless/map.svg#svg-fabyouless-logo-large"></use>
        				</svg>
        			<span class="sr-only">fabyouless</span>
        			</a>
                </div>
            </div>
        </div>
    </footer>

    <div class="flatpickr-calender animate arrowTop arrowLeft " tabindex="-1" style="top:1359.98px; left 404.333px; rigth: auto;">
        <div class="flatpickr-months">
            <span class="flatpickr-prev-month flatpickr-disabled">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                    <g></g>
                    <path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path>
                </svg>
            </span>
            <div class="flatpickr-month">
            <div class="flatpickr-current-month">
                <select class="flatpickr-monthDropdown-months" aria-label="Month" tabindex="-1">
                    <option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March</option>
                    <option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April</option>
                    <option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May</option>
                    <option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June</option>
                    <option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July</option>
                    <option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August</option>
                    <option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September</option>
                </select>
                <div class="numInputWrapper">
                    <input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year" min="2023" max="2023" disabled="">
                    <span class="arrowUp"></span>
                    <span class="arrowDown"></span>
                </div>
            </div>
            </div>
        </div>                           
    </div>
    <div class="flatpickr-innerContainer">
        <div class="flatpickr-rContainer">
            <div class="flatpickr-weekdays">
            <div class="flatpickr-weekdaycontainer">
                <span class="flatpickr-weekday">Sun</span>
                <span class="flatpickr-weekday">Mon</span>
                <span class="flatpickr-weekday">Tue</span>
                <span class="flatpickr-weekday">Wed</span>
                <span class="flatpickr-weekday">Thu</span>
                <span class="flatpickr-weekday">Fri</span>
                <span class="flatpickr-weekday">Sat
                </span>
            </div>
            </div>
            <div class="flatpickr-days" tabindex="-1">
                <div class="dayContainer">
                    <span class="flatpickr-day prevMonthDay flatpickr-disabled" aria-label="February 26, 2023">26</span>
                    <span class="flatpickr-day prevMonthDay flatpickr-disabled" aria-label="February 27, 2023">27</span>
                    <span class="flatpickr-day prevMonthDay flatpickr-disabled" aria-label="February 28, 2023">28</span>
                    <span class="flatpickr-day flatpickr-disabled" aria-label="March 1, 2023">1</span>
                    <span class="flatpickr-day flatpickr-disabled" aria-label="March 2, 2023">2</span>
                    <span class="flatpickr-day flatpickr-disabled" aria-label="March 3, 2023">3</span>
                    <span class="flatpickr-day flatpickr-disabled" aria-label="March 4, 2023">4</span>
                    <span class="flatpickr-day today flatpickr-disabled" aria-label="March 5, 2023" aria-current="date">5</span>
                    <span class="flatpickr-day flatpickr-disabled" aria-label="March 6, 2023">6</span>
                    <span class="flatpickr-day flatpickr-disabled" aria-label="March 7, 2023">7</span>
                    <span class="flatpickr-day flatpickr-disabled" aria-label="March 8, 2023">8</span>
                    <span class="flatpickr-day flatpickr-disabled" aria-label="March 9, 2023">9</span>
                    <span class="flatpickr-day flatpickr-disabled" aria-label="March 10, 2023">10</span>
                    <span class="flatpickr-day flatpickr-disabled" aria-label="March 11, 2023">11</span>
                    <span class="flatpickr-day flatpickr-disabled" aria-label="March 12, 2023">12</span>
                    <span class="flatpickr-day flatpickr-disabled" aria-label="March 13, 2023">13</span>
                    <span class="flatpickr-day flatpickr-disabled" aria-label="March 14, 2023">14</span>
                    <span class="flatpickr-day flatpickr-disabled" aria-label="March 15, 2023">15</span>
                    <span class="flatpickr-day flatpickr-disabled" aria-label="March 16, 2023">16</span>
                    <span class="flatpickr-day flatpickr-disabled" aria-label="March 17, 2023">17</span>
                    <span class="flatpickr-day flatpickr-disabled" aria-label="March 18, 2023">18</span>
                    <span class="flatpickr-day " aria-label="March 19, 2023" tabindex="-1">19</span>
                    <span class="flatpickr-day " aria-label="March 20, 2023" tabindex="-1">20</span>
                    <span class="flatpickr-day " aria-label="March 21, 2023" tabindex="-1">21</span>
                    <span class="flatpickr-day " aria-label="March 22, 2023" tabindex="-1">22</span>
                    <span class="flatpickr-day " aria-label="March 23, 2023" tabindex="-1">23</span>
                    <span class="flatpickr-day " aria-label="March 24, 2023" tabindex="-1">24</span>
                    <span class="flatpickr-day " aria-label="March 25, 2023" tabindex="-1">25</span>
                    <span class="flatpickr-day " aria-label="March 26, 2023" tabindex="-1">26</span>
                    <span class="flatpickr-day " aria-label="March 27, 2023" tabindex="-1">27</span>
                    <span class="flatpickr-day " aria-label="March 28, 2023" tabindex="-1">28</span>
                    <span class="flatpickr-day " aria-label="March 29, 2023" tabindex="-1">29</span>
                    <span class="flatpickr-day " aria-label="March 30, 2023" tabindex="-1">30</span>
                    <span class="flatpickr-day " aria-label="March 31, 2023" tabindex="-1">31</span>
                    <span class="flatpickr-day nextMonthDay" aria-label="April 1, 2023" tabindex="-1">1</span>
                    <span class="flatpickr-day nextMonthDay" aria-label="April 2, 2023" tabindex="-1">2</span>
                    <span class="flatpickr-day nextMonthDay" aria-label="April 3, 2023" tabindex="-1">3</span>
                    <span class="flatpickr-day nextMonthDay" aria-label="April 4, 2023" tabindex="-1">4</span>
                    <span class="flatpickr-day nextMonthDay" aria-label="April 5, 2023" tabindex="-1">5</span>
                    <span class="flatpickr-day nextMonthDay" aria-label="April 6, 2023" tabindex="-1">6</span>
                    <span class="flatpickr-day nextMonthDay" aria-label="April 7, 2023" tabindex="-1">7</span>
                    <span class="flatpickr-day nextMonthDay" aria-label="April 8, 2023" tabindex="-1">8</span>
                </div>
            </div>
        </div>

    </div>

    <script src="https://dfjahi50i61tq.cloudfront.net/wp-content/plugins/sg-venues/assets/js/flatpickr.min.js" id="sgv-frontend-flatpicker-js-js" defer=""></script>
    <form>
  <label for="address">Address:</label>
  <input type="text" id="address" name="address"><br><br>
  
  <label for="city">City:</label>
  <input type="text" id="city" name="city"><br><br>
  
  <label for="state">State:</label>
  <input type="text" id="state" name="state"><br><br>
  
  <label for="zip">Zip code:</label>
  <input type="text" id="zip" name="zip"><br><br>
  <div id="map" style="height: 400px; width: 50%;"></div>
  <input type="button" value="Search" onclick="search()">
</form>
</body>
</html>