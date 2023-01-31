<footer>
    @include('components.footer_menu')
    <div id="cta" class="container d-flex justify-content-between align-items-center">
        <div id="sign_cta" class="text-white py-2 px-3 fs-5">SIGN-UP NOW!</div>
        <div id="socials" class="d-flex align-items-center">
            <span class="color_dc fw-semibold fs-5">FOLLOW US</span>
            <img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="">
            <img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="">
            <img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="">
            <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="">
            <img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="">
        </div>
    </div>
</footer>