<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edificios</h3>
                        <div class="card-tools">
                            <button class="btn btn-success" @click="newModal">Crear Nuevo <i
                                    class="fas fa-plus fa-fw"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div v-if="buildings.data && buildings.data.length">
                      <div class="media" v-for="building in buildings.data" :key="building.id">
                          <div class="media-body">
                              <div class="container">
                                  <div class="row">
                                      <div class="col-md-3 col-sm-12 cropped">
                                      <a data-toggle="modal" data-target="#exampleModalLong" href="#" @click="selected = building">
                                        <img v-if="building.images.length"
                                              :src="building.images[0].path"
                                              class="img-fluid"/>
                                      </a>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="info-card">
                                            <a :href="getDetailUrl(building, 'buildings', 'real-estate')" target="_blank">
                                                <h5 class="mt-0">{{ building.title }}</h5>
                                            </a>
                                              <i class="fa fa-map-marker-alt fa-fw"></i>{{ building.address }}
                                              <i class="fa fa-dollar-sign fa-fw"></i>USD {{ building.price }}
                                              <a href="#" @click="editModal(building)">
                                                  <i class="fa fa-edit blue"></i>
                                              </a>
                                              /
                                              <a href="#" @click="deleteItem(building.slug)">
                                                  <i class="fa fa-trash red"></i>
                                              </a>
                                          </div>
                                          <div class="details-card">
                                              <p>{{ building.description.substr(0,200)+'...'  }}</p>
                                          </div>
                                      </div>
                                      <div class="col-md-3">
                                          <div class="more-box">
                                              <div class="cta-more">
                                                  <!-- <router-link :to="{ name: 'buildingDetail', params: {  id: building.id } }">
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
                          <pagination :data="buildings" @pagination-change-page="getResults"></pagination>
                      </div>
                    </div>
                    <div v-else>
                      <h5 class="m-5 text-center">No existen edificios cargados</h5>
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
                        <h5 class="modal-title" v-show="!editmode" id="addNewLabel">Crear Nuevo Edificio</h5>
                        <h5 class="modal-title" v-show="editmode" id="addNewLabel">Editar Edificio</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="editmode ? updateItem(selected) : createItem()">
                        <div class="modal-body">


                            <!-- Image uploader -->
                            <div class="form-group col-lg-12 d-none d-lg-block">
                              <image-uploader
                                 v-on:imageDeleted="deleteImage($event)"
                                :files="files"
                                :images="form.images"></image-uploader>
                            </div>
                            <!-- Title -->
                            <div class="form-group col-lg-9">
                                <div class="">
                                  <input v-model="form.title" type="text" name="title" placeholder="Título"
                                      class="form-control" :class="{ 'is-invalid': form.errors.has('title') }">
                                  <has-error :form="form" field="title"></has-error>
                                </div>
                            </div>

                            <!-- Address and location -->
                            <div class="form-group col-lg-9">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input v-model="form.address" type="text" name="address" placeholder="Dirección"
                                            class="form-control" :class="{ 'is-invalid': form.errors.has('address') }">
                                        <has-error :form="form" field="address"></has-error>
                                    </div>
                                    <div class="col-lg-6">
                                         <select class="form-control text-capitalize" v-model="form.location">
                                            <option disabled value="">--Selecciona Barrio--</option>
                                            <option v-for="loc in locations" :value="loc" :key="loc">{{ loc }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Google Maps Url -->
                            <div class="form-group col-lg-9">
                                <textarea style="white-space: pre-line;" v-model="form.url_maps" name="url_maps" id="url_maps" rows="2"
                                    placeholder="Embed de google maps" class="form-control"
                                    :class="{ 'is-invalid': form.errors.has('url_maps') }"></textarea>
                                <has-error :form="form" field="url_maps"></has-error>
                            </div>

                            <!-- Price -->
                            <div class="form-group col-lg-9">
                                <input v-model="form.price" type="number" name="price" placeholder="Precio"
                                    class="form-control col-lg-4" :class="{ 'is-invalid': form.errors.has('price') }">
                                <has-error :form="form" field="price"></has-error>
                            </div>

                            <!-- From price -->
                          <div class="form-group form-check col-lg-9">
                              <div class="col-lg-12">
                                <input v-model="form.from_price" v-bind:true-value="1" v-bind:false-value="0"  type="checkbox" class="form-check-input" id="desde">
                                <label class="form-check-label" for="desde">¿ Mostrar precio desde ?</label>
                              </div>
                              <has-error :form="form" field="desde"></has-error>
                          </div>


                            <!-- Description -->
                            <div class="form-group col-lg-9">
                                <textarea style="white-space: pre-line;" v-model="form.description" name="description" id="description" rows="5"
                                    placeholder="Descripción no mayor a 2048 caracteres" class="form-control"
                                    :class="{ 'is-invalid': form.errors.has('description') }"></textarea>
                                <has-error :form="form" field="description"></has-error>
                            </div>

                            <!-- Amenities -->
                            <div class="form-group col-lg-12">
                              <p>
                              <a class="btn btn-primary" data-toggle="collapse" href="#amenitiesForm" role="button" aria-expanded="false" aria-controls="amenitiesForm">
                                Amenities
                              </a>
                                <div id="amenitiesForm" class="form-group form-check collapse">
                                  <div class="row">
                                    <div v-for="amenity in amenities" :key="amenity.id" class="col-lg-4">
                                      <input type="checkbox" :id="amenity.title"
                                                             :value="amenity.id"
                                                             v-model="selectedAmenities"
                                                             name="amenities[]" class="form-check-input">
                                      <label class="form-check-label" :for="amenity.title">{{ amenity.title }}</label>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <!-- Status -->
                            <div class="form-group col-lg-9">
                                <select name="type" id="status" class="form-control"
                                    :class="{ 'is-invalid': form.errors.has('status') }"
                                    v-model="form.status">
                                    <option selected value="">--Estado--</option>
                                    <option value="En_obra">En obra</option>
                                    <option value="A_estrenar">A estrenar</option>
                                    <option value="Reservado">Reservado</option>
                                    <option value="En_venta">En venta</option>
                                    <option value="En_Alquiler">Alquiler</option>                                </select>
                                <has-error :form="form" field="status"></has-error>
                            </div>

                          <!-- Featured -->
                          <div class="form-group form-check col-lg-9">
                              <div class="col-lg-12">
                                <input v-model="form.is_featured" v-bind:true-value="1" v-bind:false-value="0" type="checkbox" class="form-check-input" id="featured">
                                <label class="form-check-label" for="featured">Propiedad destacada</label>
                              </div>
                              <has-error :form="form" field="featured"></has-error>
                          </div>
                        <!-- Contact -->
                        <div class="form-group col-lg-6">
                            <div class="">
                              <input v-model="form.contact_name" type="text" name="contact_name" placeholder="Nombre del contacto"
                                  class="form-control" :class="{ 'is-invalid': form.errors.has('contact_name') }">
                              <has-error :form="form" field="contact_name"></has-error>
                            </div>
                        </div
                        >
                        <!-- Contact Phone-->
                        <div class="form-group col-lg-6">
                            <div class="">
                              <input v-model="form.contact_phone" type="text" name="contact_phone" placeholder="Teléfono del contacto"
                                  class="form-control" :class="{ 'is-invalid': form.errors.has('contact_phone') }">
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
        <building-detail :item="selected"/>
    </div>



</template>

<script>
    import ImageUploader from './ImageUploader';
    import BuildingDetail from './BuildingDetail';
    import utils from '../mixins/utils.js'

    export default {
       components: {
            ImageUploader,
            BuildingDetail,
        },
        mixins: [utils],
        data() {
            return {
                editmode: false,
                selected: {},
                buildings: {},
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
                files: [],
                form: new Form({
                    id: '',
                    title: '',
                    address: '',
                    location: '',
                    url_maps: '',

                    from_price: '0',
                    price: '',
                    description: '',
                    status: '',

                    is_featured: '0',
                    contact_name: '',
                    contact_phone: '',

                    images: [],
                    amenities: [],
                })
            }
        },
        methods: {
            getResults(page = 1) {
                axios.get('api/buildings?page=' + page)
                    .then(response => {
                        this.buildings = response.data;
                        let newImgArr = [];
                        res1.data.data.forEach( (current, index)=> {
                          current.images.forEach((img, idx) => {
                              newImgArr.push(img.path);
                          });
                        });

                        this.buildings.images = newImgArr;
                    });
            },
            updateItem(selected) {
              this.$Progress.start();
              const formData = new FormData()
              if(this.files && this.files.length > 0){
                this.files.forEach(file => {
                    formData.append('images[]', file, file.name)
                })
              }


                this.form.amenities = this.selectedAmenities
                this.form.put('api/buildings/' + selected.slug)
                    .then( (res) => {
                  formData.append('id', res.data.id)
                //   formData.append('selected_slug',  selected.slug)
                  formData.append('action',  'edit')
                  formData.append('type', 'building')
                      axios.post('images-upload', formData)
                          .then(()=> {
                            Fire.$emit('AfterCreate');
                            swal(
                                  'Actualizado!',
                                  'Información de edificio actualizada.',
                                  'success' )
                            this.form.reset();
                            this.files = []
                            $('#addNew').modal('hide');

                          this.$Progress.finish();
                          Fire.$emit('AfterCreate')
                           this.loadItems();
                        }).catch(() => {
                            this.$Progress.fail();
                        })
                  })

            },
            editModal(item) {
                this.selectedAmenities = item.amenities.map( am => am.id);
                this.selected = item
                this.editmode = true;
                this.form.reset();
                $('#addNew').modal('show');
                this.form.fill(item);
            },
            newModal() {
                this.editmode = false;
                this.form.reset();
                $('#addNew').modal('show');
            },
            showModal(item) {
                $('#show').modal('show');
            },
            deleteItem(slug) {
                swal({
                    title: 'Estás seguro?',
                    text: "Tené en cuenta que también se borrarán los departamentos asociados",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Borrar'
                }).then((result) => {

                    // Send request to the server
                    if (result.value) {
                        this.form.delete('api/buildings/' + slug).then(() => {
                            swal(
                                'Borrado!',
                                'Edificio borrado.',
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
              this.form.delete('api/images/'+ id +'/building/')
            },
            async loadItems() {
              let vm = this
              axios.all([
                axios.get('api/buildings'),
                axios.get('amenities')
              ]).then(
                axios.spread(function(res1, res2){
                  vm.buildings = res1.data
                  let newImgArr = [];
                  res1.data.data.forEach( (current, index)=> {
                    current.images.forEach((img, idx) => {
                        newImgArr.push(img.path);
                    });
                  });

                  vm.buildings.images = newImgArr;
                  vm.amenities = res2.data
                })
              );
            },

            createItem() {
              this.$Progress.start()
              const formData = new FormData()
              if(this.files && this.files.length > 0){
                this.files.forEach(file => {
                    formData.append('images[]', file, file.name)
                })
              }

              const buildingCreate = this.form.post('api/buildings')
              buildingCreate.then(res => {
                  formData.append('id', res.data.id)
                  formData.append('type', 'building')
                  axios.post('images-upload', formData)
                    .then(()=> {
                      Fire.$emit('AfterCreate');
                      swal(
                            'Creado!',
                            'Edificio creado.',
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
    #addNew{
      z-index: 10000;
    }
    .modal-dialog{
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
                            }
                        }
                        .media {
                            .media-body {
                                .container {
                                    padding-top: 15px;
                                    padding-bottom: 15px;
                                    .cropped{
                                        height: 135px;
                                        overflow: hidden;
                                    }
                                    .info-card {
                                        padding-bottom: 10px;
                                        background-image: linear-gradient(to right, #7d7d7d 33%, rgba(255,255,255,0) 0%);
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
                                        background-image: linear-gradient(#7d7d7d 33%, rgba(255,255,255,0) 0%);
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

