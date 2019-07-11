export default [{
          path: '/users',
          component: require('./components/User.vue')
      },
      {
          path: '/dashboard',
          component: require('./components/Dashboard.vue')
      },
      {
          path: '/sliderAdmin',
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
      {
          path: '*',
          component: require('./components/NotFound.vue')
      }
  ]