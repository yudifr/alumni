<template>
  <div class="row">
    <div class="col-lg-8 m-auto">
      <card v-if="mustVerifyEmail" :title="$t('register')">
        <div class="alert alert-success" role="alert">
          {{ $t('verify_email_address') }}
        </div>
      </card>
      <card v-else :title="'Register Consumer' ">
        <form @submit.prevent="register" @keydown="form.onKeydown($event)">
          <!-- Name -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">Nama Perusahaan</label>
            <div class="col-md-7">
              <input v-model="form.name" :class="{ 'is-invalid': form.errors.has('name') }" class="form-control" type="text" name="name">
              <has-error :form="form" field="name" />
            </div>
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">No telp</label>
            <div class="col-md-7">

              <input v-model="form.no_telp" pattern="\d*" :class="{ 'is-invalid': form.errors.has('no_telp') }" class="form-control" type="text" name="no_telp" placeholder="08xxxxxxxxxxxx">
              <has-error :form="form" field="no_telp" />
            </div>
          </div>

          <!-- Email -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">{{ $t('email') }}</label>
            <div class="col-md-7">
              <input v-model="form.email" :class="{ 'is-invalid': form.errors.has('email') }" class="form-control" type="email" name="email">
              <has-error :form="form" field="email" />
            </div>
          </div>

          <!-- Password -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">{{ $t('password') }}</label>
            <div class="col-md-7">
              <input v-model="form.password" :class="{ 'is-invalid': form.errors.has('password') }" class="form-control" type="password" name="password">
              <has-error :form="form" field="password" />
            </div>
          </div>

          <!-- Password Confirmation -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">{{ $t('confirm_password') }}</label>
            <div class="col-md-7">
              <input v-model="form.password_confirmation" :class="{ 'is-invalid': form.errors.has('password_confirmation') }" class="form-control" type="password" name="password_confirmation">
              <has-error :form="form" field="password_confirmation" />
            </div>
          </div>
          <div class="form-group row">
                 <label class="col-md-3 col-form-label text-md-right">Bidang pekerjaan anda sekarang termasuk Sektor : </label>
               <div class="col-md-7 pt-2">
                <div class="custom-control custom-radio">
                  <input required type="radio" id="pemerintah" v-model="form.jenis" name="jenis" class="custom-control-input" value="pemerintah" >
                  <label class="custom-control-label float-left" for="pemerintah">Pemerintah</label>
              </div>
              <div class="custom-control custom-radio">
                  <input type="radio" id="BUMN" v-model="form.jenis" name="jenis" class="custom-control-input" value="bumn" >
                  <label class="custom-control-label float-left" for="BUMN">BUMN</label>

              </div>
              <div class="custom-control custom-radio">
                  <input type="radio" id="swasta" v-model="form.jenis" name="jenis" class="custom-control-input" value="swasta" >
                  <label class="custom-control-label float-left" for="swasta">Swasta</label>
              </div>
              <div class="custom-control custom-radio">
                  <input type="radio" id="wirausaha" v-model="form.jenis" name="jenis" class="custom-control-input" value="wirausaha" >
                  <label class="custom-control-label float-left" for="wirausaha">Wirausaha</label>
              </div>
              <has-error :form="form" field="jenis" />

              </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">Alamat</label>
            <div class="col-md-7">
              <input v-model="form.alamat" :class="{ 'is-invalid': form.errors.has('alamat') }" class="form-control" type="text" name="alamat">
              <has-error :form="form" field="alamat" />
            </div>
          </div>
           <div class="form-group row">
                    <label class="form-label col-md-3">Provinsi</label>
                    <div class="col-md-7">
                    <select
                      class="form-control custom-select"
                      v-model="form.provinsi"
                      @change="selectProv($event)"
                    >
                      <option selected value="">Provinsi</option>
                      <option
                        v-for="province in provinces"
                        v-bind:key="province.id"
                        :value="province.id"
                      >
                        {{ province.nama }}
                      </option>
                    </select>
              <has-error :form="form" field="provinsi" />

                    </div>
                </div>
                           <div class="form-group row">
                    <label class="form-label col-md-3">Kota/Kabupaten</label>
                    <div class="col-md-7">

                    <select
                      class="form-control custom-select"
                      v-model="form.kota"
                      @change="selectCity($event)"
                    >
                      <option selected value="">Kota/Kabupaten</option>
                      <option
                        v-for="city in cities"
                        v-bind:key="city.id"
                        :value="city.id"
                      >
                        {{ city.nama }}
                      </option>
                    </select>
              <has-error :form="form" field="kota" />

                  </div>
                </div>
                           <div class="form-group row">
                    <label class="form-label col-md-3">Kecamatan</label>
                    <div class="col-md-7">

                    <select
                      class="form-control custom-select"
                      v-model="form.kecamatan"
                      @change="selectDistrict($event)"
                    >
                      <option selected value="">Kecamatan</option>
                      <option
                        v-for="district in districts"
                        v-bind:key="district.id"
                        :value="district.id"
                      >
                        {{ district.nama }}
                      </option>
                    </select>
              <has-error :form="form" field="kecamatan" />

                  </div>
                </div>
                           <div class="form-group row">
                    <label class="form-label col-md-3">Kelurahan</label>
                    <div class="col-md-7">

                    <select
                      class="form-control custom-select"
                      v-model="form.kelurahan"
                    >
                      <option selected value="">Kelurahan</option>
                      <option
                        v-for="village in villages"
                        v-bind:key="village.id"
                        :value="village.id"
                      >
                        {{ village.nama }}
                      </option>
                    </select>
              <has-error :form="form" field="kelurahan" />

                  </div>
                </div>
          <div class="form-group row">
            <div class="col-md-7 offset-md-3 d-flex">
              <!-- Submit Button -->
              <v-button :loading="form.busy">
                {{ $t('register') }}
              </v-button>
        
              <!-- GitHub Register Button -->
            </div>
          </div>
        </form>
      </card>
    </div>
  </div>
</template>
<style scoped>
.row{
  margin-top: 5px;
}
</style>
<script>
import Form from 'vform'
import axios from 'axios'
export default {
  components: {
  },

  middleware: 'guest',
  mounted(){
        this.prov();

  },
  metaInfo () {
    return { title: this.$t('register') }
  },

  data: () => ({
    form: new Form({
      name: '',
      jenis: '',
      alamat:'',
      provinsi:'',
      kota:'',
      kecamatan:'',
      kelurahan:'', 
      email: '',
      no_telp:'',
      role: 'consumer',
      password: '',
      password_confirmation: ''
    }),
    mustVerifyEmail: false,
     provinces: [],
      cities: [],
      districts: [],
      villages: [],
  }),

  methods: {
    async register () {
      // Register the user.
      const { data } = await this.form.post('/api/register/consumer')

        // Log in the user.
        // const { data: { token } } = await this.form.post('/api/login')

        // Save the token.
        // this.$store.dispatch('auth/saveToken', { token })

        // Update the user.
        // await this.$store.dispatch('auth/updateUser', { user: data })

        // Redirect home.
        // this.$router.push({ name: 'home' })
      
    },
     prov() {

      axios
        .get("https://dev.farizdotid.com/api/daerahindonesia/provinsi")
        .then((result) => {
          this.provinces = result.data.provinsi;
        })
        .catch((err) => {
          console.log(err);
        });
    },
    selectProv(event) {
      axios
        .get(
          "https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=" +
            event.target.value
        )
        .then((response) => {
          this.cities = response.data.kota_kabupaten;
          console.log(this.cities);
        })
        .catch((error)=>{
          console.error(error);
        });
    },
    selectCity(event) {
      this.districts = [];
      axios
        .get(
          "https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=" +
            event.target.value
        )
        .then((response) => {
          this.districts = response.data.kecamatan;
          console.log(this.districts);
        })
        .catch((error)=>{
          console.error(error);
        });
    },
    selectDistrict(event) {
      axios
        .get(
          "https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=" +
            event.target.value
        )
        .then((response) => {
          this.villages = response.data.kelurahan;
          console.log(this.villages);
        })
        .catch((error)=>{
          console.error(error);
        });
    },
  }
}
</script>
