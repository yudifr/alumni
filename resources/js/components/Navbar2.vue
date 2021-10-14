<template>
  <nav class="header collapse d-lg-flex p-0 navbar-light bg-white">
          <div class="container">
            <div class="row align-items-center">
             
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row" v-if="this.$route.name.includes('consumer')">
                  
                 <li class="nav-item">
                    <router-link to="/consumer" :class=" this.$route.path == '/consumer' ?  'nav-link active' : 'nav-link'"   id="home" ><i class="fe fe-home"></i> Home</router-link>
                  </li>
                   <li class="nav-item ">
                    <router-link to="/consumer/kuisioner"  :class=" this.$route.path == '/consumer/kuisioner' ?  'nav-link active' : 'nav-link'"  id="kuisioner" ><i class="fe fe-check-square"></i>Kuisioner</router-link>
                  </li>
                  <li class="nav-item dropdown">
                    <router-link to="/consumer/new-feed"  :class=" this.$route.path == '/consumer/new-feed' ?  'nav-link active' : 'nav-link'"  id="newFeed" ><i class="fe fe-file"></i>Pengumuman</router-link>
                  </li>
                </ul>
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row" v-else-if="this.$route.name.includes('/alumni')">

                  <li class="nav-item">
                    <router-link to="/alumni" :class=" this.$route.path == '/alumni' ?  'nav-link active' : 'nav-link'"   id="home" ><i class="fe fe-home"></i> Home</router-link>
                  </li>
                  <li class="nav-item dropdown">
                    <router-link to="/alumni/kuisioner"  :class=" this.$route.path == '/alumni/kuisioner' ?  'nav-link active' : 'nav-link'"  id="kuisioner" ><i class="fe fe-check-square"></i>Kuisioner</router-link>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
</template>

<script>
export default {
  name: 'Navbar2',
  methods:{
    
  }
}
</script>

