@if(request()->segment(1) === 'developers' || request()->get('section') === 'developers')
    <div class="col-lg-4">
        <div class="text-center">
            <a href="https://wa.me/5491145234418" target="_blank">
                <img class="footer-icons" src="{{ asset('./img/core-img/icFooter2.png') }}" alt="Developers">
                &nbsp;
                011-4523-4418
            </a>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="text-center">
            <a href="{{ route('contact.index') }}">
                <img class="footer-icons"
                    src="{{ asset('./img/core-img/icFooter3.png') }}">&nbsp;info@urbandevelopers.com.ar
            </a>
            <a href="https://www.facebook.com/urbanrealestate.ar/" target="_blank"><img width="50px;"
                    src="{{ asset('/img/icons/icFacebook.png') }}" alt="Facebook"></a>
            <a href="http://instagram.com/urbanrealestate.ar" target="_blank"><img width="50px;"
                    src="{{ asset('/img/icons/icInstagram.png') }}" alt="Instagram"></a>
        </div>
    </div>

@elseif(request()->segment(1) === 'houses' || request()->get('section') === 'houses')
    <div class="col-lg-4">
        <div class="text-center">
            <a href="https://wa.me/5491153294260" target="_blank">
                <img class="footer-icons" src="{{ asset('./img/core-img/icFooter2.png') }}" alt="Developers">
                &nbsp;+5411-5329-4260
            </a>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="text-center">
            <a href="{{ route('contact.index') }}">
                <img class="footer-icons" src="{{ asset('./img/core-img/icFooter3.png') }}">&nbsp;info@urbanhouses.com.ar
            </a>
            <a href="https://www.facebook.com/urbanrealestate.ar/" target="_blank"><img width="50px;"
                    src="{{ asset('/img/icons/icFacebook.png') }}" alt="Facebook"></a>
            <a href="http://instagram.com/urbanrealestate.ar" target="_blank"><img width="50px;"
                    src="{{ asset('/img/icons/icInstagram.png') }}" alt="Instagram"></a>
        </div>
    </div>
@else
    <div class="col-lg-4">
        <div class="text-center">
            <a href="https://wa.me/5491153294260" target="_blank">
                <img class="footer-icons" src="{{ asset('./img/core-img/icFooter2.png') }}" alt="Developers">
                &nbsp;+5411-5329-4260
            </a>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="text-center">
            <a href="{{ route('contact.index') }}">
                <img class="footer-icons" src="{{ asset('./img/core-img/icFooter3.png') }}">&nbsp;mep.urban@gmail.com
            </a>
            <a href="https://www.facebook.com/urbanrealestate.ar/" target="_blank"><img width="50px;"
                    src="{{ asset('/img/icons/icFacebook.png') }}" alt="Facebook"></a>
            <a href="http://instagram.com/urbanrealestate.ar" target="_blank"><img width="50px;"
                    src="{{ asset('/img/icons/icInstagram.png') }}" alt="Instagram"></a>
        </div>
    </div>
@endif
