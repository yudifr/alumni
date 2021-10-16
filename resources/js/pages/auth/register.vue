<template>
<div>
  <div class="row justify-content-center"  >
    <div class="col-lg-2  hov " id="alumni" :class=" this.$route.path == '/register/alumni' ?  'active' : ''">
      <router-link to="/register/alumni" >
        <card class=" ">
          Alumni
        </card>
      </router-link>
            
    </div>
     <div class="col-lg-2   hov"   id="institution" :class=" this.$route.path == '/register/institution' ?  'active' : ''"> 
               <router-link to="/register/institution">

        <card class="">
          Institusi
        </card>
      </router-link>
    </div>
    
     <div class="col-lg-2   hov"  id="consumer" :class=" this.$route.path == '/register/consumer' ?  'active' : ''">
                 <router-link to="/register/consumer">

        <card class="hov">
          Consumer
        </card>
                 </router-link>
      </div>
      
    
  </div>
  <div class=" container-fluid mt-3">
         <router-view>
    
  </router-view>
      </div>
 </div>
</template>
<style scoped>
a{
color: blue;
}
a:hover{
  text-decoration: none;
  font-size: 15px;
}
div.active *{
  background-color: #d9dedb !important;
}
.hov{
  opacity: 0.7;
  transition: 0.3s;
}
.hov:hover{
  opacity: 1;
}
</style>
<script>
 
import Form from 'vform'
import LoginWithGithub from '~/components/LoginWithGithub'
// import Card from '../../components/Card.vue'

export default {
  components: {
    LoginWithGithub
  },

  middleware: 'guest',

  metaInfo () {
    return { title: this.$t('register') }
  },

  data: () => ({
    form: new Form({
      name: '',
      email: '',
      role: '',
      password: '',
      password_confirmation: ''
    }),
    mustVerifyEmail: false
  }),

  methods: {
    async register () {
      // Register the user.
      const { data } = await this.form.post('/api/register')

      // Must verify email fist.
      if (data.status) {
        this.mustVerifyEmail = true
      } else {
        // Log in the user.
        const { data: { token } } = await this.form.post('/api/login')

        // Save the token.
        this.$store.dispatch('auth/saveToken', { token })

        // Update the user.
        await this.$store.dispatch('auth/updateUser', { user: data })

        // Redirect home.
        this.$router.push({ name: 'home' })
      }
    }
  }
}
</script>
