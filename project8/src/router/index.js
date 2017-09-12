import Vue from 'vue'
import Router from 'vue-router'
import com_zzytj from '@/components/page/com_zzytj'
import com_10c from '@/components/page/com_10c'
import com_12c from '@/components/page/com_12c'
import com_15c from '@/components/page/com_15c'
import com_2tht from '@/components/page/com_2tht'
import com_3_0f from '@/components/page/com_3_0f'
import com_3_0k from '@/components/page/com_3_0k'
import com_3tht from '@/components/page/com_3tht'
import com_5_0d from '@/components/page/com_5_0d'
import com_6_0h from '@/components/page/com_6_0h'
// import main from '@/components/page/main'
// import choose from '@/components/page/choose'

Vue.use(Router)

export default new Router({
  routes: [
    // {
    //   path: '/',
    //   name: 'Default',
    //   component: Default
    // },
    {
      path: '/com_zzytj',
      name: 'com_zzytj',
      component: com_zzytj
    }, {
      path: '/com_10c',
      name: 'com_10c',
      component: com_10c
    },
    {
      path: '/com_12c',
      name: 'com_12c',
      component: com_12c
    }, {
      path: '/com_15c',
      name: 'com_15c',
      component: com_15c
    }, {
      path: '/com_2tht',
      name: 'com_2tht',
      component: com_2tht
    }, {
      path: '/com_3_0f',
      name: 'com_3_0f',
      component: com_3_0f
    }, {
      path: '/com_3_0k',
      name: 'com_3_0k',
      component: com_3_0k
    }, {
      path: '/com_3tht',
      name: 'com_3tht',
      component: com_3tht
    }, {
      path: '/com_5_0d',
      name: 'com_5_0d',
      component: com_5_0d
    }, {
      path: '/com_6_0h',
      name: 'com_6_0h',
      component: com_6_0h
    },
    // {
    //   path: 'main',
    //   name: 'main',
    //   component: main
    // },{
    //   path: 'choose',
    //   name: 'choose',
    //   component: choose
    // },
  ]
})
