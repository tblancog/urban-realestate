<template>
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Casas</h3>
            <div class="card-tools">
              <button class="btn btn-success" @click="newModal">
                Crear Nuevo
                <i class="fas fa-plus fa-fw"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div v-if="houses.data && houses.data.length">
            <div class="media" v-for="house in houses.data" :key="house.id">
              <div class="media-body">
                <div class="container">
                  <div class="row">
                    <div class="col-md-3 col-sm-12 cropped">
                      <a
                        data-toggle="modal"
                        data-target="#exampleModalLong"
                        href="#"
                        @click="selected = house"
                      >
                        <img
                          v-if="house.images.length"
                          :src="house.images[0].path"
                          class="img-fluid"
                        />
                      </a>
                    </div>
                    <div class="col-md-6">
                      <div class="info-card">
                        <!-- <a
                          data-toggle="modal"
                          data-target="#exampleModalLong"
                          href="#"
                          @click="selected = house"
                        >
                          <h5 class="mt-0">{{ house.project_name }}</h5>
                        </a> -->
                        <a :href="getDetailUrl(house, 'houses')" target="_blank">
                            <h5 class="mt-0">{{ house.project_name }}</h5>
                        </a>
                        <i class="fa fa-map-marker-alt fa-fw"></i>
                        {{ house.location }}
                        <i class="fa fa-calendar fa-fw"></i>
                        {{ house.year }}
                        <a
                          href="#"
                          @click="editModal(house)"
                        >
                          <i class="fa fa-edit blue"></i>
                        </a>
                        /
                        <a href="#" @click="deleteItem(house.slug)">
                          <i class="fa fa-trash red"></i>
                        </a>
                      </div>
                      <div class="details-card">
                        <p>{{ house.description.substr(0,200)+'...' }}</p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="more-box">
                        <div class="cta-more">
                          <!-- <router-link :to="{ name: 'houseDetail', params: {  id: house.id } }">
                                                      <a class="btn-more" href="#">Ver más</a>
                          </router-link>-->
                        </div>
                        <!-- <div class="deliver-box">
                                                  <h6>Entrega</h6>
                                                  <h6 class="deliver-date">Noviembre 2021</h6>
                        </div>-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- /.card-body -->
            <div class="card-footer">
              <pagination :data="houses" @pagination-change-page="getResults"></pagination>
            </div>
          </div>
          <div v-else>
            <h5 class="m-5 text-center">No existen casas cargadas</h5>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>

    <!-- Form Modal -->
    <div
      class="modal fade"
      id="addNew"
      tabindex="-1"
      role="dialog"
      aria-labelledby="addNewLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" v-show="!editmode" id="addNewLabel">Crear Nueva Casa</h5>
            <h5 class="modal-title" v-show="editmode" id="addNewLabel">Editar Casa</h5>
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
                  :images="form.images"
                ></image-uploader>
              </div>

              <!-- Project name -->
              <div class="form-group col-lg-9">
                <div class>
                  <input
                    v-model="form.project_name"
                    type="text"
                    name="project_name"
                    placeholder="Proyecto"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('project_name') }"
                  />
                  <has-error :form="form" field="project_name"></has-error>
                </div>
              </div>
              <!-- Project name -->
              <div class="form-group col-lg-4">
                <div class>
                  <input
                    v-model="form.year"
                    type="text"
                    name="year"
                    placeholder="Año"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('year') }"
                  />
                  <has-error :form="form" field="year"></has-error>
                </div>
              </div>

              <!-- Location -->
              <div class="form-group col-lg-9">
                <div class>
                  <input
                    v-model="form.location"
                    type="text"
                    name="location"
                    placeholder="Ubicación"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('location') }"
                  />
                  <has-error :form="form" field="location"></has-error>
                </div>
              </div>

              <!-- services -->
              <div class="form-group col-lg-9">
                <div class>
                  <input
                    v-model="form.services"
                    type="text"
                    name="services"
                    placeholder="Services"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('services') }"
                  />
                  <has-error :form="form" field="services"></has-error>
                </div>
              </div>

              <!-- Description -->
              <div class="form-group col-lg-9">
                <textarea
                  style="white-space: pre-line;"
                  v-model="form.description"
                  name="description"
                  id="description"
                  rows="5"
                  placeholder="Descripción no mayor a 2048 caracteres"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('description') }"
                ></textarea>
                <has-error :form="form" field="description"></has-error>
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
    <item-detail :item="selected" />
  </div>
</template>

<script>
import ImageUploader from "../../components/ImageUploader";
import ItemDetail from "../ItemDetail";
import utils from "../../mixins/utils.js";

export default {
  components: {
    ImageUploader,
    ItemDetail
  },
  mixins: [utils],
  data() {
    return {
      editmode: false,
      selected: {},
      files: [],
      houses: [],
      form: new Form({
        id: "",
        project_name: "",
        year: "",
        location: "",

        services: "",
        description: "",
        images: []
      })
    };
  },
  methods: {
    getResults(page = 1) {
      axios.get("api/houses?page=" + page).then(response => {
        this.houses = response.data;
        let newImgArr = [];
        response.data.data.forEach((current, index) => {
          current.images.forEach((img, idx) => {
            newImgArr.push(img.path);
          });
        });

        this.houses.images = newImgArr;
      });
    },
    updateItem(selected) {
      this.$Progress.start();
      const formData = new FormData();
      if (this.files && this.files.length > 0) {
        this.files.forEach(file => {
          formData.append("images[]", file, file.name);
        });
      }

      this.form.put("api/houses/" + selected.slug).then(res => {
        formData.append("id", res.data.id);
        formData.append('type', 'house');
        //   formData.append('selected_slug',  selected.slug)
        axios
          .post("images-upload", formData)
          .then(() => {
            Fire.$emit("AfterCreate");
            swal(
              "Actualizado!",
              "Información de edificio actualizada.",
              "success"
            );
            this.form.reset();
            this.files = [];
            $("#addNew").modal("hide");

            this.$Progress.finish();
            Fire.$emit("AfterCreate");
            this.loadItems();
          })
          .catch(() => {
            this.$Progress.fail();
          });
      });
    },
    editModal(item) {
      this.selected = item;
      this.editmode = true;
      this.form.reset();
      $("#addNew").modal("show");
      this.form.fill(item);
    },
    newModal() {
      this.editmode = false;
      this.form.reset();
      $("#addNew").modal("show");
    },
    showModal(item) {
      $("#show").modal("show");
    },
    deleteItem(slug) {
      swal({
        title: "Estás seguro?",
        text: "Tené en cuenta que también se borrarán las imágenes asociadas",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Borrar"
      }).then(result => {
        // Send request to the server
        if (result.value) {
          this.form
            .delete("api/houses/" + slug)
            .then(() => {
              swal("Borrada!", "Casa borrada.", "success");
              Fire.$emit("AfterCreate");
            })
            .catch(() => {
              swal("Error!", "Ups, ocurrió un error.", "warning");
            });
        }
      });
    },
    deleteImage(event) {
      const id = event.id;
      this.form.delete("api/images/" + id + "/house/");
    },
    async loadItems() {
      let vm = this;
      axios.all([axios.get("api/houses")]).then(
        axios.spread(function(res1) {
          vm.houses = res1.data;
          let newImgArr = [];
          res1.data.data.forEach((current, index) => {
            current.images.forEach((img, idx) => {
              newImgArr.push(img.path);
            });
          });

          vm.houses.images = newImgArr;
        })
      );
    },

    createItem() {
      this.$Progress.start();
      const formData = new FormData();
      if (this.files && this.files.length > 0) {
        this.files.forEach(file => {
          formData.append("images[]", file, file.name);
        });
      }

      const houseCreate = this.form.post("api/houses");
      houseCreate.then(res => {
        formData.append("id", res.data.id);
        formData.append("type", "house");
        axios.post("images-upload", formData).then(() => {
          Fire.$emit("AfterCreate");
          swal("Creado!", "Casa creada.", "success");
          this.form.reset();
          this.files = [];
          $("#addNew").modal("hide");

          this.$Progress.finish();
        });
      });
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
    Fire.$on("AfterCreate", () => {
      this.loadItems();
    });
  }
};
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
                  background-image: linear-gradient(
                    to right,
                    #7d7d7d 33%,
                    rgba(255, 255, 255, 0) 0%
                  );
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
                  color: #51b848;
                  border: 1px solid #7d7d7d;
                  padding: 10px 25px;
                  text-transform: uppercase;
                  font-weight: 700;
                  letter-spacing: 1px;
                  font-size: 1.4rem;
                  transition: 0.2s;
                  &:hover {
                    text-decoration: none;
                    background-color: #51b848;
                    color: #fff;
                    border: #51b848 1px solid;
                  }
                }
                .details-card {
                  margin-top: 10px;
                }
                .more-box {
                  background-image: linear-gradient(
                    #7d7d7d 33%,
                    rgba(255, 255, 255, 0) 0%
                  );
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
                  background-color: #51b848;
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

