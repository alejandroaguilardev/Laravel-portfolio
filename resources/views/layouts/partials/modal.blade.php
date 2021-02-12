
    <!--  Modal -->
    <div class="modal fade" id="listingModal" tabindex="-1" role="dialog" aria-labelledby="listingModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header px-lg-5">
              <h5 class="modal-title" id="listingModalLabel">¿Comencemos un Proyecto?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body px-lg-5">
              <form action="{{route('contact.store')}}" method="post">
                @csrf
                <div class="row">
                  <div class="form-group col-lg-12">
                    <label for="nombre">Nombres</label>
                    <input class="form-control form-control-lg" id="nombre" type="text" name="nombre" placeholder="Tu Nombre completo" minlength ="5" required>
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="correo">Email</label>
                    <input class="form-control form-control-lg" id="correo" type="email" name="correo" placeholder="Tu Correo Electrónico"  minlength ="5"required>
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="telefono">Teléfono</label>
                    <input class="form-control form-control-lg" id="telefono" type="tel" name="telefono" placeholder="Tu número teléfonico"  minlength ="9" required>
                  </div>
                  <div class="col-lg-12">
                    <label for="mensaje">Mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" required  minlength ="10"></textarea>
                  </div>
                </div>
                <div class="modal-footer justify-content-center px-lg-5">
                  <button class="btn btn-primary" type="submit">Enviar Mensaje </button>
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>