export default{
data(){
    return {
        locations: [
        'agronomia',
        'almagro',
        'balvanera',
        'barracas',
        'belgrano',
        'boca',
        'boedo',
        'caballito',
        'chacarita',
        'coghlan',
        'colegiales',
        'constitucion',
        'flores',
        'floresta',
        'liniers',
        'mataderos',
        'monserrat',
        'monte castro',
        'nueva pompeya',
        'nuñez',
        'palermo',
        'parque avellaneda',
        'parque chacabuco',
        'parque chas',
        'parque patricios',
        'paternal',
        'puerto madero',
        'recoleta',
        'retiro',
        'saavedra',
        'san cristobal',
        'san nicolas',
        'san telmo',
        'velez sarsfield',
        'versalles',
        'villa crespo',
        'villa del parque',
        'villa devoto',
        'villa gral. mitre',
        'villa lugano',
        'villa luro',
        'villa ortuzar',
        'villa pueyrredon',
        'villa real',
        'villa riachuelo',
        'villa santa rita',
        'villa soldati',
        'villa urquiza',

    ]
    }
},
  methods: {
     image_path(item, index= 0, property= 'buildings') {
      if (!item.hasOwnProperty('images') || item.images.length === 0) {
          return 'img/core-img/placeholder.svg'
        }
          return 'uploads/properties/' + property + '/'
                                       + item.id + '/'
                                       + item.images[index].filename
     }
  }
}
