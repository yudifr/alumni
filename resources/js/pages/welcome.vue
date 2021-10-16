<template>
  <div>
    <div class="top-right links">
      <template v-if="authenticated">
        <router-link :to="{ name: 'home' }">
          home
        </router-link>
      </template>
      <template v-else>
        <router-link :to="{ name: 'login' }">
         login
        </router-link>
        <router-link :to="{ name: 'register' }">
          register
        </router-link>
      </template>
    </div>
<div class="card">
                  <div class="card-body d-flex flex-column">
                    <h4><a href="#">You don't like your job, you don't strike.</a></h4>
                    <div class="text-muted">But, Aquaman, you cannot marry a woman without gills. You're from two different worlds… Oh, I've ...</div>
                    <div class="d-flex align-items-center pt-5 mt-auto">
                      <div class="avatar avatar-md mr-3" style="background-image: url(./demo/faces/male/35.jpg)"></div>
                      <div>
                        <a href="./profile.html" class="text-default">Craig Anderson</a>
                        <small class="d-block text-muted">3 days ago</small>
                      </div>
                      <div class="ml-auto text-muted">
                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
    <div class="text-center">
      <div class="title mb-4">
        {{ title }}
      </div>

      <div class="links">
        <a href="https://github.com/cretueusebiu/laravel-vue-spa">github.com/cretueusebiu/laravel-vue-spa</a>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
  layout: 'basic',

  metaInfo () {
    return { title: this.$t('home') }
  },

  data: () => ({
    title: window.config.appName
    
  }),

  computed: mapGetters({
    authenticated: 'auth/check'
  })
}
</script>

<style scoped>
.top-right {
  position: absolute;
  right: 10px;
  top: 18px;
}

.title {
  font-size: 85px;
}
</style>
