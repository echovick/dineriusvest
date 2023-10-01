@extends('layouts.site.app')

@section('title', 'DENARIUSVEST - Products')

@section('content')
    <main>
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid" data-uk-grid>
                    <div class="uk-width-3-5@m">
                        <h1 class="uk-margin-remove"><span class="in-highlight">Knowledge</span> is a wise investment</h1>
                        <p class="uk-text-lead uk-text-muted">By combining easy-to-understand information with actionable
                            insights, Our company helps make the market seem less daunting—and more approachable.</p>
                        <span class="uk-label in-label-small">Learn</span>
                        <i class="fas fa-long-arrow-alt-right fa-sm uk-margin-small-left uk-margin-small-right"></i>
                        <span class="uk-label in-label-small">Understand</span>
                        <i class="fas fa-long-arrow-alt-right fa-sm uk-margin-small-left uk-margin-small-right"></i>
                        <span class="uk-label in-label-small">Invest</span>
                    </div>
                    <div class="uk-width-2-5@m">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-expand@m">
                                    <h5 class="uk-margin-remove-bottom">The Art of Investment</h5>
                                    <p class="uk-margin-small-top">A Comprehensive Guide to Maximizing Returns and Building Wealth</p>
                                    <a class="uk-button uk-button-primary uk-border-rounded" href="#">Start
                                        Learning</a>
                                </div>
                                <div class="uk-width-auto@m uk-visible@m">
                                    <div class="in-icon-wrapper transparent uk-margin-top">
                                        <i class="fas fa-user-graduate fa-5x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section in-offset-top-10 in-offset-bottom-10">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <table class="uk-table uk-table-middle uk-table-divider uk-table-responsive">
                            <tbody>
                                <tr>
                                    <td class="uk-width-1-3@m">
                                        <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                            <div class="uk-width-auto">
                                                <div class="in-icon-wrap primary-color">
                                                    <i class="fas fa-users fa-lg"></i>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <h5>CHAPTER ONE: Introduction</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Investment is a powerful tool that allows individuals to grow their wealth and achieve financial goals</td>
                                    <td class="uk-width-1-5@m uk-text-right@m">
                                        <a href="{{ route('site.education.chapter', 1) }}" class="uk-button uk-button-text uk-text-muted">Open<i
                                                class="fas fa-chevron-right fa-xs uk-margin-small-left"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="uk-width-1-3@m">
                                        <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                            <div class="uk-width-auto">
                                                <div class="in-icon-wrap primary-color">
                                                    <i class="fas fa-tools fa-lg"></i>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <h5>CHAPTER TWO: Setting Investment Goals</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Clearly defining investment goals lays the foundation for a well-structured and purposeful investment plan.</td>
                                    <td class="uk-width-1-5@m uk-text-right@m">
                                        <a href="{{ route('site.education.chapter', 2) }}" class="uk-button uk-button-text uk-text-muted">Open<i
                                                class="fas fa-chevron-right fa-xs uk-margin-small-left"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="uk-width-1-3@m">
                                        <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                            <div class="uk-width-auto">
                                                <div class="in-icon-wrap primary-color">
                                                    <i class="fas fa-chart-area fa-lg"></i>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <h5>CHAPTER THREE: Investment Vehicles</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Investment vehicles refer to the various options available to investors to park their money</td>
                                    <td class="uk-width-1-5@m uk-text-right@m">
                                        <a href="{{ route('site.education.chapter', 3) }}" class="uk-button uk-button-text uk-text-muted">Open<i
                                                class="fas fa-chevron-right fa-xs uk-margin-small-left"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="uk-width-1-3@m">
                                        <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                            <div class="uk-width-auto">
                                                <div class="in-icon-wrap primary-color">
                                                    <i class="fas fa-chart-area fa-lg"></i>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <h5>CHAPTER FOUR: Risk Management and Asset Allocation</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Asset allocation involves dividing investments across different asset classes, such as stocks, bonds, and cash, to optimize returns while minimizing risk.</td>
                                    <td class="uk-width-1-5@m uk-text-right@m">
                                        <a href="{{ route('site.education.chapter', 4) }}" class="uk-button uk-button-text uk-text-muted">Open<i
                                                class="fas fa-chevron-right fa-xs uk-margin-small-left"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="uk-width-1-3@m">
                                        <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                            <div class="uk-width-auto">
                                                <div class="in-icon-wrap primary-color">
                                                    <i class="fas fa-chart-area fa-lg"></i>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <h5>CHAPTER FIVE: Investor Behavior and Emotions</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Investment vehicles refer to the various options available to investors to park their money</td>
                                    <td class="uk-width-1-5@m uk-text-right@m">
                                        <a href="{{ route('site.education.chapter', 5) }}" class="uk-button uk-button-text uk-text-muted">Open<i
                                                class="fas fa-chevron-right fa-xs uk-margin-small-left"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="uk-width-1-3@m">
                                        <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                            <div class="uk-width-auto">
                                                <div class="in-icon-wrap primary-color">
                                                    <i class="fas fa-chart-area fa-lg"></i>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <h5>CHAPTER SIX: A Step-by-Step Guide to Crafting the Right Investment Strategy</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Investment vehicles refer to the various options available to investors to park their money</td>
                                    <td class="uk-width-1-5@m uk-text-right@m">
                                        <a href="{{ route('site.education.chapter', 5) }}" class="uk-button uk-button-text uk-text-muted">Open<i
                                                class="fas fa-chevron-right fa-xs uk-margin-small-left"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="uk-width-1-3@m">
                                        <div class="uk-grid uk-grid-small uk-flex uk-flex-middle">
                                            <div class="uk-width-auto">
                                                <div class="in-icon-wrap primary-color">
                                                    <i class="fas fa-chart-area fa-lg"></i>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <h5>GLOSSARY</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Investment vehicles refer to the various options available to investors to park their money</td>
                                    <td class="uk-width-1-5@m uk-text-right@m">
                                        <a href="{{ route('site.education.chapter', 'glossary') }}" class="uk-button uk-button-text uk-text-muted">Open<i
                                                class="fas fa-chevron-right fa-xs uk-margin-small-left"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="uk-flex uk-flex-center uk-margin-medium-top uk-margin-bottom">
                            <div class="uk-width-3-4@m">
                                <div class="uk-grid-small uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                                    <div>
                                        <a class="uk-button uk-button-default uk-border-rounded uk-width-expand"
                                            href="#">Fast Academy</a>
                                    </div>
                                    <div>
                                        <a class="uk-button uk-button-default uk-border-rounded uk-width-expand"
                                            href="#">Video Tutorials</a>
                                    </div>
                                    <div>
                                        <a class="uk-button uk-button-default uk-border-rounded uk-width-expand"
                                            href="#">Course</a>
                                    </div>
                                    <div>
                                        <a class="uk-button uk-button-default uk-border-rounded uk-width-expand"
                                            href="#">E-Books</a>
                                    </div>
                                    <div class="uk-visible@m">
                                        <a class="uk-button uk-button-default uk-border-rounded uk-width-expand"
                                            href="#">Glossary</a>
                                    </div>
                                    <div class="uk-visible@m">
                                        <a class="uk-button uk-button-default uk-border-rounded uk-width-expand"
                                            href="#">Trading Info</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <div class="uk-card uk-card-primary uk-box-shadow-small uk-border-rounded uk-background-cover"
                            style="background-image: url(img/blockit/in-card-background-1.jpg);">
                            <div class="uk-card-body">
                                <h2 class="uk-margin-remove-bottom">Free Demo Account</h2>
                                <p class="uk-margin-small-top">Practice Stocks and CFDs trading in a risk-free environment.
                                </p>
                                <a class="uk-button uk-button-primary uk-border-rounded" href="#">Open an Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
@endsection
