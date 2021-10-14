<template>
  <card :title="$t('home')">
      <router-view>
      
    </router-view>
  </card>
</template>

<script>
export default {
  middleware: 'auth',

  metaInfo () {
    return { title: this.$t('home') }
  }
}
</script>
