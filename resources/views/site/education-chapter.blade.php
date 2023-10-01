@extends('layouts.site.app')

@section('title', 'DENARIUSVEST - Products')

@section('content')
    <main>
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-text-center uk-margin-medium-bottom">
                        <h1>Company <span class="in-highlight">legal docs</span></h1>
                    </div>
                    <div class="uk-grid-divider uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                        <div>
                            <div class="in-icon-wrap primary-color">
                                <i class="fas fa-file fa-lg"></i>
                            </div>
                            <h3 class="uk-margin-top">Terms of Service</h3>
                            <p>Read the Terms of Service and License Agreement for Blockit as well as our BlockitApp &
                                Developer Agreements.</p>
                            <ul class="uk-list uk-margin-top">
                                <li><a class="uk-flex uk-flex-middle" href="#"><i
                                            class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>License Agreement</a>
                                </li>
                                <li><a class="uk-flex uk-flex-middle" href="#"><i
                                            class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>Term of Services for
                                        Blockit Trade</a></li>
                            </ul>
                        </div>
                        <div>
                            <div class="in-icon-wrap primary-color">
                                <i class="fas fa-globe fa-lg"></i>
                            </div>
                            <h3 class="uk-margin-top">Policies</h3>
                            <p>Find out more about what information we collect at Blockit, how we use it, and what control
                                you have over your data.</p>
                            <ul class="uk-list uk-margin-top">
                                <li><a class="uk-flex uk-flex-middle" href="#"><i
                                            class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>Privacy Statement</a>
                                </li>
                            </ul>
                        </div>
                        <div class="uk-visible@m">
                            <div class="in-icon-wrap primary-color">
                                <i class="fas fa-shield-alt fa-lg"></i>
                            </div>
                            <h3 class="uk-margin-top">Security</h3>
                            <p>Learn more about how we keep your work and personal data safe when you’re using our services.
                            </p>
                            <ul class="uk-list uk-margin-top">
                                <li><a class="uk-flex uk-flex-middle" href="#"><i
                                            class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>Blockit Trade
                                        Security</a></li>
                                <li><a class="uk-flex uk-flex-middle" href="#"><i
                                            class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>Responsible Disclosure
                                        Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-3-5@m">
                        <div class="uk-card uk-card-large uk-card-default in-card-paper">
                            <div class="uk-card-body">
                                <h2>Company Faq</h2>
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                                    consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur consectetur
                                    adipiscing elit labore et dolore magna veritatis et quasi architecto beatae vitae.</p>
                                <p>Aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                    excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit laborum.</p>
                                <hr class="uk-margin-medium-top uk-margin-small-bottom">
                                <ul class="in-faq-5" data-uk-accordion="collapsible: false">
                                    <li class="uk-open">
                                        <a class="uk-accordion-title" href="#">Brand Guidelines</a>
                                        <div class="uk-accordion-content">
                                            <ul class="uk-list uk-list-bullet">
                                                <li>Follow the Company Brand Guides</li>
                                                <li>Never use Company in the plural or possessive form</li>
                                                <li>Never use Company trademark generically in referring to the product</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="uk-accordion-title" href="#">Specifically restricted uses</a>
                                        <div class="uk-accordion-content">
                                            <ul class="uk-list uk-list-bullet">
                                                <li>Removing, distorting or altering any element of Company trademarks or
                                                    branding</li>
                                                <li>Shortening, abbreviating, or using acronyms out of Company trademarks
                                                </li>
                                                <li>Combining your trademark or product name, visually or in text, with any
                                                    Company trademark</li>
                                                <li>Indicating Company is endorsing or promoting your trademark or product
                                                </li>
                                                <li>Registering Company trademarks as or incorporated in social media
                                                    account names, or aliases</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="uk-accordion-title" href="#">Company Trademarks</a>
                                        <div class="uk-accordion-content">
                                            <p>Company trademarks include the following list. The absence of any Company
                                                trademark, product name, service name, or any other name from this list does
                                                not waive Company intellectual property rights.</p>
                                            <p>The Company logo and name is ® Registered in the Canada and The United States
                                                with registrations pending elsewhere. The ® Registered mark shall only be
                                                used in Canada and The United States until registrations are completed
                                                elsewhere.</p>
                                        </div>
                                    </li>
                                </ul>
                                <div
                                    class="uk-card uk-card-small uk-card-body uk-background-muted uk-border-rounded uk-margin-medium-top">
                                    <p class="uk-text-small">For general inquiries please contact <a
                                            class="uk-text-lowercase uk-link" href="mailto:">legal@wave-capital.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
@endsection
