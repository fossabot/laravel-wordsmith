<footer class="s-footer">
    <div class="s-footer__main">
        <div class="row">
            {{ Widget::About() }}
            <div class="col-six tab-full s-footer__subscribe">
                <h4>{{ __('site.footer-our-newsletter') }}</h4>
                <p>{{ __('site.footer-our-newsletter-text') }}</p>
                @if (session('success-submit'))
                    <div class="alert-box alert-box--success hideit">
                        <p>{{ session('success-submit') }}</p>
                    </div>
                    <br>
                @else
                    <div class="subscribe-form">
                        <form id="mc-form" class="group" action="{{ route('site.subscribe') }}" method="post">
                            @csrf
                            <input type="email" name="email" class="email" id="mc-email"
                                   placeholder="{{ __('site.footer-email-address') }}" required="">
                            <input type="submit" value="{{ __('site.footer-send') }}">
                            <label for="mc-email" class="subscribe-message"></label>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="s-footer__bottom">
        <div class="row">
            {{ Widget::Sociallink() }}
            <div class="col-six">
                <div class="s-footer__copyright">
                    <span>Wordsmith ©{{ date('Y') }}. All rights reserved.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="go-top">
        <a class="smoothscroll" title="{{ __('site.footer-back-to-top') }}" href="#top"></a>
    </div>
</footer>
