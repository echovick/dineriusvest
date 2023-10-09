@extends('layouts.site.app')

@section('title', 'DENARIUSVEST - Home')

@section('content')
    <main>
        <!-- slideshow content begin -->
        <div class="uk-section uk-padding-remove-vertical in-slideshow-gradient">
            <div class="in-slideshow" data-uk-slideshow>
                <ul class="uk-slideshow-items uk-light">
                    <li>
                        <div class="uk-position-cover">
                            <img src="img/lianhao-qu-g3l_uPaRz7A-unsplash.jpg" alt="slideshow-image" width="1920"
                                height="700">
                        </div>
                        <span></span>
                        <div class="uk-container">
                            <div class="uk-grid" data-uk-grid>
                                <div class="uk-width-3-5@m">
                                    <div class="uk-overlay">
                                        <h1>DENARIUSVEST Revolutionizing Investment Standards worldwide</h1>
                                        <p class="uk-text-lead uk-visible@m">Experience a revolutionary investment approach
                                            with Denariusvest, setting us apart from the competition</p>
                                        <a href="{{ url('about') }}"
                                            class="uk-button uk-button-primary uk-border-rounded uk-visible@m"><i
                                                class="fas fa-scroll uk-margin-small-right"></i>Discover it now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-position-cover">
                            <img src="img/markus-spiske-vrbZVyX2k4I-unsplash.jpg"
                                data-src="img/markus-spiske-vrbZVyX2k4I-unsplash.jpg" alt="slideshow-image" data-uk-cover
                                width="1920" height="700" data-uk-img>
                        </div>
                        <span></span>
                        <div class="uk-container">
                            <div class="uk-grid" data-uk-grid>
                                <div class="uk-width-3-5@m">
                                    <div class="uk-overlay">
                                        <h1>DENARIUSVEST Revolutionizing Investment Standards worldwide</h1>
                                        <p class="uk-text-lead uk-visible@m">We empower our clients with complete control
                                            over their investments, maximizing gains and transforming the investment
                                            landscape.</p>
                                        <a href="#"
                                            class="uk-button uk-button-primary uk-border-rounded uk-visible@m"><i
                                                class="fas fa-scroll uk-margin-small-right"></i>Discover it now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-position-cover">
                            <img src="img/samson-ZGjbiukp_-A-unsplash.jpg" data-src="img/samson-ZGjbiukp_-A-unsplash.jpg"
                                alt="slideshow-image" data-uk-cover width="1920" height="700" data-uk-img>
                        </div>
                        <span></span>
                        <div class="uk-container">
                            <div class="uk-grid" data-uk-grid>
                                <div class="uk-width-3-5@m">
                                    <div class="uk-overlay">
                                        <h1>DENARIUSVEST Revolutionizing Investment Standards worldwide</h1>
                                        <p class="uk-text-lead uk-visible@m">Our firm commitment to excellence ensures
                                            unmatched transparency, reliability, and simplicity in our investment services.
                                        </p>
                                        <a href="#"
                                            class="uk-button uk-button-primary uk-border-rounded uk-visible@m"><i
                                                class="fas fa-scroll uk-margin-small-right"></i>Discover it now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="uk-container uk-light">
                    <ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-center"></ul>
                </div>
            </div>
        </div>
        <!-- slideshow content end -->

        <!-- section content begin -->
        <div class="uk-section uk-section-primary uk-padding-remove-vertical in-wave-1">
            <div class="uk-container">
                <div>
                    <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                        <div class="uk-width-expand">
                            <p style="font-size: 13px !important; text-align:center !important;">At Denariusvest, we
                                prioritize your unique requirements, offering a personalized experience
                                backed by cutting-edge technology and the most effective tools available. Our objective is
                                to generate substantial returns for you while minimizing risks and maintaining low charges.
                                We take pride in clearly illustrating the precise allocation of your assets, ensuring
                                complete visibility.
                                While it is important to acknowledge that every investment carries inherent risks, we want
                                to assure you that Denariusvest is fully equipped to handle and mitigate such risks. Our
                                team of experts employs advanced tools and strategies to proactively identify and address
                                potential risks before they become concerns.
                            </p>
                            <p style="font-size: 13px !important; text-align:center !important;">We invite you to explore
                                more about investment risk and gain insight into our proactive risk management approach. <a
                                    href="{{ url('risk-management') }}" style="text-decoration: underline">Learn More</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->

        <!-- section content begin -->
        <div class="uk-section in-offset-bottom-40 in-wave-6">
            <div class="uk-container">
                <div class="uk-grid-collapse uk-position-relative" data-uk-grid>
                    <div class="uk-position-bottom-right">
                        <img src="{{ asset('img/in-wave-background-2.png') }}" alt="wave-hq" width="540" height="513">
                    </div>
                    <div class="uk-width-1-1">
                        <h1>Join a club of more than <span class="in-highlight">260,000</span> investors</h1>
                    </div>
                    <div class="uk-width-3-5@m">
                        <div class="uk-grid-medium uk-child-width-1-2@s uk-child-width-1-2@m uk-margin-medium-top uk-margin-medium-bottom"
                            data-uk-grid>
                            <div>
                                <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="in-icon-wrap small transparent uk-text-primary uk-margin-small-right">
                                            <i class="fas fa-award fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4 class="uk-margin-remove">TRUSTWORTHY</h4>
                                        </div>
                                    </div>
                                    <p class="uk-margin-small-top">Denariusvest, a trusted partner, has been chosen and
                                        relied upon by more than 300,000 clients worldwide, managing an impressive portfolio
                                        of assets</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="in-icon-wrap small transparent uk-text-primary uk-margin-small-right">
                                            <i class="fas fa-tools fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4 class="uk-margin-remove">Advanced tools</h4>
                                        </div>
                                    </div>
                                    <p class="uk-margin-small-top">Access cutting-edge investment tools for enhanced
                                        decision-making and optimal investment outcomes.</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="in-icon-wrap small transparent uk-text-primary uk-margin-small-right">
                                            <i class="fas fa-users fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4 class="uk-margin-remove">RATING</h4>
                                        </div>
                                    </div>
                                    <p class="uk-margin-small-top"> With an outstanding rating of 4.82 based on over 11,000
                                        reviews, Denariusvest consistently earns the trust and satisfaction of our valued
                                        clients.</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="in-icon-wrap small transparent uk-text-primary uk-margin-small-right">
                                            <i class="fas fa-building fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4 class="uk-margin-remove">GLOBAL RECOGNITION</h4>
                                        </div>
                                    </div>
                                    <p class="uk-margin-small-top">Denariusvest enjoys recognition in 110 countries,
                                        diligently staying updated on regulatory requirements to guarantee comprehensive
                                        protection for your assets.</p>
                                </div>
                            </div>
                        </div>
                        <p class="uk-text-small uk-text-muted uk-margin-large-bottom">
                            <span class="uk-label in-label-small uk-text-uppercase uk-margin-small-right">Start
                                investing</span>
                            Start investing today and pave your way towards financial growth and prosperity<a
                                href="#">Join
                                now!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section in-wave-2">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-3-4@m">
                        <h1 class="uk-margin-remove-bottom">Industry-<span class="in-highlight">leading</span> investment
                            standards</h1>
                        <p class="uk-text-lead uk-text-muted uk-margin-small-top uk-margin-bottom">Get ultra-competitive
                            spreads and commissions across all asset classes. Receive even better rates as your volume
                            increases.</p>
                    </div>
                </div>
                <div class="uk-grid-medium uk-grid-match" data-uk-grid>
                    <div class="uk-width-1-2@s uk-width-1-4@m">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center"
                            style="background-image: url(img/in-wave-card-bg-1.png);">
                            <h5 class="uk-margin-remove">
                                <a href="#">High APY <i class="fas fa-chevron-right fa-xs"></i></a>
                            </h5>
                            <p class="uk-margin-remove">Maximize Earnings with High Annual Percentage Yield (APY)</p>
                            {{-- <h1 class="uk-margin-top">0.2</h1>
                            <p class="uk-margin-remove-top uk-margin-bottom">pip</p> --}}
                            <p>Experience the potential for substantial growth with Denariusvest impressive average APY of
                                12.6%. This surpasses traditional bank investment systems, delivering returns that are
                                twice as significant and 16 times the international average. Achieve your short-term and
                                long-term financial objectives with confidence.</p>
                        </div>
                    </div>
                    <div class="uk-width-1-2@s uk-width-1-4@m">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center"
                            style="background-image: url(img/in-wave-card-bg-2.png);">
                            <h5 class="uk-margin-remove">
                                <a href="#">Fees <i class="fas fa-chevron-right fa-xs"></i></a>
                            </h5>
                            <p class="uk-margin-remove">Secure Asset Protection and Minimal Fees </p>
                            {{-- <h1 class="uk-margin-top">0.4</h1>
                            <p class="uk-margin-remove-top uk-margin-bottom">on US500</p> --}}
                            <p>At Denariusvest, our focus is on optimizing your investment value. We have implemented a
                                low-cost commission fee structure and zero commission on various services to ensure that you
                                retain the maximum benefit from your invested funds, this distinguishes us from others in
                                the industry.</p>
                        </div>
                    </div>
                    <div class="uk-width-1-2@s uk-width-1-4@m">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center"
                            style="background-image: url(img/in-wave-card-bg-3.png);">
                            <h5 class="uk-margin-remove">
                                <a href="#">Automated Investment <i class="fas fa-chevron-right fa-xs"></i></a>
                            </h5>
                            <p class="uk-margin-remove">Smart Wealth Accumulation through Semi-Automated and fully
                                automated Investing </p>
                            {{-- <h1 class="uk-margin-top">$3</h1>
                            <p class="uk-margin-remove-top uk-margin-bottom">on US stocks</p> --}}
                            <p>Simplify your investment journey and navigate market fluctuations effortlessly with
                                Denariusvest's transparent and user-friendly investing platform. Our unique strategy and
                                diversified portfolios enable you to make intelligent and reliable financial decisions,
                                aiming for long-term growth or short-term gains. Trust in our expertise to guide you towards
                                building wealth effectively.</p>
                        </div>
                    </div>
                    <div class="uk-width-1-2@s uk-width-1-4@m">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center"
                            style="background-image: url(img/in-wave-card-bg-4.png);">
                            <h5 class="uk-margin-remove">
                                <a href="#">Management <i class="fas fa-chevron-right fa-xs"></i></a>
                            </h5>
                            <p class="uk-margin-remove">Tailored Management for Individual Success </p>
                            {{-- <h1 class="uk-margin-top">$1.25</h1>
                            <p class="uk-margin-remove-top uk-margin-bottom">per lot</p> --}}
                            <p>Leave the complexities to us. Denariusvest takes a personalized approach to serve each
                                client, dedicating meticulous attention to your specific financial goals, concerns, and
                                aspirations. We provide exceptional support and guidance, ensuring an unparalleled
                                experience, while also safeguarding your assets with utmost security.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section uk-section-muted uk-background-cover uk-background-center-center in-wave-7"
            style="background-image: url(img/in-wave-background-3.jpg);">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-3-4@m">
                        <h4 class="uk-text-primary uk-margin-remove-bottom">Invest with confidence</h4>
                        <h1 class="uk-margin-small-top uk-margin-remove-bottom">New level of <span
                                class="in-highlight">security</span></h1>
                        <div class="uk-grid-divider uk-child-width-1-2@s
uk-child-width-1-2@m uk-margin-medium-top"
                            data-uk-grid>
                            <div>
                                <img class="uk-margin-remove-bottom" src="img/in-wave-icon-8.svg" alt="wave-icon"
                                    width="64" height="64">
                                <h3 class="uk-margin-small-top">Regulations & funds</h3>
                                <p>Compliant with regulations, offering diverse funds tailored to meet your investment
                                    goals.</p>
                            </div>
                            <div>
                                <img class="uk-margin-remove-bottom" src="img/in-wave-icon-9.svg" alt="wave-icon"
                                    width="64" height="64">
                                <h3 class="uk-margin-small-top">Depth of protection</h3>
                                <p>Robust security measures ensure the utmost protection of your assets and investments.</p>
                            </div>
                        </div>
                        <div class="in-create-account uk-margin-medium-top">
                            <span class="uk-label in-label-small uk-text-uppercase uk-margin-small-bottom">Open your
                                account</span>
                            <p class="uk-margin-remove-top uk-visible@m">Connect with over 5 millions investors in the
                                world’s leading social investment network</p>
                            <form class="uk-grid-small" data-uk-grid>
                                <div class="uk-width-1-1 uk-width-1-4@m">
                                    <input class="uk-input uk-border-rounded" type="text" placeholder="Full name">
                                </div>
                                <div class="uk-width-1-1 uk-width-1-4@m">
                                    <input class="uk-input uk-border-rounded" type="text" placeholder="Email address">
                                </div>
                                <div class="uk-width-1-1 uk-width-1-4@m">
                                    <input class="uk-input uk-border-rounded" type="text" placeholder="Phone number">
                                </div>
                                <div class="uk-width-1-1 uk-width-1-4@m">
                                    <button class="uk-button uk-button-primary uk-border-rounded uk-width-expand">Create
                                        Account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->

        <!-- section content begin -->
        <div class="uk-section uk-section-muted uk-background-contain uk-background-center in-wave-3"
            style="background-image: url(img/in-wave-background-1.png);" data-uk-parallax="bgy: -200">
            <div class="uk-container">
                <div class="uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
                    <div class="uk-width-1-2@m">
                        {{-- <img class="uk-margin-bottom" src="{{ asset('img/in-wave-icon-5.svg') }}" data-src="{{ asset('img/in-wave-icon-5.svg') }}" alt="wave-icon" width="64" height="64" data-uk-img> --}}
                        <h1 class="uk-margin-remove"><span class="in-highlight">Denariusvest </span> Virtual <br>Trial
                        </h1>
                        <p>Our innovative virtual trial allows you to test your investment strategies in a risk-free
                            environment, mirroring real-life scenarios without any financial exposure. Enjoy the freedom to
                            explore and practice investing across all our investment products with unlimited virtual cash
                            and real-time quotes. Whether you're a seasoned investor or just starting, our free trial
                            simulator empowers you to discover what works best for achieving your financial goals. Take
                            advantage of this opportunity to refine your investment styles and make informed decisions with
                            confidence. Start your Denariusvest Virtual Trial today and unlock your potential for financial
                            success.</p>
                    </div>
                    <div class="uk-width-1-2@m">
                        <div class="uk-inline uk-dark in-wave-video uk-margin-small-bottom">
                            <img class="uk-border-rounded uk-width-1-1" src="{{ asset('img/in-signin-image.jpg') }}"
                                data-src="{{ asset('img/in-signin-image.jpg') }}" alt="wave-video" width="533"
                                height="355" data-uk-img>
                            <div class="uk-flex-top" data-uk-modal>
                                <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical in-iframe">
                                    <button class="uk-modal-close-outside" type="button" data-uk-close></button>
                                </div>
                            </div>
                        </div>
                        <p class="uk-text-small uk-text-muted">Explore the markets at your own pace with short online
                            courses. <a href="{{ url('/signup') }}"><span class="uk-label in-label-small">Sign
                                    up</span></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->

        <!-- section content begin -->
        <div class="uk-section in-wave-4">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-1-1 uk-text-center">
                        <h1 class="uk-margin-medium-bottom"><span class="in-highlight">Invest</span> With Us</h1>
                    </div>
                    <div class="uk-width-1-1">
                        <div class="uk-grid-medium uk-child-width-1-2@s
uk-child-width-1-5@m uk-text-center uk-margin-large-top uk-flex uk-flex-center"
                            data-uk-grid>
                            <div>
                                <img src="img/in-lazy.gif" data-src="img/in-wave-award.svg" alt="wave-award"
                                    width="71" height="58" data-uk-img>
                                <h6 class="uk-margin-small-top uk-margin-remove-bottom">Define Your Financial Goals</h6>
                                <p class="uk-text-small uk-margin-remove-top">Prioritize your aspirations by sharing your
                                    financial objectives and providing relevant details about yourself. By understanding
                                    your investment amount and personal preferences, we can determine the most suitable
                                    investment style tailored to your needs. Your success is our utmost priority</p>
                            </div>
                            <div>
                                <img src="img/in-lazy.gif" data-src="img/in-wave-award.svg" alt="wave-award"
                                    width="71" height="58" data-uk-img>
                                <h6 class="uk-margin-small-top uk-margin-remove-bottom">Select an Investment Style</h6>
                                <p class="uk-text-small uk-margin-remove-top">Choose from our diverse range of investment
                                    styles and portfolios, designed to cater to a variety of requirements. Should you
                                    require assistance in making this decision, our team is readily available to guide you
                                    towards selecting the program that best aligns with your goals.</p>
                            </div>
                            <div>
                                <img src="img/in-lazy.gif" data-src="img/in-wave-award.svg" alt="wave-award"
                                    width="71" height="58" data-uk-img>
                                <h6 class="uk-margin-small-top uk-margin-remove-bottom">Trust in Our Expertise</h6>
                                <p class="uk-text-small uk-margin-remove-top">Leave the rest to us knowing that our team of
                                    experts will adeptly manage your investments in accordance with your chosen investment
                                    style. With our comprehensive, all-in-one dashboard, you can effortlessly track and
                                    manage your portfolio's performance, granting you complete visibility and control over
                                    your investments.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- section content end -->

        <!-- section content begin -->
        <div class="uk-section uk-section-primary in-wave-10 in-offset-bottom-30">
            <div class="uk-container">
                <div class="uk-grid uk-position-relative uk-flex uk-flex-middle">
                    <div class="uk-position-bottom-right">
                        <img src="img/in-wave-background-4.svg" alt="wave-hq" width="500" height="189">
                    </div>
                    <div class="uk-width-auto@m uk-text-center">
                        <img src="img/in-wave-icon-10.svg" alt="wave-icon" width="96" height="96">
                    </div>
                    <div class="uk-width-3-5@m">
                        <h2 class="uk-margin-remove-bottom">Financial strength you can depend on</h2>
                        <p>providing stability and security for your investment journey.<a
                                class="uk-text-small uk-text-uppercase uk-margin-small-left"
                                href="{{ url('about') }}">Learn
                                more<i class="fas fa-long-arrow-alt-right fa-sm uk-margin-small-left"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
@endsection
