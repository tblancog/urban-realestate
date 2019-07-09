<template>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10">
                <div class="card">
                    <form action="">
                        <div class="card-header">
                            <h3 class="card-title"> Administración de página Tasaciones </h3>
                        </div>
                        <div class="card-body">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Título</label>
                                    <input class="form-control" type="text" v-model="config.title" />
                                </div>
                                <div class="form-group">
                                    <label id="subtitulo">Subtítulo</label>
                                    <textarea class="form-control" v-model="config.subtitle" id="subtitulo" rows="4">
                          </textarea>
                                </div>
                                <div class="form-check">
                                    <input v-model="config.form" class="form-check-input" type="checkbox"
                                        id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Mostrar formulario
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="hidden" name="_method" value="PUT">
                            <button type="submit" @click.prevent="save()" class="btn btn-primary">Guardar</button>
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
                config: []
            }
        },
        methods: {
          save() {
              this.$Progress.start();
              const endpoint = 'api/config/appraissals'
              let vm = this
              axios.put(endpoint, vm.config)
                   .then((res) => { 
                      Fire.$emit('AfterCreate');
                      swal(
                            'Actualizado!',
                            'Información actualizada.',
                            'success' )
                       this.$Progress.finish();
                      Fire.$emit('AfterCreate')
                    }).catch(() => {
                        this.$Progress.fail();
                    })
          }
        },
        created() {
            const endpoint = 'api/config?module=appraissals'
            const vm = this
            axios.get(endpoint).then((res) => {
                vm.config = res.data
            })
        }
    }

</script>

<style lang="scss">
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

</style>
