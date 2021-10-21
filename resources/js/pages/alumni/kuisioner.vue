<template>
 
      <div class="card-box">
        <h2 class="header-title my-3 card-header">Data Alumni</h2>
        <div class="contain mb-3">
        <form @submit.prevent="submit" @keydown="form.onKeydown($event)">
               <div class="form-group row">
               <label class="col-md-5 col-form-label text-md-right">Apakah bidang pekerjaan anda saat ini sesuai dengan bidang studi yang anda ambil?</label>
               <div class="col-md-7">
                
                    <label class="form-check">
                      <input class="form-check-input" type="radio" checked=""  required id="sesuai" v-model="form.sesuaikah" name="sesuaikah" value="1">
                      <span class="form-check-label">Sesuai</span>
                    </label>
                    <label class="form-check">
                      <input class="form-check-input" type="radio" checked=""  required id="tidaksesuai" v-model="form.sesuaikah" name="sesuaikah" value="0">
                      <span class="form-check-label">Tidak sesuai</span>
                    </label>
              <has-error :form="form" field="sesuaikah" /> 
                </div>
                </div>    
                <hr>
             
            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-right"> Bagaimana cara anda mendapatkan pekerjaan pertama ?</label>
                <div class="col-md-7">
                <select required v-model="form.kerja_pertama" name="kerja_pertama" class="form-control custom-select" id="kerja_pertama" >
                    <option value="" selected> Pilih </option>
                    <option value="kompetisi">Berkompetisi (dengan tes)</option>
                    <option value="rekomendasi">Rekomendasi (tanpa tes)</option>
                    <option value="ditempatkan">Ditempatkan (karena ada ikatan dinas dsb.)</option>
                    <option value="diminta">Diminta oleh pengguna</option>
                    <option value="koneksi">Memanfaatkan koneksi</option>
                    <option value="agen">Melalui agen tenaga kerja</option>
                    <option value="unit">Melalui Unit Pengembangan Karir dan Penempatan Kerja </option>
                    <option value="iklankan diri">Meng-iklankan diri sendiri melalui internet</option>
                    <option value="wirausaha">Berwirausaha</option>
                </select>
                <has-error :form="form" field="kerja_pertama" /> 
                </div>
            </div>
            <hr>
           
           
            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-right"> Berapa gaji anda per bulan untuk pekerjaan anda pertama kali ?</label>
                <div class="col-md-7">
                                      
                <select required class="form-control custom-select" v-model="form.gajipertama" id="gajipertama" >
                  <option value="" selected> Pilih </option>
                  <option value="-1"> Kurang dari 1.000.000,00     </option>
                  <option value="1-2">1.000.000 – &lt; 2.000.000</option>
                  <option value="2-3">2.000.000 – &lt; 3.000.000</option>
                  <option value="3-4">3.000.000 – &lt; 4.000.000</option>
                  <option value="4+">&ge; 4.000.000	          </option>                                   
                </select>
                <has-error :form="form" field="gajipertama" /> 

                </div>
             </div>
            <hr>
            <div class="form-group row">
              <label class="col-md-5 col-form-label text-md-right"> Apa sajakah hambatan anda dalam mendapatkan pekerjaan pertama?</label>
                <div class="col-md-7">
                 
                             
                <label class="form-check">
                  <input type="checkbox" id="ipk" v-model="form.ipk" class="form-check-input" value="ipk">
                  <span class="form-check-label">IPK/Nilai tidak memenuhi syarat</span>
                </label>
                <label class="form-check">
                  <input type="checkbox" id="akreditasi" v-model="form.akreditasi" class="form-check-input" value="akreditasi">
                  <span class="form-check-label">Akreditasi kurang mendukung</span>
                </label>
                <label class="form-check">
                  <input type="checkbox" id="kalah_saing" v-model="form.kalah_saing" class="form-check-input" value="kalah_saing">
                  <span class="form-check-label">Kalah bersaing dengan pencari kerja yang lain</span>
                </label>
                <label class="form-check">
                  <input type="checkbox" id="tidak_sesuai" v-model="form.tidak_sesuai" class="form-check-input" value="tidak_sesuai">
                  <span class="form-check-label">Lowongan kerja jarang atau tidak sesuai dengan bidang keahlian </span>
                </label>
                <label class="form-check">
                  <input type="checkbox" id="tidak_minat" v-model="form.tidak_minat" class="form-check-input" value="tidak_minat">
                  <span class="form-check-label">Lowongan tidak sesuai dengan minat karir</span>
                </label>
                <label class="form-check">
                  <input type="checkbox" id="hambatan_lain" v-model="form.hambatan_lain" class="form-check-input" value="hambatan_lain">
                  <span class="form-check-label"> lainnya 
                    <input type="text" v-model="form.hambatan_input" id="hambatan_input" class="form-control custom-control ml-2 float-left " >
                  </span>
                </label>
                </div>
            </div>
                  <hr>  
            
            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-right"> Berapa kali anda pindah pernah pindah instansi/perusahaan?</label>
                  <div class="col-md-7">
                    
                  <input type="number" class="form-control" name="pindah" v-model="form.pindah" >
                 <has-error :form="form" field="pindah" /> 

                  </div>
            </div>
            <hr>
            <div class=" row form-group ">
                <label class="col-md-5 col-form-label text-md-right"> Apakah alasan anda pindah instansi/perusahaan? </label>
                <div class="col-md-7">

                 <label class="form-check">
                  <input required type="radio" id="suasana" v-model="form.alasan_pindah" name="alasan_pindah" class="form-check-input" value="suasana" >
                  <span class="form-check-label">Suasana kerja</span>
              </label>
               <label class="form-check">
                  <input type="radio" id="gaji" v-model="form.alasan_pindah" name="alasan_pindah" class="form-check-input" value="gaji" >
                  <span class="form-check-label">Besaran gaji</span>

              </label>
               <label class="form-check">
                  <input type="radio" id="karir" v-model="form.alasan_pindah" name="alasan_pindah" class="form-check-input" value="karir" >
                  <span class="form-check-label">Pengembangan karir</span>
              </label>
              
               <label class="form-check">
                  <input type="radio" id="lainnya2" v-model="form.alasan_pindah" name="alasan_pindah" class="form-check-input" value="lainnya2" >
                  <span class="form-check-label">Lainnya</span>
                  <input type="text" v-model="form.input_pindah" :class=" form.alasan_pindah == 'lainnya2' ?  '' : 'd-none'" id="input_pindah" class="form-control ml-2 float-left " >
              </label>
                 <has-error :form="form" field="alasan_pindah" /> 

                </div>
              </div>
              <hr>
              <div class=" row form-group ">
                <label class="col-md-5 col-form-label text-md-right"> Bidang pekerjaan anda sekarang termasuk Sektor : </label>
                <div class="col-md-7">

                <label class="form-check">
                  <input required type="radio" id="pemerintah" v-model="form.bidangkerja" name="bidangkerja" class="form-check-input" value="pemerintah" >
                  <span class="form-check-label">Pemerintah</span>
              </label>
              <label class="form-check">
                  <input type="radio" id="BUMN" v-model="form.bidangkerja" name="bidangkerja" class="form-check-input" value="bumn" >
                  <span class="form-check-label">BUMN</span>

              </label>
              <label class="form-check">
                  <input type="radio" id="swasta" v-model="form.bidangkerja" name="bidangkerja" class="form-check-input" value="swasta" >
                  <span class="form-check-label">Swasta</span>
              </label>
              <label class="form-check">
                  <input type="radio" id="wirausaha" v-model="form.bidangkerja" name="bidangkerja" class="form-check-input" value="wirausaha" >
                  <span class="form-check-label">Wirausaha</span>
              </label>
              <label class="form-check">
                  <input type="radio" id="lainnya" v-model="form.bidangkerja" name="bidangkerja" class="form-check-input" value="lainnya" >
                  <span class="form-check-label">Lainnya</span>
                  <input type="text" v-model="form.inputbidang" :class=" form.bidangkerja == 'lainnya' ?  '' : 'd-none'" id="inputbidang" class="form-control ml-2 float-left " >
              </label>
                 <has-error :form="form" field="bidangkerja" /> 

                </div>
            </div>
            <hr>
              <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-right"> Berapa gaji anda per bulan untuk pekerjaan anda Saat ini ?</label>
                               <div class="col-md-7">
                <select required class="form-control custom-select" v-model="form.gaji_sekarang" id="gaji_sekarang">
                  <option value="" selected> Pilih </option>
                  <option value="-1"> Kurang dari 1.000.000,00     </option>
                  <option value="1-2">1.000.000 – &lt; 2.000.000</option>
                  <option value="2-3">2.000.000 – &lt; 3.000.000</option>
                  <option value="3-4">3.000.000 – &lt; 4.000.000</option>
                  <option value="4+">&ge; 4.000.000	          </option>                                   
                </select>
              <has-error :form="form" field="gaji_sekarang" /> 

             </div>       
              </div> 

             <hr>       
            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-right"> Apakah instansi di tempat anda bekerja mensyaratkan IPK/nilai?</label>
                <div class="col-md-7">

                <label class="form-check">
                    <input type="radio" required id="syaratipk" v-model="form.syaratipk" name="syaratipk" class="form-check-input" value="1">
                    <span class="form-check-label">Sesuai</span>
                </label>
                <label class="form-check">
                    <input type="radio" id="tidak_syaratipk" v-model="form.syaratipk" name="tidak_syaratipk" class="form-check-input" value="0">
                   <span class="form-check-label">Tidak Sesuai</span>
                </label>
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-right">1. Kualitas perguruan tinggi</label>
                <div class="custom-controls-stacked col-md-7 p-2">
                  <span class="mr-2"> Tidak puas</span>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner1" name="kuisioner1" class="form-check-input" value="1" checked="">
                    <span class="custom-control-label">1</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner1" name="kuisioner1" class="form-check-input" value="2">
                    <span class="custom-control-label">2</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner1" name="kuisioner1" class="form-check-input" value="3">
                    <span class="custom-control-label">3</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner1" name="kuisioner1" class="form-check-input" value="4">
                    <span class="custom-control-label">4</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner1" name="kuisioner1" class="form-check-input" value="5">
                    <span class="custom-control-label">5</span>
                  </label>
                  <span class="ml-2"> Puas</span>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-right"> 2. Isi mata kuliah</label>

                <div class="custom-controls-stacked col-md-7">
                  <span class="mr-4"> Tidak puas</span>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner2" name="kuisioner2" class="form-check-input" value="1" checked="">
                    <span class="custom-control-label">1</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner2" name="kuisioner2" class="form-check-input" value="2">
                    <span class="custom-control-label">2</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner2" name="kuisioner2" class="form-check-input" value="3">
                    <span class="custom-control-label">3</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner2" name="kuisioner2" class="form-check-input" value="4">
                    <span class="custom-control-label">4</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner2" name="kuisioner2" class="form-check-input" value="5">
                    <span class="custom-control-label">5</span>
                  </label>
                  <span class="ml-2"> Puas</span>
                </div>
                
            </div>
            <br>
            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-right"> 3. Kompetensi dosen</label>

                <div class="custom-controls-stacked col-md-7">
                  <span class="mr-2"> Tidak puas</span>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner3" name="kuisioner3" class="form-check-input" value="1" checked="">
                    <span class="custom-control-label">1</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner3" name="kuisioner3" class="form-check-input" value="2">
                    <span class="custom-control-label">2</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner3" name="kuisioner3" class="form-check-input" value="3">
                    <span class="custom-control-label">3</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner3" name="kuisioner3" class="form-check-input" value="4">
                    <span class="custom-control-label">4</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner3" name="kuisioner3" class="form-check-input" value="5">
                    <span class="custom-control-label">5</span>
                  </label>
                  <span class="ml-2"> Puas</span>
                </div>
            </div>
            <br>

            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-right"> 4. Pelayanan/bimbingan Dosen terhadap Mahasiswa</label>

                <div class="custom-controls-stacked col-md-7">
                  <span class="mr-2"> Tidak puas</span>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner4" name="kuisioner4" class="form-check-input" value="1" checked="">
                    <span class="custom-control-label">1</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner4" name="kuisioner4" class="form-check-input" value="2">
                    <span class="custom-control-label">2</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner4" name="kuisioner4" class="form-check-input" value="3">
                    <span class="custom-control-label">3</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner4" name="kuisioner4" class="form-check-input" value="4">
                    <span class="custom-control-label">4</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner4" name="kuisioner4" class="form-check-input" value="5">
                    <span class="custom-control-label">5</span>
                  </label>
                  <span class="ml-2"> Puas</span>
                </div>
            </div>
            <br>

            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-right"> 5. Kualitas pembelajaran</label>

                <div class="custom-controls-stacked col-md-7">
                  <span class="mr-2"> Tidak puas</span>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner5" name="kuisioner5" class="form-check-input" value="1" checked="">
                    <span class="custom-control-label">1</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner5" name="kuisioner5" class="form-check-input" value="2">
                    <span class="custom-control-label">2</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner5" name="kuisioner5" class="form-check-input" value="3">
                    <span class="custom-control-label">3</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner5" name="kuisioner5" class="form-check-input" value="4">
                    <span class="custom-control-label">4</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner5" name="kuisioner5" class="form-check-input" value="5">
                    <span class="custom-control-label">5</span>
                  </label>
                  <span class="ml-2"> Puas</span>
                </div>
            </div>
            <br>

            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-right"> 6. Sistem penilaian</label>

                <div class="custom-controls-stacked col-md-7">
                  <span class="mr-2"> Tidak puas</span>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner6" name="kuisioner6" class="form-check-input" value="1" checked="">
                    <span class="custom-control-label">1</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner6" name="kuisioner6" class="form-check-input" value="2">
                    <span class="custom-control-label">2</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner6" name="kuisioner6" class="form-check-input" value="3">
                    <span class="custom-control-label">3</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner6" name="kuisioner6" class="form-check-input" value="4">
                    <span class="custom-control-label">4</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner6" name="kuisioner6" class="form-check-input" value="5">
                    <span class="custom-control-label">5</span>
                  </label>
                  <span class="ml-2"> Puas</span>
                </div>
            </div>
            <br>

            <div class="form-group row">
                <label class="col-md-5 col-form-label text-md-right"> 7. Kualitas sarana dan prasarana akademik</label>

                <div class="custom-controls-stacked col-md-7">
                  <span class="mr-2"> Tidak puas</span>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner7" name="kuisioner7" class="form-check-input" value="1" checked="">
                    <span class="custom-control-label">1</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner7" name="kuisioner7" class="form-check-input" value="2">
                    <span class="custom-control-label">2</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner7" name="kuisioner7" class="form-check-input" value="3">
                    <span class="custom-control-label">3</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner7" name="kuisioner7" class="form-check-input" value="4">
                    <span class="custom-control-label">4</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner7" name="kuisioner7" class="form-check-input" value="5">
                    <span class="custom-control-label">5</span>
                  </label>
                  <span class="ml-2"> Puas</span>
                </div>
            </div>
            <br>

            <div class="form-group row mb-5">
                <label class="col-md-5 col-form-label text-md-right"> 8. Suasana akademik</label>

                <div class="custom-controls-stacked col-md-7">
                  <span class="mr-2"> Tidak puas</span>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner8" name="kuisioner8" class="form-check-input" value="1" checked="">
                    <span class="custom-control-label">1</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner8" name="kuisioner8" class="form-check-input" value="2">
                    <span class="custom-control-label">2</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner8" name="kuisioner8" class="form-check-input" value="3">
                    <span class="custom-control-label">3</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner8" name="kuisioner8" class="form-check-input" value="4">
                    <span class="custom-control-label">4</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline px-2">
                    <input type="radio" v-model="form.kuisioner8" name="kuisioner8" class="form-check-input" value="5">
                    <span class="custom-control-label">5</span>
                  </label>
                  <span class="ml-2"> Puas</span>
                </div>
            </div>
<hr>
            
        <v-button :loading="form.busy" class="float-right">
                Submit
        </v-button>
        </form>
      </div>
      </div>
 
</template>
<style scoped>
hr{
  margin:5 0;
}
td{
  white-space: nowrap !important;
  max-width: fit-content;
  padding: 10px 0px 0px !important;
}
.table{
  float: left !important;
}
.custom-control-label, .custom-controls-stacked col-md-7{
  float: left !important; 
}
/* .container-fluid{
  width: 90%;
  margin-left: auto;
  margin-right: auto;
} */
.contain{
  padding: 5px 5px 15px 5px;
  /* border: 1px grey outset; */
  margin-left: 10px;
  margin-right: 10px;
}
.size{
  width: 0px !important;
}
</style>

<script>
import Form from 'vform'

document.title= 'Kuisioner alumni';
export default {
 
  data(){
    return{
      form: new Form({
    
        kerja_pertama: '',
        gajipertama: '',
        gaji_sekarang: '',
        kuisioner1:'',
      
      }),
      
    }
  },

  computed: {
    
},
 methods: {
    async submit () {
      // Register the user.
      const { data } = await this.form.post('/api/kuisioner/alumni')

        // Save the token.
        this.$store.dispatch('auth/saveToken', { token })

        // Update the user.
        await this.$store.dispatch('auth/updateUser', { user: data })

        // Redirect home.
        this.$router.push({ name: 'consumer.data' })
      
    },
  },
setup(){
 
},
metaInfo () {
    return { title: 'Kuisioner Alumni' }
  }
}
</script>
