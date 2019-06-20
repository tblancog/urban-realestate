<template>
    <div class="container">
        <!-- <div class="row mt-5" va-if="$gate.isAdminOrAuthor()"> -->
        <div class="row mt-5">
            <div class="col-md-10">
                <div class="card">
                    <form @submit.prevent="saveSliders()" enctype="multipart/form-data">
                        <div class="card-header">
                            <h3 class="card-title">Administrar slider de Home</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-success" @click="addSlide">Crear Nuevo <i
                                        class="fas fa-plus fa-fw"></i></button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li v-for="(slide, idx) in slideshow" v-bind:key="idx" class="list-group-item">
                                    <h3>{{ 'Slide '+idx }}</h3>
                                    <div class="row">

                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label :for="slide.title+idx">Título</label>
                                                <input :id="slide.title.idx" class="form-control" type="text"
                                                    v-model="slide.title" />
                                            </div>

                                            <div class="form-group">
                                                <label :for="slide.subtitle+idx">Subtítulo</label>
                                                <input :id="slide.subtitle.idx" class="form-control" type="text"
                                                    v-model="slide.subtitle" />
                                            </div>
                                        </div>

                                        <div class="col-md-9">
                                            <div class="file-upload-form"> Subir imagen:
                                                <input name="image" multiple="multiple" id="attachments" type="file" @change="previewImage($event, idx)"
                                                    accept="image/jpg">
                                            </div>
                                            <div class="image-preview" v-if="slide.imageData.length > 0">
                                                <img class="preview" :src="slide.imageData">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <button type="button" class="btn btn-danger" @click="removeSlide(idx)"> Borrar </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit"  class="btn btn-primary">Guardar</button >
                        </div>

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
                    imageData: '',
                    fileAttached: []
                }, )
            },
            removeSlide(idx) {
                this.slideshow.splice(idx, 1)
            },
            saveSliders() {
              this.prepareFields()

              let config = {
                headers: { 'Content-Type': 'multipart/form-data' }
              }

              axios.post('/images-upload', this.formData, config)
                .then((res) => { 
                  console.log(res)
                })
              // let files = this.$refs.uploadBtn.files
                // let formData = new FormData()
                // formData.append('file', this.slideshow[0]); 

                // for (let i = 0; i < this.slideshow.length; i++) {
                    // formData.append('image', this.avatarFile, this.avatarFile.name)
                    // let rawData = this.slideshow[i]
                    // formData.append('data', JSON.stringify(rawData))
                // }
                // formData.append('data', this.slideshow[0])
                // console.log(this.slideshow[0])

            },
            prepareFields() {
                
                if (this.attachments.length > 0) {
                    for (var i = 0; i < this.attachments.length; i++) {
                        let attachment = this.attachments[i];
                        this.formData.append('attachments[]', attachment);
                    }
                }
            },
            previewImage: function (event, idx) {

                // console.log(event.target.files[0])
                // let formData = new FormData()
                // formData.append('data[]', this.slideshow[idx])
                // console.log(formData)
                // formData.append('data', this.slideshow[idx])
                // axios.post('/images-upload', formData).then((res)=> {
                  
                //   console.log(res)
                  
                // })
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
        }
    }

</script>

<style>
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
