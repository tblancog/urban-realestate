export default{
  methods: {
     image_path(item, index= 0) {
        if (!item.images) {
         return ''
        }
        return 'uploads/properties/' + item.slug + '/' + item.images[index].filename
     }
  }
}