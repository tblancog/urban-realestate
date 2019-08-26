<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Departamentos</h3>
                        <div class="card-tools">
                            <button class="btn btn-success" @click="newModal">Crear Nuevo <i
                                    class="fas fa-plus fa-fw"></i></button>
                            <button class="btn btn-info" @click="newBatch">Carga Masiva<i
                                    class="fas fa-file-excel fa-fw"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div v-if="apartments.data && apartments.data.length">
                        <div class="media" v-for="apartment in apartments.data" :key="apartment.id">
                            <div class="media-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12 cropped">
                                            <a data-toggle="modal" data-target="#exampleModalLong" href="#"
                                                @click="selected = apartment">
                                                <img v-if="apartment.images.length" :src="apartment.images[0].path"
                                                    class="img-fluid" />
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="info-card">
                                                <a data-toggle="modal" data-target="#exampleModalLong" href="#"
                                                    @click="selected = apartment">
                                                    <h5 class="mt-0">{{ apartment.title }}</h5>
                                                </a>
                                                <i class="fa fa-map-marker-alt fa-fw"></i>{{ apartment.building.address }}
                                                <i class="fa fa-dollar-sign fa-fw"></i>USD {{ apartment.price }}
                                                <a href="#" @click="editModal(apartment)">
                                                    <i class="fa fa-edit blue"></i>
                                                </a>
                                                /
                                                <a href="#" @click="deleteItem(apartment.slug)">
                                                    <i class="fa fa-trash red"></i>
                                                </a>
                                                /
                                                <a href="#" @click="cloneItem(apartment)">
                                                    <i class="fa fa-clone blue"></i>
                                                </a>
                                            </div>
                                            <div class="details-card">
                                                <p>{{ apartment.description.substr(0,200)+'...'  }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="more-box">
                                                <div class="cta-more">
                                                    <!-- <router-link :to="{ name: 'apartmentDetail', params: {  id: apartment.id } }">
                                                      <a class="btn-more" href="#">Ver más</a>
                                                  </router-link>             -->
                                                </div>
                                                <!-- <div class="deliver-box">
                                                  <h6>Entrega</h6>
                                                  <h6 class="deliver-date">Noviembre 2021</h6>
                                              </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.card-body -->
                        <div class="card-footer">
                            <pagination :data="apartments" @pagination-change-page="getResults"></pagination>
                        </div>
                    </div>
                    <div v-else>
                        <h5 class="m-5 text-center">No existen Departamentos cargados</h5>
                    </div>

                </div>
                <!-- /.card -->
            </div>
        </div>


        <!-- Form Modal -->
        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" v-show="!editmode" id="addNewLabel">Crear Nuevo Departamento</h5>
                        <h5 class="modal-title" v-show="editmode" id="addNewLabel">Editar Departamento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form @submit.prevent="editmode ? updateItem(selected) : createItem()">
                        <div class="modal-body">

                            <!-- Image uploader -->
                            <div class="form-group col-lg-12 d-none d-lg-block">
                                <image-uploader v-on:imageDeleted="deleteImage($event)" :files="files"
                                    :images="form.images" />
                            </div>

                            <!-- Title -->
                            <div class="form-group col-lg-9">
                                <input v-model="form.title" type="text" name="title" placeholder="Título"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('title') }">
                                <has-error :form="form" field="title"></has-error>
                            </div>

                            <!-- Building -->
                            <div class="form-group col-lg-9">
                                <select class="form-control" v-model="form.building_id">
                                    <option value="">--Edificio--</option>
                                    <option v-for="building in buildings" :value="building.id" :key="building.id">
                                        {{ building.label }}</option>
                                </select>
                            </div>

                            <!-- Location -->
                            <div class="form-group col-lg-9">
                                <input disabled v-model="form.building.location" type="text" name="location"
                                    placeholder="Barrio" class="form-control text-capitalize">
                            </div>

                            <!-- Address -->
                            <div class="form-group col-lg-9">
                                <input disabled v-model="form.building.address" type="text" name="address"
                                    placeholder="Dirección" class="form-control">
                            </div>

                            <!-- Google Maps Url -->
                            <div class="form-group col-lg-9">
                                <div v-html="form.building.url_maps"> </div>
                            </div>

                            <!-- Price -->
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <input v-model="form.price" type="number" name="price" placeholder="Precio"
                                            class="form-control" :class="{ 'is-invalid': form.errors.has('price') }">
                                        <has-error :form="form" field="price"></has-error>
                                    </div>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="form-group col-lg-9">
                                <textarea style="white-space: pre-line;" v-model="form.description" name="description"
                                    id="description" rows="5" placeholder="Descripción no mayor a 2048 caracteres"
                                    class="form-control"
                                    :class="{ 'is-invalid': form.errors.has('description') }"></textarea>
                                <has-error :form="form" field="description"></has-error>
                            </div>

                            <!-- Amenities -->
                            <div class="form-group col-lg-9">
                                <div class="row">
                                    <div class="m-2">
                                        <a class="btn btn-primary" data-toggle="collapse" href="#basicForm"
                                            role="button" aria-expanded="false" aria-controls="basicForm">
                                            Información de departamento
                                        </a>
                                    </div>
                                    <div class="m-2">
                                        <a class="btn btn-primary" data-toggle="collapse" href="#superficieForm"
                                            role="button" aria-expanded="false" aria-controls="superficieForm">
                                            Superficie
                                        </a>
                                    </div>
                                    <div class="m-2">
                                        <a class="btn btn-primary" data-toggle="collapse" href="#amenitiesForm"
                                            role="button" aria-expanded="false" aria-controls="amenitiesForm">
                                            Amenities de edificio
                                        </a>
                                    </div>

                                </div>

                                <div class="row">
                                    <!-- Basic Form -->
                                    <div id="basicForm" class="form-group form-check collapse">

                                        <!-- Floor  -->
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label for="floor">Piso</label>
                                                <input v-model="form.floor" type="text" name="floor" placeholder="Piso"
                                                    class="form-control"
                                                    :class="{ 'is-invalid': form.errors.has('floor') }">
                                                <has-error :form="form" field="floor"></has-error>
                                            </div>

                                            <!-- Department #  -->
                                            <div class="form-group col-lg-4">
                                                <label for=""># dpto.</label>
                                                <input v-model="form.code" type="text" name="code"
                                                    placeholder="# Departamento" class="form-control"
                                                    :class="{ 'is-invalid': form.errors.has('code') }">
                                                <has-error :form="form" field=""></has-error>
                                            </div>

                                            <!-- Ambientes -->
                                            <div class="form-group col-lg-4">
                                                <label for="rooms">Ambientes</label>
                                                <input id="rooms" v-model="form.rooms" type="number" name="rooms"
                                                    placeholder="Ambientes" class="form-control"
                                                    :class="{ 'is-invalid': form.errors.has('rooms') }" />
                                            </div>
                                            <has-error :form="form" field="rooms"></has-error>

                                            <!-- Dormitorios -->
                                            <div class="form-group col-lg-4">
                                                <label for="dormitorios">Dormitorios</label>
                                                <input id="dormitorios" v-model="form.dormitorios" type="number"
                                                    name="dormitorios" placeholder="Dormitorios" class="form-control"
                                                    :class="{ 'is-invalid': form.errors.has('dormitorios') }" />
                                            </div>
                                            <has-error :form="form" field="dormitorios"></has-error>

                                            <!-- Baños -->
                                            <div class="form-group col-lg-4">
                                                <label for="banios">Baños</label>
                                                <input id="banios" v-model="form.banios" type="number" name="baños"
                                                    placeholder="banios" class="form-control"
                                                    :class="{ 'is-invalid': form.errors.has('banios') }" />
                                            </div>
                                            <has-error :form="form" field="banios"></has-error>

                                            <!-- Toilettes -->
                                            <div class="form-group col-lg-4">
                                                <label for="toilettes">Toilettes</label>
                                                <input v-model="form.toilettes" type="number" name="toilettes"
                                                    placeholder="toilettes" class="form-control"
                                                    :class="{ 'is-invalid': form.errors.has('toilettes') }" />
                                            </div>
                                            <has-error :form="form" field="toilettes"></has-error>

                                            <!-- Antigüedad -->
                                            <div class="form-group col-lg-4">
                                                <label for="antiguedad">Antigüedad (años)</label>
                                                <input v-model="form.antiguedad" type="number" name="antiguedad"
                                                    placeholder="antiguedad" class="form-control"
                                                    :class="{ 'is-invalid': form.errors.has('antiguedad') }" />
                                            </div>
                                            <has-error :form="form" field="antiguedad"></has-error>

                                            <!-- Expensas -->
                                            <div class="form-group col-lg-4">
                                                <label for="expensas">Expensas</label>
                                                <input v-model="form.expensas" type="number" name="expensas"
                                                    placeholder="expensas" class="form-control"
                                                    :class="{ 'is-invalid': form.errors.has('expensas') }" />
                                            </div>
                                            <has-error :form="form" field="expensas"></has-error>

                                            <!-- Disposición -->
                                            <div class="form-group col-lg-4">
                                                <label for="disposicion">Disposición</label>
                                                <select class="form-control"
                                                    :class="{ 'is-invalid': form.errors.has('disposicion') }"
                                                    id="disposicion" v-model="form.disposicion">
                                                    <option selected value="">--Disposición--</option>
                                                    <option value="Frente">Frente</option>
                                                    <option value="Contrafrente">Contrafrente</option>
                                                </select>
                                                <has-error :form="form" field="disposicion"></has-error>
                                            </div>

                                            <!-- Orientación -->
                                            <div class="form-group col-lg-4">
                                                <label for="orientacion">Orientación</label>
                                                <select class="form-control"
                                                    :class="{ 'is-invalid': form.errors.has('orientacion') }"
                                                    id="orientacion" v-model="form.orientacion">
                                                    <option selected value="">--Orientación--</option>
                                                    <option value="Norte">Norte</option>
                                                    <option value="Noroeste">Noroeste</option>
                                                    <option value="Oeste">Oeste</option>
                                                    <option value="Suroeste">Suroeste</option>
                                                    <option value="Este">Este</option>
                                                    <option value="Sureste">Sureste</option>
                                                    <option value="Noroeste">Noroeste</option>
                                                </select>
                                                <has-error :form="form" field="orientacion"></has-error>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Superficie Form -->
                                    <div id="superficieForm" class="form-group form-check collapse">

                                        <div class="row">
                                            <!-- Area -->
                                            <div class="form-group col-lg-4">
                                                <label for="area">Area</label>
                                                <input v-model="form.area" type="text" name="area" placeholder="m²"
                                                    class="form-control"
                                                    :class="{ 'is-invalid': form.errors.has('area') }">
                                                <has-error :form="form" field="area"></has-error>
                                            </div>

                                            <!-- Area semicubierta -->
                                            <div class="form-group col-lg-4">
                                                <label for="area">Area semicubierta</label>
                                                <input v-model="form.area_semicubierta" type="text" name="area_semicubierta" placeholder="m²"
                                                    class="form-control"
                                                    :class="{ 'is-invalid': form.errors.has('area_semicubierta') }">
                                                <has-error :form="form" field="area_semicubierta"></has-error>
                                            </div>

                                            <!-- Area total construido-->
                                            <div class="form-group col-lg-4">
                                                <label for="area">Area total</label>
                                                <input v-model="form.area_total_construido" type="text" name="area_total_construido" placeholder="m²"
                                                    class="form-control"
                                                    :class="{ 'is-invalid': form.errors.has('area_total_construido') }">
                                                <has-error :form="form" field="area_total_construido"></has-error>
                                            </div>

                                        </div>
                                    </div>


                                    <!-- Amenities Form -->
                                    <div id="amenitiesForm" class="form-group form-check collapse">
                                        <div class="row">
                                            <ul>
                                                <li v-for="amenity in amenities" :key="amenity.id" class="col-lg-3">
                                                    {{ amenity.title }}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Status -->
                            <div class="form-group col-lg-9">
                                <select name="type" id="status" class="form-control"
                                    :class="{ 'is-invalid': form.errors.has('status') }" v-model="form.status">
                                    <option selected value="">--Estado--</option>
                                    <option value="En_obra">En obra</option>
                                    <option value="A_estrenar">A estrenar</option>
                                    <option value="Reservado">Reservado</option>
                                    <option value="En_venta">En venta</option>
                                    <option value="En_Alquiler">Alquiler</option>
                                </select>
                                <has-error :form="form" field="status"></has-error>
                            </div>

                            <!-- Contact -->
                            <div class="form-group col-lg-6">
                                <div class="">
                                    <input v-model="form.contact_name" type="text" name="contact_name"
                                        placeholder="Nombre del contacto" class="form-control"
                                        :class="{ 'is-invalid': form.errors.has('contact_name') }">
                                    <has-error :form="form" field="contact_name"></has-error>
                                </div>
                            </div>
                            <!-- Contact Phone-->
                            <div class="form-group col-lg-6">
                                <div class="">
                                    <input v-model="form.contact_phone" type="text" name="contact_phone"
                                        placeholder="Teléfono del contacto" class="form-control"
                                        :class="{ 'is-invalid': form.errors.has('contact_phone') }">
                                    <has-error :form="form" field="contact_phone"></has-error>
                                </div>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            <button v-show="editmode" type="submit" class="btn btn-success">Guardar</button>
                            <button v-show="!editmode" type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- Show details modal -->
        <apartment-detail :item="selected" />

        <batch-load></batch-load>
    </div>



</template>

<script>
    import ImageUploader from './ImageUploader';
    import ApartmentDetail from './ApartmentDetail';
    import BatchLoad from './BatchLoad';
    import utils from '../mixins/utils.js'
    import vSelect from 'vue-select'
    import 'vue-select/dist/vue-select.css';

    export default {
        components: {
            ImageUploader,
            ApartmentDetail,
            vSelect,
            BatchLoad
        },
        mixins: [utils],
        data() {
            return {
                editmode: false,
                selected: {},
                apartments: {},
                amenities: [],
                selectedAmenities: [],
                statuses: [
                    'En obra',
                    'A estrenar',
                    'Vendido',
                    'Reservado',
                    'En venta',
                    'Alquiler'
                ],
                selectedBuilding: {},
                files: [],
                form: new Form({
                    id: '',
                    title: '',
                    address: '',

                    floor: '',
                    departament: '',
                    code: 'A',
                    price: '',

                    url_maps: '',
                    rooms: '',
                    amenities: [],

                    // Información Básica
                    rooms: '',
                    dormitorios: '',
                    banios: '',
                    toilettes: '',
                    antiguedad: '',
                    expensas: '',
                    orientacion: '',
                    disposicion: '',

                    // Area
                    area: '',
                    area_semicubierta: '',
                    area_total_construido: '',

                    description: '',
                    status: '',
                    images: [],
                    amenities: [],
                    contact_name: '',
                    contact_phone: '',

                    building_id: '',
                    building: {}
                }),
                buildings: [],
            }
        },
        watch: {
            'form.building_id': function (val) {
                this.reloadBuildingData(val)
            },
        },
        methods: {
            reloadBuildingData(buildingId) {
                if (buildingId !== '') {
                    axios.get(`api/buildings/${buildingId}`)
                        .then((res) => {
                            this.form.building = res.data
                            this.amenities = this.form.building.amenities
                        })
                }
            },
            getResults(page = 1) {
                axios.get('api/apartments?page=' + page)
                    .then(response => {
                        this.apartments = response.data;
                        // let newImgArr = [];
                        // response.data.forEach( (current, index)=> {
                        //   current.images.forEach((img, idx) => {
                        //   newImgArr.push(img.path);
                        //   });
                        // });

                        // this.apartments.images = newImgArr;
                    });
            },
            updateItem(selected) {
                this.$Progress.start();
                const formData = new FormData()
                if (this.files && this.files.length > 0) {
                    this.files.forEach(file => {
                        formData.append('images[]', file, file.name)
                    })
                }

                this.form.amenities = this.selectedAmenities
                this.form.put('api/apartments/' + selected.slug)
                    .then((res) => {
                        formData.append('id', res.data.id)
                        formData.append('selected_slug', selected.slug)
                        formData.append('action', 'edit')
                        formData.append('type', 'apartment')
                        axios.post('images-upload', formData)
                            .then(() => {
                                Fire.$emit('AfterCreate');
                                swal(
                                    'Actualizado!',
                                    'Información de Departamento actualizada.',
                                    'success')
                                this.form.reset();
                                this.files = []
                                $('#addNew').modal('hide');

                                this.$Progress.finish();
                                Fire.$emit('AfterCreate')

                            }).catch(() => {
                                this.$Progress.fail();
                            })
                    })

            },
            editModal(item) {
                // this.selectedAmenities = item.building.amenities.map( am => am.id);
                this.selected = item
                this.editmode = true;
                this.form.reset();
                $('#addNew').modal('show');
                this.form.fill(item);
            },
            newModal() {
                this.editmode = false;
                this.form.reset();

                // get list of buildings
                axios.get("/api/buildings/list").then(({
                    data
                }) => (this.form.buildings = data));

                $('#addNew').modal('show');
            },
            newBatch() {
                $('#batch').modal('show');
            },
            showModal(item) {
                $('#show').modal('show');
            },
            deleteItem(slug) {
                swal({
                    title: 'Estás seguro?',
                    text: "No es posible revertir esta acción",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Borrar'
                }).then((result) => {

                    // Send request to the server
                    if (result.value) {
                        this.form.delete('api/apartments/' + slug).then(() => {
                            swal(
                                'Borrado!',
                                'Departamento borrado.',
                                'success'
                            )
                            Fire.$emit('AfterCreate');
                        }).catch(() => {
                            swal("Error!", "Ups, ocurrió un error.", "warning");
                        });
                    }
                })
            },
            cloneItem(item) {
                swal({
                    title: 'Deseas duplicar "' + item.title + '" ?',
                    text: "El duplicado resultante se llamará (Copia XXX) " + item.title,
                    type: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Duplicar',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {

                    // Send request to the server
                    if (result.value) {
                        console.log('Respondí sí')
                        axios.post('api/apartments/' + item.slug + '/clone').then((res) => {
                            const data = res.data
                            swal(
                                'Duplicado!',
                                'La nueva propierdad tiene como título: "' + data.title + '".',
                                'success'
                            )
                            Fire.$emit('AfterCreate');
                        }).catch(() => {
                            swal("Error!", "Ups, ocurrió un error.", "warning");
                        });
                    }
                })
            },
            deleteImage(event) {
                const id = event.id
                this.form.delete('api/images/' + id + '/apartment/')
            },
            async loadItems() {
                let vm = this
                axios.all([
                    axios.get('api/apartments'),
                    axios.get('amenities')
                ]).then(
                    axios.spread(function (res1, res2) {
                        vm.apartments = res1.data;

                        let newImgArr = [];
                        res1.data.data.forEach((current, index) => {
                            current.images.forEach((img, idx) => {
                                newImgArr.push(img.path);
                            });
                        });
                        vm.apartments.images = newImgArr;
                        vm.amenities = res2.data
                    })
                );
            },

            createItem() {
                this.$Progress.start()
                const formData = new FormData()
                if (this.files && this.files.length > 0) {
                    this.files.forEach(file => {
                        formData.append('images[]', file, file.name)
                    })
                }

                const apartmentCreate = this.form.post('api/apartments')
                apartmentCreate.then(res => {
                    formData.append('id', res.data.id)
                    formData.append('type', 'apartment')
                    axios.post('images-upload', formData)
                        .then(() => {
                            Fire.$emit('AfterCreate');
                            swal(
                                'Creado!',
                                'Departamento creado.',
                                'success'
                            )
                            this.form.reset();
                            this.files = []
                            $('#addNew').modal('hide');

                            this.$Progress.finish();
                        })
                })
            },
        },
        created() {
            this.files = []
            axios.get('/api/buildings/list')
                .then((res) => {
                    this.buildings = res.data
                })
            // Fire.$on('searching', () => {
            //     let query = this.$parent.search;
            //     axios.get('api/findUser?q=' + query)
            //         .then((data) => {
            //             this.users = data.data
            //         })
            //         .catch(() => {

            //         })
            // })
            this.loadItems();
            Fire.$on('AfterCreate', () => {
                this.loadItems();
            });
        }

    }
</script>

<style scoped lang="scss">
    #addNew {
        z-index: 10000;
    }

    .modal-dialog {
        max-width: 650px;
    }

    .sidebar-mini {
        .wrapper {
            .content-wrapper {
                .content {
                    .card {
                        .card-header {
                            h3 {
                                font-size: 1.8rem;
                                text-transform: uppercase;
                                font-weight: 700;
                                color: #007c3e;
                                margin-bottom: 0;
                                padding: 10px;
                            }

                            .card-tools {
                                padding: 10px;

                                .btn {
                                    color: #FFF;
                                }
                            }
                        }

                        .media {
                            .media-body {
                                .container {
                                    padding-top: 15px;
                                    padding-bottom: 15px;

                                    .cropped {
                                        height: 135px;
                                        overflow: hidden;
                                    }

                                    .info-card {
                                        padding-bottom: 10px;
                                        background-image: linear-gradient(to right, #7d7d7d 33%, rgba(255, 255, 255, 0) 0%);
                                        background-position: bottom;
                                        background-size: 6px 2px;
                                        background-repeat: repeat-x;

                                        a {
                                            h5 {
                                                font-size: 1.7rem;
                                                font-weight: 700;
                                                color: #007c3e;
                                            }

                                            &:hover {
                                                text-decoration: none;
                                            }
                                        }
                                    }

                                    a {
                                        &:hover {
                                            text-decoration: none;
                                        }
                                    }

                                    .btn-more {
                                        width: 70%;
                                        color: #51B848;
                                        border: 1px solid #7d7d7d;
                                        padding: 10px 25px;
                                        text-transform: uppercase;
                                        font-weight: 700;
                                        letter-spacing: 1px;
                                        font-size: 1.4rem;
                                        transition: 0.2s;

                                        &:hover {
                                            text-decoration: none;
                                            background-color: #51B848;
                                            color: #fff;
                                            border: #51B848 1px solid;
                                        }
                                    }

                                    .details-card {
                                        margin-top: 10px;
                                    }

                                    .more-box {
                                        background-image: linear-gradient(#7d7d7d 33%, rgba(255, 255, 255, 0) 0%);
                                        background-position: left;
                                        background-size: 2px 7px;
                                        background-repeat: repeat-y;
                                        padding-left: 20px;

                                        h5 {
                                            margin-bottom: 2rem;
                                        }

                                        .cta-more {
                                            margin-bottom: 2rem;
                                        }

                                        .deliver-box {
                                            .deliver-date {
                                                font-weight: 700;
                                                text-transform: uppercase;
                                                font-size: 1.2rem;
                                                color: #007c3e;
                                            }
                                        }
                                    }
                                }
                            }
                        }

                        .card-footer {
                            .pagination {
                                justify-content: center;

                                li {
                                    a {
                                        background-color: #51B848;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
</style>
