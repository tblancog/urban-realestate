export default{
  methods: {
     image_path(item, index= 0) {
         if (!item.images) {
             return ''
         }
         else if (item.images[index] && item.images[index].is_placeholder === '1') {

             return 'uploads/placeholder/' + item.images[index].filename
         }
         return 'uploads/properties/' + item.slug + '/' + item.images[index].filename
     },
  }
}