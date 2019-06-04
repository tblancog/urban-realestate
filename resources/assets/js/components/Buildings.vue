<template>
    <div class="container">
        <!-- <div class="row mt-5" v-if="$gate.isAdminOrAuthor()"> -->
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edificios</h3>
                        <div class="card-tools">
                            <button class="btn btn-success" @click="newModal">Crear Nuevo <i
                                    class="fas fa-user-plus fa-fw"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    
                    <div class="media" v-for="building in buildings.data" :key="building.id">
                      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="//via.placeholder.com/170x100/0000FF" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="//via.placeholder.com/170x100/FF00FF" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="//via.placeholder.com/170x100/330088" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                      <div class="media-body">
                        <router-link :to="{ name: 'buildingDetail', params: {  id: building.id } }">
                          <h5 class="mt-0">{{ building.title }}</h5>
                        </router-link>
                        Dirección{{ building.address }}
                        USD {{ building.price }}

                        <a href="#" @click="editModal(building)">
                            <i class="fa fa-edit blue"></i>
                        </a>
                        /
                        <a href="#" @click="deleteItem(building.id)">
                            <i class="fa fa-trash red"></i>
                        </a>
                      </div>
                    </div>
                    
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <pagination :data="buildings" @pagination-change-page="getResults"></pagination>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNewLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" v-show="!editmode" id="addNewLabel">Add New</h5>
                        <h5 class="modal-title" v-show="editmode" id="addNewLabel">Editar edificio</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="editmode ? updateItem() : createItem()">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="form.title" type="text" name="title" placeholder="Título"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('title') }">
                                <has-error :form="form" field="title"></has-error>
                            </div>

                            <div class="form-group">
                                <input v-model="form.address" type="text" name="address" placeholder="Dirección"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('address') }">
                                <has-error :form="form" field="address"></has-error>
                            </div>

                            <div class="form-group">
                              <input v-model="form.url_maps" type="text" name="url_maps" placeholder="Url de google maps"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('url_maps') }">
                                <has-error :form="form" field="url_maps"></has-error>
                            </div>

                            <div class="form-group">
                               <label>
                                  <input class="form-control" :class="{ 'is-invalid': form.errors.has('from_price') }"
                                         v-model="form.from_price" 
                                         type="checkbox" value="1">
                                  ¿Mostrar precio desde?
                                </label>
                                <has-error :form="form" field="from_price"></has-error>
                            </div>

                            <div class="form-group">
                              <input v-model="form.price" type="number" name="price" placeholder="Precio"
                                    class="form-control" :class="{ 'is-invalid': form.errors.has('price') }">
                                <has-error :form="form" field="price"></has-error>
                            </div>

                            <div class="form-group">
                                <textarea v-model="form.description" name="description" id="description"
                                    placeholder="Descripción no mayor a 2048 caracteres" class="form-control"
                                    :class="{ 'is-invalid': form.errors.has('description') }"></textarea>
                                <has-error :form="form" field="description"></has-error>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            <button v-show="editmode" type="submit" class="btn btn-success">Guardar</button>
                            <button v-show="!editmode" type="submit" class="btn btn-primary">Crear</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>



</template>

<script>
    export default {
        data() {
            return {
                editmode: false,
                buildings: {},
                form: new Form({
                  'title': '',
                  'address': '',
                  'url_maps': '',
                  'from_price': '',
                  'price': '',
                  'description': '',
                  'status': '',
                  'is_featured': ''
                })
            }
        },
        methods: {
            getResults(page = 1) {
                axios.get('api/buildings?page=' + page)
                    .then(response => {
                        this.buildings = response.data;
                    });
            },
            updateUser() {
                this.$Progress.start();
                // console.log('Editing data');
                this.form.put('api/user/' + this.form.id)
                    .then(() => {
                        // success
                        $('#addNew').modal('hide');
                        swal(
                            'Updated!',
                            'Information has been updated.',
                            'success'
                        )
                        this.$Progress.finish();
                        Fire.$emit('AfterCreate');
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    });

            },
            editModal(item) {
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
            deleteItem(id) {
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {

                    // Send request to the server
                    if (result.value) {
                        this.form.delete('api/buildings/' + id).then(() => {
                            swal(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                            Fire.$emit('AfterCreate');
                        }).catch(() => {
                            swal("Failed!", "There was something wronge.", "warning");
                        });
                    }
                })
            },
            loadItems() {
                // if (this.$gate.isAdminOrAuthor()) {
                    axios.get("api/buildings").then(({
                        data
                    }) => (this.buildings = data));
                // }
            },

            createItem() {
                this.$Progress.start();

                this.form.post('api/buildings')
                    .then(() => {
                        Fire.$emit('AfterCreate');
                        $('#addNew').modal('hide')

                        toast({
                            type: 'success',
                            title: 'Building Created in successfully'
                        })
                        this.$Progress.finish();

                    })
                    .catch(() => {

                    })
            }
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
            //    setInterval(() => this.loadItems(), 3000);
        }

    }

</script>
