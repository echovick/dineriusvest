<footer>
    <div class="uk-section uk-section-muted uk-padding-large uk-padding-remove-horizontal uk-margin-medium-top">
        <div class="uk-container">
            <div class="uk-grid-medium" data-uk-grid="">
                <div class="uk-width-expand@m">
                    <div class="footer-logo">
                        <img class="uk-display-block" src="{{ asset('img/logo.png') }}"
                            alt="footer-logo" width="134" height="23" data-uk-img="">
                    </div>
                    <p class="uk-text-large uk-margin-small-top">Invest with financial thinking.</p>
                    <p class="uk-visible@m">4 Kinnoull Street, Perth, Scotland, PH1 5EN. United Kingdom.                         <br>
                        311 S WACKER DR<br>
                        CHICAGO<br>
                        60606<br>
                        IL - United States
                    </p>
                </div>
                <div class="uk-width-3-5@m">
                    <div class="uk-child-width-1-3@s uk-child-width-1-3@m" data-uk-grid="">
                        <div>
                            <h4><span>Products</span></h4>
                            <ul class="uk-list uk-link-text">
                                <li><a href="#">General Investing (Stocks, CFDs,...)</a></li>
                                <li><a href="#">Actively Managed Portfolios</a></li>
                                <li><a href="#">Denariusvest Smart Strategy (DIC)</a></li>
                                <li><a href="#">Private Equity</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4><span>Resources</span></h4>
                            <ul class="uk-list uk-link-text">
                                <li><a href="{{ url('contact') }}">Help Centre</a></li>
                                <li><a href="{{ url('about') }}">Payments & Fee Structure</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4><span>Company</span></h4>
                            <ul class="uk-list uk-link-text">
                                <li><a href="{{ url('about') }}">Our story</a></li>
                                <li><a href="#">Our leadership</a></li>
                                <li><a href="{{ url('contact') }}">Contact us</a></li>
                                <li><a href="#">Partners</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1 uk-margin-large-top in-offset-bottom-10">
                    <h6><i class="fas fa-exclamation-triangle uk-text-danger uk-margin-small-right"></i>Risk
                        warning</h6>
                    <p class="uk-text-small">Please note that the investment products available on this platform
                        encompass a range of complex derivatives, including digitals and contracts for difference
                        (CFDs). Trading these products involves a high level of risk, as leverage can amplify both
                        potential gains and losses. It is important to carefully consider your investment goals and risk
                        tolerance before engaging in trading activities. Please ensure that you fully comprehend the
                        risks associated with these financial products and invest responsibly with funds you can afford
                        to lose. Prioritize your understanding of secure and responsible trading practices before
                        proceeding.</a></p>
                    <hr>
                    <div class="uk-grid uk-flex uk-flex-middle" data-uk-grid="">
                        <div class="uk-width-1-2@m">
                            <div class="uk-grid-small uk-flex uk-child-width-1-4@s uk-flex uk-child-width-1-5@m in-payment-method uk-text-center"
                                data-uk-grid="">
                                <div>
                                    <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                        <img src="{{ asset('img/paymentmethods/in-wave-visa.svg') }}" alt="wave-payment"
                                            width="59" height="22" data-uk-img="">
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                        <img src="{{ asset('img/paymentmethods/in-wave-mastercard.svg') }}" alt="wave-payment"
                                            width="59" height="22" data-uk-img="">
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                        <img src="{{ asset('img/paymentmethods/in-wave-skrill.svg') }}" alt="wave-payment"
                                            width="59" height="22" data-uk-img="">
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-small uk-card-body">
                                        <img src="{{ asset('img/paymentmethods/in-wave-paypal.svg') }}" alt="wave-payment"
                                            width="59" height="22" data-uk-img="">
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-small uk-card-body uk-visible@m">
                                        <img src="{{ asset('img/paymentmethods/in-wave-neteller.svg') }}" alt="wave-payment"
                                            width="59" height="22">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-2@m uk-flex uk-flex-right@m">
                            <!-- social media begin -->
                            <div class="uk-flex social-media-list">
                                <div><a href="#"
                                        class="color-instagram text-decoration-none"><i class="fab fa-instagram"></i>
                                        Instagram</a></div>
                            </div>
                            <!-- social media end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section uk-section-secondary uk-padding-remove-vertical">
        <div class="uk-container">
            <div class="uk-grid">
                <div class="uk-width-3-4@m uk-visible@m">
                    <ul class="uk-subnav uk-subnav-divider">
                        <li><a href="#">Regulations & Reports</a></li>
                        {{-- <li><a href="#">Legal documents</a></li> --}}
                        <li><a href="#">Important information</a></li>
                        <li><a href="#">Policies</a></li>
                        <li><a href="{{ url('contact') }}">Public relations</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="{{ url('support-center') }}">Support Center</a></li>
                    </ul>
                </div>
                <div class="uk-width-expand@m uk-text-right@m">
                    <p class="copyright-text">© 2020 Deneriusvest Inc.</p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- to top begin -->
<a href="#" class="to-top uk-visible@m" data-uk-scroll>
    Top<i class="fas fa-chevron-up"></i>
</a>
<!-- to top end -->

<!-- javascript -->
<script src="{{ asset('js/vendors/tradingview-widget.min.js') }}"></script>
<script src="{{ asset('js/utilities.min.js') }}"></script>
<script src="{{ asset('js/config-theme.js') }}"></script>
</body>

</html>
