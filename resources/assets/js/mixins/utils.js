export default{
  methods: {
     image_path(item, index= 0) {
         if (!item.images) {
             return ''
         }
         if (item.images[index].is_placeholder === '1') {

             return 'storage/placeholder/' + item.images[index].filename
         }
         return 'storage/properties/' + item.slug + '/' + item.images[index].filename
     },
  }
}