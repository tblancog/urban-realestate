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
                    <div class="col-md-12">
                        <div class="card">
                            <div id="property-img" class="card-img-top img-fluid carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                    <li v-for="(image, idx) in item.images" :key="image.id" data-target="#property-img"
                                        :data-slide-to="idx" :class="[ { active: idx === 0 } ]"></li>
                                </ul>

                                <!-- The slideshow -->
                                <div class="carousel-inner">
                                    <div v-for="(image, idx) in item.images" :key="image.id"
                                        :class="['carousel-item', { active: idx === 0 }]">
                                        <img :src="image_path(item, idx)" class="img-fluid">
                                    </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="carousel-control-prev" href="#property-img" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#property-img" data-slide="next">
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
                                    <li class="list-group-item"><strong>Precio</strong>
                                        {{ item.from_price ? 'Desde ' : ' ' }} $ {{ item.price }} </li>
                                    <li class="list-group-item"><strong>Estado</strong> {{ item.status }} </li>
                                    <li class="list-group-item"><strong>Destacada?</strong>
                                        {{ item.is_featured ? 'Sí' : 'No' }} </li>
                                    <li class="list-group-item"><strong>Contacto</strong> {{ item.contact_name }} </li>
                                    <li class="list-group-item"><strong>Teléfono</strong> {{ item.contact_phone }} </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
    import utils from '../mixins/utils.js'
    export default {
        props: ['item'],
        mixins: [utils],
    }

</script>

<style lang="scss">
    .modal-dialog.modal-dialog-centered {
        max-width: 800px;
        margin: 0 auto;
    }
    .carousel-item{
      height: 400px;
      overflow: hidden;
    }

</style>
