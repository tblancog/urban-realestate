<div class="m-0-auto text-center">
    @component('partials.flash-message')
    @endcomponent
    <form class="formHD" method="POST" action="{{ $action_route }}">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label class="left" for="name">Nombre</label>
                <input name="name" id="name" class="left" type="text" class="form-control" id="inputEmail4" placeholder="">
            </div>
        </div>
        <div class="clear"></div>
        <div class="form-group">
             <label class="left" for="phone">Teléfono</label>
             <input name="phone" id="phone" class="left" type="text" class="form-control" id="inputAddress2" placeholder="">
        </div>
        <div class="clear"></div>
        <div class="form-group">
            <label class="left" for="email">Email</label>
            <input  name="email" id="email" class="left" type="email" class="form-control" id="inputAddress2" placeholder="">
        </div>
        <div class="clear"></div>
        <div class="form-group">
            <label class="left" for="message">Mensaje</label>
            <textarea name="message" id="message" class="left" style="white-space: pre-line;"  rows="4" class="form-control" id="exampleFormControlTextarea1"
                placeholder="" rows="3"></textarea>
        </div>
        <div class="clear"></div>
        <button type="submit" class="btn">
            ENVIAR
        </button>
    </form>

</div>

