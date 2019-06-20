<template>
    <div class="container">
        <!-- <div class="row mt-5" va-if="$gate.isAdminOrAuthor()"> -->
        <div class="row mt-5">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Administrar slider de Home</h3>
                        <div class="card-tools">
                            <button class="btn btn-success" @ click="newModal">Crear Nuevo <i
                                    class="fas fa-plus fa-fw"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <form action="">
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

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label :for="slide.title_color+idx">Color</label>
                                                <input :id="slide.title_color.idx" class="form-control" type="text"
                                                    v-model="slide.title_color" />
                                            </div>

                                            <div class="form-group">
                                                <label :for="slide.subtitle_color+idx">Color de Subtítulo</label>
                                                <input :id="slide.subtitle_color.idx" class="form-control" type="text"
                                                    v-model="slide.subtitle_color" />
                                            </div>
                                        </div>

                                        <div class="col-md-9">
                                            <div class="file-upload-form">
                                                Subir imagen:
                                                <input name="image[]" type="file" @change="previewImage" accept="image/*">
                                            </div>
                                            <div class="image-preview" v-if="imageData.length > 0">
                                                <img class="preview" :src="imageData">
                                            </div>
                                        </div>


                                    </div>
                                </li>
                            </form>

                        </ul>


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="btn btn-primary">Guardar</div>
                    </div>
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
              imageData: '',
              slideshow: [{
                        title: 'Torre Acha 1',
                        subtitle: 'Lorem ipsum dolor siamet 1',
                        title_color: '#FFFFF',
                        subtitle_color: '#FFFFF',
                    },
                    {
                        title: 'Torre Acha 2',
                        subtitle: 'Lorem ipsum dolor siamet 2',
                        title_color: '#1FFFF',
                        subtitle_color: '#1FFFF',
                    },
                    {
                        title: 'Torre Acha 3',
                        subtitle: 'Lorem ipsum dolor siamet 3',
                        title_color: '#F2FFF',
                        subtitle_color: '#F2FFF',
                    },
                    {
                        title: 'Torre Acha 4',
                        subtitle: 'Lorem ipsum dolor siamet 4',
                        title_color: '#FF3FF',
                        subtitle_color: '#FF3FF',
                    },
                ]
            }

        },
        methods: {
            previewImage: function(event) {
            // Reference to the DOM input element
            var input = event.target;
            // Ensure that you have a file before attempting to read it
            if (input.files && input.files[0]) {
                // create a new FileReader to read this image and convert to base64 format
                var reader = new FileReader();
                // Define a callback function to run, when FileReader finishes its job
                reader.onload = (e) => {
                    // Note: arrow function used here, so that "this.imageData" refers to the imageData of Vue component
                    // Read image as base64 and set to imageData
                    this.imageData = e.target.result;
                }
                // Start the reader job - read file as a data url (base64 format)
                reader.readAsDataURL(input.files[0]);
            }
        }
        }
    }

</script>

<style>
  .file-upload-form, .image-preview {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    padding: 20px;
}
img.preview {
    width: 50%;
    background-color: white;
    border: 1px solid #DDD;
    padding: 5px;
}

</style>
