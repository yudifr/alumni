<template>
  <div class="main-layout">
    <div v-if="user">

    <navbar />
</div>
    <div class="container-fluid mt-4">
      <child />
      
    </div>
  </div>
</template>
<style scoped>
@Media (min-width: 1900px) {
  .container {
  max-width: 90%;
  } 
}
</style>
<script>
import Navbar from '~/components/Navbar'
import { mapGetters } from 'vuex'

export default {
  name: 'MainLayout',
computed: mapGetters({
    user: 'auth/user'
  }),
  components: {
    Navbar,
  }
}
</script>
