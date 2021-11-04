<template>
  <div class="row">
    <div class="col-lg-8 m-auto">
      
        
     
    </div>
                                <div class="page page-center">
                                  <div class="container-tight py-4">
                                    
                                    <form class="card card-md" @submit.prevent="login" @keydown="form.onKeydown($event)">
                                      <div class="card-body">
                                        <h2 class="card-title text-center mb-4">Login to your account</h2>
                                        <div class="mb-3">
                                          <label class="form-label">Email address</label>
                                          <input type="email" name="email" class="form-control" placeholder="Enter email" v-model="form.email" :class="{ 'is-invalid': form.errors.has('email') }">
                                             <has-error :form="form" field="email" />

                                        </div>
                                        <div class="mb-2">
                                          <label class="form-label">
                                            Password
                                            
                                          </label>
                                          <div class="input-group input-group-flat">
                                            <input type="password" class="form-control" placeholder="Password" v-model="form.password" :class="{ 'is-invalid': form.errors.has('password') }">
                                            <has-error :form="form" field="password" />
                                            
                                          </div>
                                        </div>
                                        <div class="mb-2">
                                          <label class="form-check">
                                            <input type="checkbox" v-model="remember" name="remember" class="form-check-input">
                                            <span class="form-check-label">Remember me on this device</span>
                                          </label>
                                        </div>
                                        <div class="form-footer">
                                          <div class="form-group row">
            
          </div>

          <div class="form-group row">
            <div class="">
              <!-- Submit Button -->
              <v-button :loading="form.busy">
                {{ $t('login') }}
              </v-button>

           
            </div>
          </div>
                                        </div>
                                      </div>
                                      
                                    </form>
                                    <div class="text-center text-muted mt-3">
                                      Don't have account yet? <router-link :to="{ name: 'register' }"> Sign up</router-link>
                                    </div>
                                  </div>
                                </div>
  </div>
</template>

<script>
import Form from 'vform'
import Cookies from 'js-cookie'
import LoginWithGithub from '~/components/LoginWithGithub'

export default {
  components: {
    LoginWithGithub
  },

  middleware: 'guest',

  metaInfo () {
    return { title: this.$t('login') }
  },

  data: () => ({
    form: new Form({
      email: '',
      password: ''
    }),
    remember: false
  }),

  methods: {
    async login () {
      // Submit the form.
      const { data } = await this.form.post('/api/login')

      // Save the token.
      this.$store.dispatch('auth/saveToken', {
        token: data.token,
        remember: this.remember
      })
  
      // Fetch the user.
     const user = await this.$store.dispatch('auth/fetchUser')

      // Redirect home.
      this.redirect(user)
    },

    redirect (user) {
      console.log(user)
      if (user.role == 'consumer') {
        this.$router.push({ name: 'consumer.data' })
      }
    }
  }
}
</script>
