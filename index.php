<?php include 'header.php';?>
<body class="appLayout fad">
    <div id="page">
        <header role="banner" class="headerWithTitle">
            <div class="amino-stripe gradient"></div>

            <div id="header-bg"></div>

            <div id="header-inner">
                <a id="amino-menu-opener"
                   class="fullscreen-modal-opener"
                   data-fullscreen-modal="amino-menu"
                   data-keyboard-focus-selector="ul a:first"
                   href="#navigation"
                   title="navigation menu"
                   role="button"
                   aria-controls="navigation"
                   aria-expanded="false"
                   tabindex="1">

                    <div class="hamburger">Menu</div>
                </a>
                <div id="account-menu">
                    <div id="account-menu-opener"></div>
                </div>
                <a id="logo" href="/">
                    <span class="icon icon-chevron-left" id="logo-back-arrow"></span>
                    medbook
                </a>

                <h1 class="header-title">Find a doctor</h1>
                <h1 class="header-title-framed"><strong>Find a Doctor</strong> &amp; <strong>Book Your Appointment</strong></h1>
                <div id="header-decorators"></div>

                <nav role="navigation" id="header-nav">
                    <ul id="header-nav-inner">
                        <li class="amino-nav-item">
                            <a href="/" class="control amino-nav-link " >
                                Home
                            </a>
                        </li>
                        <li class="amino-nav-item">
                            <a href="#" class="control amino-nav-link " >
                                About
                            </a>
                        </li>
                        <li class="amino-nav-item">

                            <a href="#" class="control amino-nav-link " >
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <?php require 'menu.php';?>

        <div id="content" role="main">
            <div class="results-builder" id="fad-results-builder">
                <div class="results-builder-results-screen">
                    <div class="maplist with-param-reflector doctor-maplist" id="fad-maplist">

                        <div class="map maplist-map results-builder-background-map">
                            <div class="map-canvas"></div>
                            <a href="#" class="map-button map-modified-button button">
                                Redo search in this area
                            </a>
                            <div class="results-builder-map-overlay"></div>
                        </div>

                        <div class="maplist-lists">
                            <div class="maplist-mobile-list"></div>
                            <div class="maplist-desktop-list" id="maplist-desktop-list"></div>
                        </div>

                        <div class="map-detailcard-wrap">
                            <div class="map-detailcard-overlay"></div>
                            <div class="map-detailcard-scroll">
                                <div class="map-detailcard-content"></div>
                            </div>
                        </div>

                        <div id="doctor-profile-reviews"></div>

                        <div class="results-builder-results-overlay"></div>

                        <div class="results-builder-filter-menu">
                            <div id="fad-filterrific"></div>
                        </div>

                        <div id="cost-calculator"></div>

                    </div>
                </div>

                <div class="results-builder-initial-loading-screen">
                    <div class="results-builder-message-screen-content">

                        <div class="results-builder-message-screen-title">
                            <span id="fad-loading-matches-count">Finding</span>
                            matches
                        </div>

                        <p class="results-builder-message-screen-text fad-loading-pool">
                            out of 893 thousand doctors
                        </p>

                        <div class="matchomatic" id="fad-matchomatic"></div>

                        <p class="results-builder-message-screen-text">
                            We’re finding the doctors who have<br />
                            the most experience with your needs.
                        </p>
                    </div>
                </div>

                <div class="results-builder-wizard-screen">
                    <div class="wizard">
                        <div class="wizard-steps">
                            <div class="wizard-step" data-wizard-step="reason">
                                <div class="wizard-step-content">
                                    <h2 class="wizard-step-title">First, your condition or procedure</h2>
                                    <input id="fad-wizard-reason-searchbox"
                                           class="wizard-input searchbox"
                                           data-wizard-field="reason"
                                           role="search"
                                           type="text"
                                           tabindex="1" />
                                    <div class="wizard-step-input-footnote">
                                        Examples:
                                        <a href="#" class="searchbox-example" data-searchbox="fad-wizard-reason-searchbox" data-searchbox-value="asthma">asthma</a>,
                                        <a href="#" class="searchbox-example" data-searchbox="fad-wizard-reason-searchbox" data-searchbox-value="pregnancy">pregnancy</a>,
                                        <a href="#" class="searchbox-example" data-searchbox="fad-wizard-reason-searchbox" data-searchbox-value="mammogram">mammogram</a>
                                    </div>
                                </div>
                                <div class="wizard-step-footer">
                                    <button class="wizard-next-button button-cta" tabindex="2">Next</button>
                                </div>
                            </div>
                            <div class="wizard-step" id="fad-wizard-bio-step" data-wizard-step="bio">
                                <div class="wizard-step-content">
                                    <h2 class="wizard-step-title">Next, a little about the patient</h2>
                                    <div class="wizard-field-row">
                                        <div class="wizard-field">
                                            <div class="wizard-field-label">Sex (optional):</div>
                                            <div class="segment segment-optional" id="fad-wizard-gender-segment" data-wizard-field="sex">
                                                <input type="radio" name="gender" value="f" id="fad-wizard-gender-female" tabindex="1" />
                                                <label class="segment-label first" for="fad-wizard-gender-female">F</label>
                                                <input type="radio" name="gender" value="m" id="fad-wizard-gender-male" tabindex="1" />
                                                <label class="segment-label last" for="fad-wizard-gender-male">M</label>
                                            </div>
                                        </div>
                                        <div class="wizard-field">
                                            <div class="wizard-field-label">Age:</div>
                                            <input id="fad-wizard-age-input" class="age-input" tabindex="2" data-wizard-field="age" />
                                        </div>
                                    </div>
                                </div>
                                <div class="wizard-step-footer">
                                    <button class="wizard-next-button button-cta" tabindex="3">Next</button>
                                </div>
                            </div>
                            <div class="wizard-step" id="fad-wizard-location-step" data-wizard-step="location">
                                <div class="wizard-step-content">
                                    <h2 class="wizard-step-title">What’s your location?</h2>
                                    <input id="fad-wizard-location-searchbox"
                                           class="wizard-input searchbox"
                                           data-wizard-field="location"
                                           role="search"
                                           type="text"
                                           tabindex="1" />

                                    <div class="wizard-step-input-footnote">
                                        <div id="fad-wizard-geolocator" class="geolocator">
                                            <span class="geolocator-available">
                                                <a class="geolocator-link control linkWithIcon" href="#">
                                                    <span class="icon icon-location-active"></span>
                                                    <span class="linkWithIcon-text">Use current location</span>
                                                </a>
                                                <span class="geolocator-pending">locating &hellip;</span>
                                            </span>
                                            <span class="geolocator-unavailable">
                                                Example:
                                                <a href="#"
                                                   class="searchbox-example"
                                                   data-searchbox="fad-wizard-location-searchbox"
                                                   data-searchbox-value="ChIJIQBpAG2ahYAR_6128GcTUEo">
                                                    San Francisco, CA
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="wizard-step-footer">
                                    <button class="wizard-next-button button-cta" tabindex="2">Next</button>
                                </div>
                            </div>
                            <div class="wizard-step" data-wizard-step="insurance">
                                <div class="wizard-step-content">
                                    <h2 class="wizard-step-title">Your health insurance (optional)</h2>
                                    <input id="fad-wizard-insurance-searchbox"
                                           class="wizard-input searchbox"
                                           data-wizard-field="insurance"
                                           role="search"
                                           type="text"
                                           tabindex="1" />
                                    <div class="wizard-step-input-footnote">
                                        Example:
                                        <a href="#" class="searchbox-example"
                                           data-searchbox="fad-wizard-insurance-searchbox"
                                           data-searchbox-value="payer-united-healthcare"
                                           >Arab Orient Insurance(Gig)</a>
                                    </div>
                                </div>
                                <div class="wizard-step-footer">
                                    <button class="wizard-next-button button-cta" tabindex="2">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="results-builder-no-results-screen">
                    <div class="results-builder-message-screen-content">

                        <div class="results-builder-message-screen-title">0 matches</div>

                        <p class="results-builder-message-screen-text">
                            We’re sorry, but we couldn’t find any doctors for you. We’ll make
                            a note of it to improve. Please try again with these tips:
                        </p>

                        <ul class="results-builder-message-screen-list">
                            <li class="results-builder-message-screen-list-item">
                                Leave the insurance blank. Our booking assistants can check your
                                coverage.
                            </li>
                        </ul>

                        <a href="#" class="button results-builder-restarter">Try again</a>
                    </div>
                </div>

                <div class="results-builder-error-screen">
                    <div class="results-builder-message-screen-content">

                        <div class="results-builder-message-screen-title">
                            Something went wrong
                        </div>

                        <p class="results-builder-message-screen-text">
                            Sorry about that! We’ve made a note of it, and we’ll figure out
                            what happened.
                        </p>

                        <a href="#" class="button results-builder-restarter">Try again</a>
                    </div>
                </div>
            </div>

            <div id="booking-modal" class="gradient">

                <div id="login-modal"></div>

                <div id="booking-wizard-screen">

                    <div id="booking-wizard-header">
                        <div id="booking-wizard-header-icon"></div>
                        Book an appointment
                    </div>

                    <div id="booking-wizard">
                        <div class="wizard">
                            <div class="wizard-steps">
                                <div class="wizard-step" data-wizard-step="name">
                                    <div class="wizard-step-content">
                                        <h2 class="wizard-step-title">What is your full name?</h2>
                                        <input type="text" class="wizard-input text-input" tabindex="1" data-wizard-field="name" />
                                        <div class="wizard-step-input-footnote">
                                            The doctor’s office needs it to book you.
                                        </div>
                                    </div>
                                    <div class="wizard-step-footer">
                                        <button class="wizard-next-button button-cta" tabindex="2">Next</button>
                                    </div>
                                </div>

                                <div class="wizard-step" data-wizard-step="dob">
                                    <div class="wizard-step-content">
                                        <h2 class="wizard-step-title">What is your date of birth?</h2>
                                        <input type="text" class="wizard-input dob-input" placeholder="mm/dd/yyyy" tabindex="1" data-wizard-field="dob" />
                                        <div class="wizard-step-input-footnote">
                                            The doctor’s office needs it to book you.
                                        </div>
                                    </div>
                                    <div class="wizard-step-footer">
                                        <button class="wizard-next-button button-cta" tabindex="2">Next</button>
                                    </div>
                                </div>

                                <div class="wizard-step" data-wizard-step="preferred_method">
                                    <div class="wizard-step-content">
                                        <h2 class="wizard-step-title">How should we contact you to book?</h2>

                                        <div class="radio-group wizard-hifi-stack" data-radio-group-uncheckable="false" data-wizard-field="preferred_method">
                                            <div class="wizard-hifi-stack-item">
                                                <input type="radio" class="hifi" value="sms" name="contact" id="booking-preferred-method-sms" tabindex="1"/>
                                                <label class="hifi with-label" for="booking-preferred-method-sms"><span class="">Text message</span></label>
                                            </div>

                                            <div class="wizard-hifi-stack-item">
                                                <input type="radio" class="hifi" value="email" name="contact" id="booking-preferred-method-email" tabindex="2"/>
                                                <label class="hifi with-label" for="booking-preferred-method-email"><span class="">Email</span></label>
                                            </div>
                                        </div>

                                        <div class="wizard-step-input-footnote">
                                            <span class="sms-footnote">Standard messaging rates may apply.</span>
                                            <span class="email-footnote">You’ll receive a confirmation email shortly.</span>
                                        </div>
                                    </div>
                                    <div class="wizard-step-footer">
                                        <button class="wizard-next-button button-cta" tabindex="3">Next</button>
                                    </div>
                                </div>

                                <div class="wizard-step" data-wizard-step="phone">
                                    <div class="wizard-step-content">
                                        <h2 class="wizard-step-title">What’s your mobile phone number?</h2>
                                        <input type="text" class="wizard-input phone-input" tabindex="1" data-wizard-field="phone" />
                                        <div class="wizard-step-input-footnote">
                                            We’ll text you in a moment to confirm.
                                        </div>
                                    </div>
                                    <div class="wizard-step-footer">
                                        <button class="wizard-next-button button-cta" tabindex="2">Next</button>
                                    </div>
                                </div>



                                <div class="wizard-step" data-wizard-step="schedule">
                                    <div class="wizard-step-content">
                                        <h2 class="wizard-step-title">When is a good time for you?</h2>
                                        <textarea class="wizard-input text-input" tabindex="1" data-wizard-field="schedule"></textarea>
                                    </div>
                                    <div class="wizard-step-footer">
                                        <button class="wizard-next-button button-cta" tabindex="2">Next</button>
                                    </div>
                                </div>

                                <div class="wizard-step" data-wizard-step="insurance">
                                    <div class="wizard-step-content">
                                        <h2 class="wizard-step-title">Insurance company and plan name?</h2>
                                        <input type="text" class="wizard-input text-input" tabindex="1" data-wizard-field="insurance" />
                                        <div class="wizard-step-input-footnote">
                                            Example: Aetna Classic 3500
                                        </div>
                                    </div>
                                    <div class="wizard-step-footer">
                                        <button class="wizard-next-button button-cta" tabindex="2">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="booking-modal-success-screen-wrap">

                    <div class="booking-modal-success-screen verified">

                        <div class="concierge-icon">
                        </div>

                        <div class="booking-modal-success-title">
                            We’re on it!
                        </div>

                        <p id="booking-modal-success-text">
                            An Amino assistant will start making calls on your behalf to book your
                            appointment. You should receive a confirmation text in a moment.
                        </p>

                        <p>
                            If you have any questions, just reply to the text message or email us at
                            <a href="mailto:booking@amino.com" class="control">booking@amino.com</a>.
                        </p>

                        <button class="booking-modal-done-button button button-cta fullscreen-modal-closer" data-fullscreen-modal="booking-modal">Ok</button>

                    </div>


                    <div class="booking-modal-success-screen unverified">

                        <div class="confirm-icon">
                        </div>


                        <div class="almost-done-booking-success-body-text">
                            <div class="booking-modal-success-title">
                                Almost done!
                            </div>

                            <p>
                                We’ve sent you a confirmation email to complete your Amino account. <strong>You must follow the link in the email to proceed with booking.</strong>
                            </p>
                            <p>
                                Once you've confirmed your account, your Amino assistant will start booking your appointment.
                            </p>

                            <button class="booking-modal-done-button button button-cta fullscreen-modal-closer" data-fullscreen-modal="booking-modal">Ok</button>

                            <a href="#" class="booking-modal-resend-verification toggler" data-toggle-class="link-resent" data-target=".booking-modal-success-screen.unverified">Resend link</a>
                        </div>


                        <div class="link-resent-booking-success-body-text">
                            <div class="booking-modal-success-title">
                                Link resent!
                            </div>

                            <p>
                                Check your inbox for a new confirmation email and click on the link.
                            </p>

                            <button class="booking-modal-done-button button button-cta fullscreen-modal-closer" data-fullscreen-modal="booking-modal">Ok</button>
                        </div>

                    </div>
                </div>
                <div id="booking-modal-submitting-screen">
                    <div class="pulsing-spinner"></div>
                </div>

            </div>


        </div>

    </div>

    <div id="peekaboo"></div>
    
    <div id="amino-template-modal" class="template-modal"></div>

    <script type="text/javascript">
        var _AMINO_CONFIG = {
            env: 'prod',
            web_host: '//amino.com',
            ajax_urls: {
                topic_suggestions: '/ajax/suggestions/topics/',
                topic_suggestion_lookup: '/ajax/suggestions/topics/lookup/',
                insurance_carrier_suggestions: '/ajax/suggestions/insurance-carriers/',
                insurance_carrier_suggestion_lookup: '/ajax/suggestions/insurance-carriers/lookup/',
                provider_suggestions: '/ajax/suggestions/providers/',
                book_appointment: '/ajax/book-appointment/',
                subscribe: '/ajax/email/subscribe/',
                user_data: '/ajax/users/user-data/',
                dropdowns: {
                    costGeos: '/ajax/dropdowns/cost-geos/',
                    costTopics: '/ajax/dropdowns/cost-topics/'
                },
                user_profile: '/ajax/users/profile/',
                shorten_url: '/ajax/shorten-url/'
            },
            cookies: {
                employer: 'employer'
            },
            assets_path: '//dcaghjy7mrsmx.cloudfront.net/static',
            ENCOUNTERS_SAMPLE: 'about a billion',
            INTERACTIONS_COUNT: '5.0 billion',
            DOCTOR_COUNT: '893 thousand',
            PATIENT_COUNT: '188 million',
            DOCTOR_MIN_PATIENTS_TREATED: '10',
            SAMPLES: {"CAREMATCH": {"LENGTH": "two years", "YEARS": "2014\u0026ndash;2015"}, "EXPERIENCE": {"LENGTH": "two years", "YEARS": "2014\u0026ndash;2015"}, "FOCUS_AREAS": {"LENGTH": "two years", "YEARS": "2014\u0026ndash;2015"}, "TOP_REASONS": {"LENGTH": "two years", "YEARS": "2014\u0026ndash;2015"}},
            CSRF_TOKEN: '1479470056##427b9f54a2d913110c96933105af896a6aa91776'
        };
    </script>


    <!--[if lte IE 8]>
      
        <script type="text/javascript" src="//dcaghjy7mrsmx.cloudfront.net/static/js/amino-min-lib-ie8cc0b88a4.js" charset="utf-8"></script>
      
    <![endif]-->
    <!--[if gte IE 9]><!-->
    <script type="text/javascript" src="assets/js/medbook-min-lib.js"></script>
    <!--<![endif]-->


    <!--<script src="//maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBtnLQr6oKWvrygEpfmkVjyaSPKNQi7c6E"></script>-->
    <script src="//maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDxw2NA1UDpDeqF99qlc1W786X9lk8fWSA"></script>
    <script src="https://dcaghjy7mrsmx.cloudfront.net/static/js/vendor/markerwithlabel/markerwithlabel.min.js?t=1479160205"></script>



    <script type="text/javascript" src="assets/js/midbook-min-main.js"></script>



    <script type="text/javascript">
          (function ($, Amino, undefined) {
              var app = new Amino.apps.FADApp();
              app.init();

              if (Amino.framed) {
                  
              }
          }(jQuery, Amino));
    </script>


    <script src="assets/js/oct.js" type="text/javascript"></script>
<?php include 'footer.php';?>