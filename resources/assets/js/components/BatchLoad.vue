<template>
    <!-- Form Modal -->
    <div class="modal fade" id="batch" tabindex="-1" role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">
                            <div class="col-md-12">
                                <div class="row">
                                    <h1>Carga masiva</h1>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row my-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file" name="file" ref="file" v-on:change="handleFileUpload()" accept="text/csv">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        <small id="passwordHelpInline" class="text-muted">
                                            solo CSV
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <!-- Content -->
                        </div>

                        <!-- Status -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-success" @click="submitFile()">Procesar</button>
                        </div>
                </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                file: ''
            }
        },
        methods: {
            handleFileUpload() {
                this.file = this.$refs.file.files[0];
            },
            submitFile(){
                let formData = new FormData();
                formData.append('file', this.file);
                axios.post( '/batch',
                            formData,
                            {
                                headers: {
                                    'Content-Type': 'multipart/form-data'
                                }
                            }
                            ).then(function(){
                            console.log('SUCCESS!!');
                            })
                            .catch(function(){
                            console.log('FAILURE!!');
                            });
            },
        }
    }

</script>

<style lang="scss">
    .modal-dialog.modal-dialog-centered {
        max-width: 800px;
        margin: 0 auto;
    }

    .carousel-item {
        height: 300px;
        overflow: hidden;
    }

</style>
