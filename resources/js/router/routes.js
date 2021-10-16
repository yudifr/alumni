function page (path) {
  return () => import(/* webpackChunkName: '' */ `~/pages/${path}`).then(m => m.default || m)
}

export default [
  { path: '/', name: 'welcome', component: page('welcome.vue') },

  { path: '/login', name: 'login', component: page('auth/login.vue') },
  { path: '/register',
   name: 'register',
    component: page('auth/register.vue') ,
    children:[
      {path:'alumni',name:'register.alumni',component:page('auth/registerAlumni.vue')},
      {path:'institution',name:'register.institution',component:page('auth/registerInstitution.vue')},
      {path:'consumer',name:'register.consumer',component:page('auth/registerConsumer.vue')},
      
    ]
  },
  { path: '/password/reset', name: 'password.request', component: page('auth/password/email.vue') },
  { path: '/password/reset/:token', name: 'password.reset', component: page('auth/password/reset.vue') },
  { path: '/email/verify/:id', name: 'verification.verify', component: page('auth/verification/verify.vue') },
  { path: '/email/resend', name: 'verification.resend', component: page('auth/verification/resend.vue') },

  { path: '/consumer', name: 'consumer', 
    component: page('home.vue'),
    children: [
      {path:'',name:'consumer.data',component:page('consumer/data.vue')},
      {path:'kuisioner',name:'consumer.kuisioner',component:page('consumer/kuisioner.vue')},
      { path:'karyawan/:id', name:'consumer.profilKaryawan', component: page('consumer.profileKaryawan.vue') }

    ]
},
  {
    path: '/settings',
    component: page('settings/index.vue'),
    children: [
      { path: '', redirect: { name: 'settings.profile' } },
      { path: 'profile', name: 'settings.profile', component: page('settings/profile.vue') },
      { path: 'password', name: 'settings.password', component: page('settings/password.vue') },
    ]
  },
  { path: '/example', name: 'example', component: page('example.vue') },

  { path: '*', component: page('errors/404.vue') }
]
