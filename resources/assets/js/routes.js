export default [{
        path: '/users',
        component: require('./components/User.vue')
    },
    {
        path: '/dashboard',
        component: require('./components/Dashboard.vue')
    },
    //   Real Estate
    {
        path: '/slidersReal',
        component: require('./components/Slider.vue')
    },
    {
        path: '/buildingAdmin',
        component: require('./components/Building.vue')
    },
    {
        path: '/apartmentAdmin',
        component: require('./components/Apartment.vue')
    },
    {
        path: '/investmentAdmin',
        component: require('./components/InvestmentAdmin.vue')
    },
    {
        path: '/appraisalAdmin',
        component: require('./components/AppraisalAdmin.vue')
    },
    {
        path: '/creditAdmin',
        component: require('./components/CreditAdmin.vue')
    },
    {
        path: '/contactAdmin',
        component: require('./components/ContactAdmin.vue')
    },
    {
        name: 'buildingDetail',
        path: '/buildingList/:id',
        component: require('./components/BuildingDetail.vue')
    },
    {
        name: 'apartmentDetail',
        path: '/apartmentList/:id',
        component: require('./components/ApartmentDetail.vue')
    },
    //   Developers
    {
        path: '/slidersDevelopers',
        component: require('./components/Slider.vue')
    },
    {
        path: '/projectsAdmin',
        component: require('./components/developers/Project.vue')
    },
    {
        path: '/articlesReal',
        component: require('./components/articles/Article.vue'),
    },
    {
        path: '/articlesDevelopers',
        component: require('./components/articles/Article.vue'),
    },
    {
        path: '/articlesHouses',
        component: require('./components/articles/Article.vue'),
    },
    //   Houses
    {
        path: '/slidersHouses',
        component: require('./components/Slider.vue')
    },
    {
        path: '/housesAdmin',
        component: require('./components/houses/House.vue')
    },
    {
        path: '*',
        component: require('./components/NotFound.vue')
    }
]
