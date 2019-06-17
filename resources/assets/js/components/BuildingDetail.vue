<template>
    <!-- Form Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="addNewLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <!-- Content -->
                    <!-- <div class="container">
                        <div class="row justify-content-center"> -->
                            <div class="col-md-12">
                                <div class="card">
                                  <!-- <img class="card-img-top img-fluid" src="/images/uploads/building_1.jpg" alt="Card image cap"> -->
                                  <div id="demo" class="card-img-top img-fluid carousel slide" data-ride="carousel">
                                      <!-- Indicators -->
                                      <ul class="carousel-indicators">
                                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                                        <li data-target="#demo" data-slide-to="1"></li>
                                        <li data-target="#demo" data-slide-to="2"></li>
                                      </ul>
                                      
                                      <!-- The slideshow -->
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img src="/images/uploads/building_1.jpg" class="img-fluid" height="300">
                                        </div>
                                        <div class="carousel-item">
                                          <img src="/images/uploads/building_2.jpg" class="img-fluid" height="300">
                                        </div>
                                      </div>
                                      
                                      <!-- Left and right controls -->
                                      <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                      </a>
                                      <a class="carousel-control-next" href="#demo" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                      </a>
                                    </div>

                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <h1>{{ item.title }}</h1>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                      <ul class="list-group list-group-flush">
                                        <li class="list-group-item">{{ item.description  }}</li>
                                        <!-- <li class="list-group-item">{{ item.amenities   }}</li> -->
                                        <li class="list-group-item"><strong>Precio</strong> {{ item.from_price ? 'Desde ' : ' ' }} $ {{ item.price }} </li>
                                        <li class="list-group-item"><strong>Estado</strong> {{ item.status }} </li>
                                        <li class="list-group-item"><strong>Destacada?</strong> {{ item.is_featured ? 'Sí' : 'No' }} </li>
                                        <li class="list-group-item"><strong>Contacto</strong> {{ item.contact_name }} </li>
                                        <li class="list-group-item"><strong>Teléfono</strong> {{ item.contact_phone }} </li>
                                      </ul>
                                    </div>
                                </div>
                            </div>
                        <!-- </div>
                    </div> -->
                </div>

                <!-- Status -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>


            </div>
        </div>
    </div>
</template>

<script>
export default{
  props: ['item']
}
</script>

<style>
  .modal-dialog.modal-dialog-centered{
    max-width: 800px;
    margin: 0 auto;
  }
</style>
