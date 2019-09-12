    <!-- ##### Footer Area Start ##### -->
    <section>
        <div class="footer">
            <div class="container-fluid footer-info">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-center">
                            <a href="{{ route('home.index') }}">
                                <img class="footer-icons" src="{{ asset('./img/core-img/icFooter1.png') }}"
                                    alt="Real state">&nbsp;Cullen 4836 - CABA
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center">
                            <a href="{{ route('developers.index') }}">
                                <img class="footer-icons" src="{{ asset('./img/core-img/icFooter2.png') }}"
                                    alt="Developers">
                                    &nbsp;+5411-5329-4260
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center">
                            <a href="{{ route('houses.index') }}">
                                <img class="footer-icons" src="{{ asset('./img/core-img/icFooter3.png') }}"
                                    alt="Houses">&nbsp;mep.urban@gmail.com
                            </a>
                            @if( in_array(request()->segment(1), ['developers', 'houses']) )
                            <a href="https://www.facebook.com/urbanrealestate.ar/" target="_blank"><img width="50px;" src="{{ asset('/img/icons/icFacebook.png') }}" alt="Facebook"></a>
                            <a href="http://instagram.com/urbanrealestate.ar" target="_blank"><img width="50px;" src="{{ asset('/img/icons/icInstagram.png') }}" alt="Instagram"></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
