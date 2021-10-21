<template>
<div>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <router-link :to="{ name: user ? 'home' : 'welcome' }" class="navbar-brand">
        {{ appName }}
      </router-link>

     
      
          
    
     
      </div>
    
  </nav>
              <div id="navbarToggler" class=" navbar-collapse show" >
    
    <nav class="navbar navbar-expand-md d-md-flex p-0 navbar-light bg-white">
      
          <div class="container">
            <div class="row align-items-center">
             
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row" v-if="this.$route.name.includes('consumer')">
                  
                 <li class="nav-item">
                    <router-link to="/consumer" :class=" this.$route.path == '/consumer' ?  'nav-link active' : 'nav-link'"   id="home" ><i class="fe fe-home"></i> Home</router-link>
                  </li>
                   <li class="nav-item ">
                    <router-link to="/consumer/kuisioner"  :class=" this.$route.path == '/consumer/asd' ?  'nav-link active' : 'nav-link'"  id="kuisioner" ><i class="fe fe-check-square"></i>Kuisioner</router-link>
                  </li>
                  <li class="nav-item dropdown">
                    <router-link to="/consumer/new-feed"  :class=" this.$route.path == '/consumer/new-feed' ?  'nav-link active' : 'nav-link'"  id="newFeed" ><i class="fe fe-file"></i>Pengumuman</router-link>
                  </li>
                </ul>
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row" v-else-if="this.$route.name.includes('alumni')">

                  <li class="nav-item">
                    <router-link to="/alumni" :class=" this.$route.path == '/alumni' ?  'nav-link active' : 'nav-link'"   id="home" ><i class="fe fe-home"></i> Home</router-link>
                  </li>
                  <li class="nav-item dropdown">
                    <router-link to="/alumni/kuisioner"  :class=" this.$route.path == '/alumni/kuisioner' ?  'nav-link active' : 'nav-link'"  id="kuisioner" ><i class="fe fe-check-square"></i>Kuisioner</router-link>
                  </li>
                </ul>
              </div>
                 
              </div>
        
              <ul class="nav nav-tabs border-0 flex-column flex-lg-row">

              <li  class="nav-item dropdown">
              <a href="" class="nav-link d-flex lh-1 text-reset p-0 show" data-bs-toggle="dropdown" aria-label="Open user menu" aria-expanded="false">
              
              <img :src="user.photo_url" class="rounded-circle profile-photo "> 
              <div class="p-2">
              {{ user.name }}
              </div>
            </a>
            <div class="dropdown-menu">
              <router-link :to="{ name: 'settings.profile' }" class="dropdown-item pl-3">
                {{ $t('settings') }}
              </router-link>

              <div class="dropdown-divider" />
              <a href="" class="dropdown-item pl-3" @click.prevent="logout">
                {{ $t('logout') }}
              </a>
            </div>
          </li>

        </ul>
        </div>
            </nav>
       
        </div>
        </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
  components: {
 
  },

  data: () => ({
    appName: window.config.appName
  }),

  computed: mapGetters({
    user: 'auth/user'
  }),

  methods: {
    async logout () {
      // Log out the user.
      await this.$store.dispatch('auth/logout')

      // Redirect to login.
      this.$router.push({ name: 'login' })
    }
  }
}
</script>

<style scoped>
.profile-photo {
  width: 2rem;
  height: 2rem;
  margin: -.375rem 0;
}
</style>
