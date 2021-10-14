<template>
  <div class="main-layout">
    <div v-if="user">

    <navbar />
    <navbar2/>
</div>
    <div class="container mt-4">
      <child />
      
    </div>
  </div>
</template>

<script>
import Navbar from '~/components/Navbar'
import Navbar2 from '~/components/Navbar2'
import { mapGetters } from 'vuex'

export default {
  name: 'MainLayout',
computed: mapGetters({
    user: 'auth/user'
  }),
  components: {
    Navbar,
    Navbar2,
  }
}
</script>
