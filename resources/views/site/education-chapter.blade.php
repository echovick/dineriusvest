@extends('layouts.site.app')

@section('title', 'DENARIUSVEST - Products')

@section('content')
    <main>
        <!-- section content begin -->
        {{-- <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-text-center uk-margin-medium-bottom">
                        <h1>Company <span class="in-highlight">Chapter 1</span></h1>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="">
                        <div class="uk-card uk-card-large uk-card-default in-card-paper">
                            <div class="uk-card-body">
                                <h2>{{ $chapter['chapterTitle'] }}</h2>
                                @if (strtolower($chapter['sections'][0]['title']) === 'introduction')
                                    @if (is_string($chapter['sections'][0]['text']))
                                        <b>Introduction:</b> {{ $chapter['sections'][0]['text'] }}
                                    @else
                                        @foreach ($chapter['sections'][0]['text'] as $text)
                                            <p>{{ $text }}</p>
                                        @endforeach
                                    @endif
                                @endif
                                <hr class="uk-margin-medium-top uk-margin-small-bottom">
                                <ul class="in-faq-5" data-uk-accordion="collapsible: false">
                                    @foreach ($chapter['sections'] as $section)
                                        @if (strtolower($section['title']) !== 'introduction')
                                            <li class="uk-open">
                                                <a class="uk-accordion-title" href="#">{{ $section['title'] }}</a>
                                                <div class="uk-accordion-content">
                                                    @if (is_string($section['text']))
                                                        {{ $section['text'] }}
                                                    @else
                                                        @foreach ($section['text'] as $text)
                                                            <p>{{ $text }}</p>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach

                                    {{-- <li>
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
                                    </li> --}}
                                </ul>
                                <div
                                    class="uk-card uk-card-small uk-card-body uk-background-muted uk-border-rounded uk-margin-medium-top">
                                    <p class="uk-text-small">NEXT: <a class="uk-text-uppercase uk-link"
                                            href="{{ route('site.education.chapter', $chapter['chapterNumber'] + 1) }}">CHAPTER
                                            {{ $chapter['chapterNumber'] + 1 }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->

        {{-- Quiz Section --}}
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-2-3@m">
                        <div class="uk-grid uk-grid-small" data-uk-grid>
                            <div class="uk-width-auto@m">
                                <div class="in-icon-wrap large primary-color uk-margin-right">
                                    <i class="fas fa-question fa-2x"></i>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <h3>Quiz</h3>
                                @if (isset($chapter['QA']))
                                @foreach ($chapter['QA'] as $qa)
                                <p style="font-weight: bold; padding-top:3%;">{{ $qa['question'] }}</p>
                                <div class="uk-grid uk-child-width-1-1">
                                    <form class="uk-grid uk-form">
                                        @foreach ($qa['options'] as $option)
                                        <div class="uk-margin-small uk-width-auto uk-text-small">
                                            <label><input class="uk-checkbox" type="checkbox"> &nbsp; {{ $option }}</label>
                                        </div>
                                        @endforeach
                                    </form>
                                </div>
                                @endforeach
                                <div class="uk-margin-small uk-width-1-1">
                                    <button style="width: 20%; margin-top:5%;" class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit">Submit</button>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m">
                        <h3>Your Score</h3>
                        <table class="uk-table uk-table-striped uk-text-small uk-text-center">
                            <thead>
                                <tr>
                                    <th class="uk-text-center">Question Number</th>
                                    <th class="uk-text-center">Answer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>No.1</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>No.2</td>
                                    <td>B</td>
                                </tr>
                                <tr>
                                    <td>No.3</td>
                                    <td>C</td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- <a class="uk-link-text uk-text-small uk-text-primary" href="#">See Full Shares Table</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
