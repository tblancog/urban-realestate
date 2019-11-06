<form class="formDetail formDepto" method="POST" action="{{ route('mail.contact') }}">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <input name="name" type="text" class="form-control" id="inputEmail4" placeholder="Nombre">
        </div>
        <div class="form-group col-md-6">
            <input name="lastname" type="text" class="form-control" id="inputPassword4" placeholder="Apellido">
        </div>
    </div>
    <div class="form-group">
        <input name="phone" type="text" class="form-control" id="inputAddress2" placeholder="Teléfono">
    </div>
    <div class="form-group">
        <input name="email" type="email" class="form-control" id="inputAddress2" placeholder="Email">
    </div>
    <div class="form-group">
        <textarea name="message"  style="white-space: pre-line;"  rows="4" class="form-control" id="exampleFormControlTextarea1"
            placeholder="Estoy interesado en contactarlos" rows="3"></textarea>
    </div>
  <button type="submit" class="btn btn-verde">
        ENVIAR
    </button>
</form>
