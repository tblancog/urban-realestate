export default mixin = {
  methods: {
     image_path(item) {
         if (!item.images) {
             return ''
         }
         if (item.images[0].is_placeholder === '1') {

             return 'storage/placeholder/' + item.images[0].filename
         }
         return 'storage/properties/' + item.slug + '/' + item.images[0].filename
     },
  }
}