<template>
  <div class="row">
    <div class="col-lg-8 m-auto">
      <card :title="'Register Alumni'">
        <form @submit.prevent="register" @keydown="form.onKeydown($event)">
          <!-- Name -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">Nama</label>
            <div class="col-md-8">
              <input
                v-model="form.name"
                :class="{ 'is-invalid': form.errors.has('name') }"
                class="form-control"
                type="text"
                name="name"
              />
              <has-error :form="form" field="name" />
            </div>
          </div>
            <hr>

          <!-- Email -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">Email</label>
            <div class="col-md-8">
              <input
                v-model="form.email"
                :class="{ 'is-invalid': form.errors.has('email') }"
                class="form-control"
                type="email"
                name="email"
              />
              <has-error :form="form" field="email" />
            </div>
          </div>
            <hr>

          <!-- Password -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right"
              >Password</label
            >
            <div class="col-md-8">
              <input
                v-model="form.password"
                :class="{ 'is-invalid': form.errors.has('password') }"
                class="form-control"
                type="password"
                name="password"
              />
              <has-error :form="form" field="password" />
            </div>
          </div>
            <hr>

          <!-- Password Confirmation -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right"
              >Konfirmasi Password</label
            >
            <div class="col-md-8">
              <input
                v-model="form.password_confirmation"
                :class="{
                  'is-invalid': form.errors.has('password_confirmation'),
                }"
                class="form-control"
                type="password"
                name="password_confirmation"
              />
              <has-error :form="form" field="password_confirmation" />
            </div>
          </div>
            <hr>
          <!-- alamat -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">Alamat</label>
            <div class="col-md-8">
              <input
                v-model="form.name"
                :class="{ 'is-invalid': form.errors.has('name') }"
                class="form-control"
                type="text"
                name="name"
              />
              <has-error :form="form" field="name" />
            </div>
          </div>
            <hr>
            <!-- nama Ayah -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right"
              >Nama Ayah</label
            >
            <div class="col-md-8">
              <input
                v-model="form.nama_ayah"
                :class="{ 'is-invalid': form.errors.has('nama_ayah') }"
                class="form-control"
                type="text"
                name="nama_ayah"
              />
              <has-error :form="form" field="nama_ayah" />
            </div>
          </div>
            <hr>
            <!-- nama ibu  -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right"
              >Nama Ibu</label
            >
            <div class="col-md-8">
              <input
                v-model="form.nama_ibu"
                :class="{ 'is-invalid': form.errors.has('nama_ibu') }"
                class="form-control"
                type="text"
                name="nama_ibu"
              />
              <has-error :form="form" field="nama_ibu" />
            </div>
          </div>
            <hr>

          <!-- pendidikan terakhir -->
          <div class="form-group row">
            <label class="col-md-3 col-form-label text-md-right">Tingkat pendidikan terakhir</label>
            <div class="col-md-8">
              <select class="form-control custom-select" v-model="form.tingkat">
                <option selected value="">Pilih</option>
                <option selected value="SD">SD</option>
                <option selected value="SMP">SMP</option>
                <option selected value="SMA">SMA</option>
                <option selected value="S1">S1</option>
                <option selected value="S2">S2</option>
                <option selected value="S3">S3</option>
              </select>
            </div>
          </div>
            <hr>

          <div class="pendidikan my-2" :class="this.form.tingkat == '' ? 'd-none' : ''" >
            <div class="form-group row">
              <label class="col-md-3 col-form-label text-md-right"
                >Nama SD / Setingkat</label
              >
              <div class="col-md-6">
                <input
                  type="text"
                  v-model="form.institusi"
                  list="sekolah"
                  class="form-control"
                />
                <datalist id="sekolah">
                  <option v-for="(institusi, index) in sekolah" :key="index">
                    {{ institusi.nama }}
                  </option>
                </datalist>
              </div>
              <label class="col-md-1 col-form-label text-md-right"
                >Tahun Lulus</label
              >
              <div class="col-md-1">
                <input
                  type="text"
                  v-model="form.institusi"
                  list="sekolah"
                  class="form-control"
                />
              </div>
            </div>
            <hr>

            <div class="just-sd" :class=" this.form.tingkat == 'SD' ? 'd-none' : ''">
              <div class="form-group row">
                <label class="col-md-3 col-form-label text-md-right"
                  >Nama SMP / Setingkat</label
                >
                <div class="col-md-6">
                  <input
                    type="text"
                    v-model="form.institusi"
                    list="sekolah"
                    class="form-control"
                  />
                  
                </div>
                <label class="col-md-1 col-form-label text-md-right"
                  >Tahun Lulus</label
                >
                <div class="col-md-1">
                  <input
                    type="text"
                    v-model="form.institusi"
                    list="sekolah"
                    class="form-control"
                  />
                </div>
              </div>
            <hr>

              <div class="just-smp" :class=" this.form.tingkat == 'SMP' ? 'd-none' : ''">
                <div class="form-group row">
                  <label class="col-md-3 col-form-label text-md-right"
                    >Nama SMA / Setingkat</label
                  >
                    <div class="col-md-6">
                      <input
                        type="text"
                        v-model="form.institusi"
                        list="sekolah"
                        class="form-control"
                      />
                      
                    </div>
                  <label class="col-md-1 col-form-label text-md-right"
                    >Tahun Lulus</label
                  >
                  <div class="col-md-1">
                    <input
                      type="text"
                      v-model="form.institusi"
                      list="sekolah"
                      class="form-control"
                    />
                  </div>
                </div>
            <hr>

                <div class="just-sma" :class=" this.form.tingkat == 'SMA' ? 'd-none' : ''">
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-md-right"
                      >Nama perguruan tinggi</label
                    >
                    <div class="col-md-6">
                      <input
                        type="text"
                        v-model="form.institusi"
                        list="sekolah"
                        class="form-control"
                      />
                     
                    </div>
                    <label class="col-md-1 col-form-label text-md-right"
                      >Tahun Lulus</label
                    >
                    <div class="col-md-1">
                      <input
                        type="text"
                        v-model="form.institusi"
                        list="sekolah"
                        class="form-control"
                      />
                    </div>
                  </div>
                    <hr>
                  <div class="just-s1" :class=" this.form.tingkat == 'S1' ? 'd-none' : ''">
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-md-right"
                      >Nama perguruan tinggi</label
                    >
                    <div class="col-md-6">
                      <input
                        type="text"
                        v-model="form.institusi"
                        list="sekolah"
                        class="form-control"
                      />
                      
                    </div>
                    <label class="col-md-1 col-form-label text-md-right"
                      >Tahun Lulus</label
                    >
                    <div class="col-md-1">
                      <input
                        type="text"
                        v-model="form.institusi"
                        list="sekolah"
                        class="form-control"
                      />
                    </div>
                  </div>
                    <hr>
                    <div class="just-s2" :class=" this.form.tingkat == 'S2' ? 'd-none' : ''">
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label text-md-right"
                      >Nama perguruan tinggi</label
                    >
                    <div class="col-md-6">
                      <input
                        type="text"
                        v-model="form.institusi"
                        list="sekolah"
                        class="form-control"
                      />
                     
                    </div>
                    <label class="col-md-1 col-form-label text-md-right"
                      >Tahun Lulus</label
                    >
                    <div class="col-md-1">
                      <input
                        type="text"
                        v-model="form.institusi"
                        list="sekolah"
                        class="form-control"
                      />
                    </div>
                  </div>
                    <hr>

                </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="kerja"
            v-for="(experience, index) in form.kerja"
            :key="index"
          >
            <div class="form-group row">
              <label class="col-md-3 col-form-label text-md-right"
                >Nama perusahaan</label
              >
              <div class="col-md-8">
                <input
                  v-model="experience.nama_perusahaan"
                  :name="`form.kerja[${index}][nama_perusahaan]`"
                  type="text"
                  class="form-control"
                />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label text-md-right">Tahun</label>
              <div class="col-md-8">

              <input
                v-model="experience.tahun"
                :name="`form.kerja[${index}][tahun]`"
                type="text"
                class="form-control"
              />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label text-md-right"
                >status</label
              >
              <div class="col-md-8">
              
              <select
                class="form-control custom-select"
                v-model="experience.status"
                :name="`form.kerja[${index}][status]`"
              >
                <option selected value="">Pilih</option>
                <option selected value="">Pilih</option>
                <option selected value="">Pilih</option>
              </select>
              </div>
            </div>
            
            <hr>
          </div>
          <div class="form-group row">
              <label class="col-md-3 col-form-label text-md-right"></label>
              <div class="col-md-8">

                <div href="" class="add-more col-md-8 text-muted" @click="add">*tambah riwayat kerja </div>
              
              </div>
            </div>
          
          <div class="form-group row">
            <div class="col-md-8 offset-md-3 d-flex">
              <!-- Submit Button -->
              <v-button :loading="form.busy">
                {{ $t("register") }}
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
.add-more{
  cursor:pointer;
  /* font-size: 12px; */
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
hr{
  margin:10px 0;
}
.row {
  margin-top: 5px;
}
</style>
<script>
import Form from "vform";
import axios from "axios";

// import { mapGetters } from 'vuex'

export default {
  components: {},

  middleware: "guest",
  created() {
    this.prov();
    this.fetchInstitution();
  },
  metaInfo() {
    return { title: "register alumni" };
  },

  data: () => ({
    form: new Form({
      name: "",
      jenis: "",
      alamat: "",
      tingkat:'',
      provinsi: "",
      kota: "",
      kecamatan: "",
      nama_institusi: "",
      kelurahan: "",
      email: "",
      no_telp: "",
      kerja: [
        {
          nama_perusahaan: "asd",
          tahun: "2020",
          status: "",
        },
        
      ],
      role: "alumni",
      password: "",
      password_confirmation: "",
    }),
    sekolah: null,
    mustVerifyEmail: false,
    provinces: [],
    cities: [],
    districts: [],
    villages: [],
  }),

  methods: {
      add () {
      this.form.kerja.push({
        nama_perusahaan: '',
        tahun: '',
        status:'',
      })
      console.log(this.inputs)
    },
    async register() {
      // Register the user.
      const { data } = await this.form.post("/api/register/consumer");

      // Log in the user.
      const {
        data: { token },
      } = await this.form.post("/api/login");

      // Save the token.
      this.$store.dispatch("auth/saveToken", { token });

      // Update the user.
      await this.$store.dispatch("auth/updateUser", { user: data });

      // Redirect home.
      this.$router.push({ name: "consumer.data" });
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
        .catch((error) => {
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
        .catch((error) => {
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
        .catch((error) => {
          console.error(error);
        });
    },
    async fetchInstitution() {
      const institusi = await this.$store.dispatch(
        "institution/fetchInstitution"
      );
      this.sekolah = institusi.data.data;
    },
  },
};
</script>
