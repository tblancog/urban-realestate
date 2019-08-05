<template>
    <div class="container">
        <!-- <div class="row mt-5" va-if="$gate.isAdminOrAuthor()"> -->
        <div class="row mt-5">
            <div class="col-md-10">
                <div class="card">
                    <form enctype="multipart/form-data">
                        <div class="card-header">
                            <h3 class="card-title">Administrar slider de Home</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-success" @click="addSlide">Crear Nuevo <i
                                        class="fas fa-plus fa-fw"></i></button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div v-cloak class="card-body">
                          <!-- {{ slideshow.length > 0 ? slideshow : 'Still loading' }} -->
                            <div v-if="slideshow.length > 0">
                              <ul class="list-group list-group-flush">
                                <li v-for="(slide, idx) in slideshow" :key="idx" class="list-group-item">
                                    <h3>{{ 'Slide '+idx }}</h3>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label :for="slide.title+idx">Título</label>
                                                <input :id="slide.title+idx" class="form-control" type="text"
                                                    v-model="slide.title" />
                                            </div>

                                            <div class="form-group">
                                                <label :for="slide.subtitle+idx">Subtítulo</label>
                                                <input :id="slide.subtitle+idx" class="form-control" type="text"
                                                    v-model="slide.subtitle" />
                                            </div>

                                            <div class="form-group">
                                                <label :for="slide.link+idx">Link</label>
                                                <input :id="slide.link+idx" class="form-control" type="text"
                                                    v-model="slide.link" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="file-upload-form"> Subir imagen:
                                                    <input name="image" id="attachments" type="file"
                                                        @change="previewImage($event, idx)"
                                                        accept="image/jpg,image/jpeg,image/png">
                                                </div>
                                                <div class="image-preview" v-if="slide && (slide.path || slide.imageData)">
                                                <img class="preview" :src="slide.imageData || slide.path">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <button type="button" class="btn btn-danger" @click="removeSlide(slide.id, idx)"> Borrar </button>
                                                <button type="button"  class="btn btn-primary" @click="saveSlide(slide, idx)">Guardar</button >
                                            </div>
                                        </div>
                                    </div>
                                </li>
                              </ul>
                            </div>
                            <div v-else>
                               <h5 class="m-5 text-center">No existen slides de home cargados</h5>
                            </div>
                        </div>
                        <!-- /.card-body -->


                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>



</template>
<script>
    export default {
        data() {
            return {
                attachments: [],
                slideshow: [],
                formData: new FormData()
            }

        },
        methods: {
            addSlide() {
                this.slideshow.push({
                    title: '',
                    subtitle: '',
                    link: '',
                    imageData: '',
                    fileAttached: []
                }, )
            },
            removeSlide(id, idx) {
                this.slideshow.splice(idx, 1)
                 axios
                    .delete('/delete-sliders/'+id)
                    .then((res) => {})
            },
            saveSlide( slide, index) {
                let config = {
                    headers: { 'Content-Type': 'multipart/form-data' }
                }
                this.prepareImageData()
                this.formData.append( 'slide', JSON.stringify(slide) )
                this.formData.append( 'index', index )
                axios.post('/upload-sliders', this.formData, config)
                    .then( (res)=> {
                        Fire.$emit('AfterCreate');
                        toast({
                            type: 'success',
                            title: `Slide ${slide.title} guardado`
                        })
                        $('#addNew').modal('hide');

                        this.$Progress.finish();
                        Fire.$emit('AfterCreate')

                    } )
            },
            prepareData() {

              this.formData = new FormData()
              if (this.slideshow.length > 0) {
                for (let i = 0; i < this.slideshow.length; i++) {
                  let title = this.slideshow[i].title
                      let subtitle = this.slideshow[i].subtitle

                      this.formData.append('slides', JSON.stringify( title, subtitle ))
                  }
              }

            },
            prepareImageData(){
              this.formData = new FormData()
              if (this.attachments.length > 0) {
                  for (var i = 0; i < this.attachments.length; i++) {
                      let attachment = this.attachments[i]
                      this.formData.append('attachments[]', attachment)
                  }
              }

              },
            previewImage: function (event, idx) {

                // Reference to the DOM input element
                var input = event.target;
                // Ensure that you have a file before attempting to read it
                if (input.files && input.files[0]) {

                    this.attachments.push(input.files[0]);
                    // create a new FileReader to read this image and convert to base64 format
                    var reader = new FileReader();
                    // Define a callback function to run, when FileReader finishes its job
                    reader.onload = (e) => {
                        // Note: arrow function used here, so that "this.imageData" refers to the imageData of Vue component
                        // Read image as base64 and set to imageData
                        this.slideshow[idx].imageData = e.target.result;
                    }
                    // Start the reader job - read file as a data url (base64 format)
                    reader.readAsDataURL(input.files[0]);
                }
            }
        },
        created(){
          axios.get('/get-sliders').then( (res) => {
            this.slideshow = res.data.sliders.map( (el)=> {
              return {
                  id: el.id,
                  title: el.title,
                  subtitle: el.subtitle,
                  link: el.link,
                  imageData: el.base64img,
                  path: el.path
              }
            } )
          })
        }
    }

</script>

<style>
  [v-cloak] > * { display:none; }
  [v-cloak]::before { content: "Cargando..."; }

    .file-upload-form,
    .image-preview {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        padding: 20px;
    }

    img.preview {
        width: 50%;
        background-color: white;
        border: 1px solid #DDD;
        padding: 5px;
    }

</style>
