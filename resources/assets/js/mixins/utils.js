export default{
  methods: {
     image_path(item, index= 0) {
      if (!item.hasOwnProperty('images') || item.images.length === 0) {
          return 'img/core-img/placeholder.svg'
        }
        return 'uploads/properties/' + item.slug + '/' + item.images[index].filename
     }
  }
}