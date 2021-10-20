<template>
 
      <div class="card-box">
        <h4 class="header-title my-3">Data Alumni</h4>
        <div class="contain mb-3">
        <form id="forma">
          
            
            

              <div class="form-group col-md-12 px-5" id="asd">
                <label class="form-label">Apakah bidang pekerjaan anda saat ini sesuai dengan bidang studi yang anda ambil?</label>
                <div class="custom-control custom-radio">
                    <input type="radio" required id="sesuai" v-model="alumni.sesuaikah" name="sesuaikah" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="sesuai">Sesuai</label>
                </div>
                <div class="custom-control custom-radio ">
                    <input type="radio" id="tidaksesuai" v-model="alumni.sesuaikah" name="sesuaikah" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="tidaksesuai">Tidak Sesuai</label>
                </div>
              </div>    
             
            <div class="form-group col-md-12 px-5">
                <label class="form-label" for="simpleinput">Bagaimana cara anda mendapatkan pekerjaan pertama ?</label>
                <select required v-model="alumni.kerja_pertama" class="form-control custom-select" id="kerja_pertama">
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
            </div>
           
           
            <div class="form-group col-md-12 px-5">
                <label class="form-label" for="simpleinput">Berapa gaji anda per bulan untuk pekerjaan anda pertama kali ?</label>
                                      
                <select required class="form-control custom-select" v-model="alumni.gajipertama" id="gajipertama">
                  <option value="" selected> Pilih </option>
                  <option value="-1"> Kurang dari 1.000.000,00     </option>
                  <option value="1-2">1.000.000 – &lt; 2.000.000</option>
                  <option value="2-3">2.000.000 – &lt; 3.000.000</option>
                  <option value="3-4">3.000.000 – &lt; 4.000.000</option>
                  <option value="4+">&ge; 4.000.000	          </option>                                   
                </select>
             </div>
            
            <div class="form-group col-md-12 px-5">
              <label class="form-label" for="simpleinput">Apa sajakah hambatan anda dalam mendapatkan pekerjaan pertama?</label>
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" id="ipk" v-model="alumni.ipk" class="custom-control-input" value="ipk">
                  <span class="custom-control-label">IPK/Nilai tidak memenuhi syarat</span>
                </label>
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" id="akreditasi" v-model="alumni.akreditasi" class="custom-control-input" value="akreditasi">
                  <span class="custom-control-label">Akreditasi kurang mendukung</span>
                </label>
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" id="kalah_saing" v-model="alumni.kalah_saing" class="custom-control-input" value="kalah_saing">
                  <span class="custom-control-label">Kalah bersaing dengan pencari kerja yang lain</span>
                </label>
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" id="tidak_sesuai" v-model="alumni.tidak_sesuai" class="custom-control-input" value="tidak_sesuai">
                  <span class="custom-control-label">Lowongan kerja jarang atau tidak sesuai dengan bidang keahlian </span>
                </label>
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" id="tidak_minat" v-model="alumni.tidak_minat" class="custom-control-input" value="tidak_minat">
                  <span class="custom-control-label">Lowongan tidak sesuai dengan minat karir</span>
                </label>
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" id="hambatan_lain" v-model="alumni.hambatan_lain" class="custom-control-input" value="hambatan_lain">
                  <span class="custom-control-label">
                    <input type="text" v-model="alumni.hambatan_input" id="hambatan_input" class="form-control custom-control ml-2 float-left " >
                  </span>
                </label>
            </div>
            <br>
            <div class="form-group col-md-12 px-5">
                <label class="form-label">Berapa kali anda pindah pernah pindah instansi/perusahaan?</label>
                  <input type="number" class="form-control" name="asd" v-model="alumni.pindah">

            </div>
            <div class=" col-md-12 px-5 form-group ">
                <label class="form-label">Apakah alasan anda pindah instansi/perusahaan? </label>
                <div class="custom-control custom-radio">
                  <input required type="radio" id="suasana" v-model="alumni.alasan_pindah" name="alasan_pindah" class="custom-control-input" value="suasana" >
                  <label class="custom-control-label float-left" for="suasana">Suasana kerja</label>
              </div>
              <div class="custom-control custom-radio">
                  <input type="radio" id="gaji" v-model="alumni.alasan_pindah" name="alasan_pindah" class="custom-control-input" value="gaji" >
                  <label class="custom-control-label float-left" for="gaji">Besaran gaji</label>

              </div>
              <div class="custom-control custom-radio">
                  <input type="radio" id="karir" v-model="alumni.alasan_pindah" name="alasan_pindah" class="custom-control-input" value="karir" >
                  <label class="custom-control-label float-left" for="karir">Pengembangan karir</label>
              </div>
              
              <div class="custom-control custom-radio">
                  <input type="radio" id="lainnya2" v-model="alumni.alasan_pindah" name="alasan_pindah" class="custom-control-input" value="lainnya2" >
                  <label id="lainnya2" class="custom-control-label float-left" for="lainnya2" >Lainnya</label>
                  <input type="text" v-model="alumni.input_pindah" :class=" alumni.alasan_pindah == 'lainnya2' ?  '' : 'd-none'" id="input_pindah" class="form-control ml-2 float-left " >
              </div>
              </div>
              <div class=" col-md-12 px-5 form-group ">
                <label class="form-label">Bidang pekerjaan anda sekarang termasuk Sektor : </label>
                <div class="custom-control custom-radio">
                  <input required type="radio" id="pemerintah" v-model="alumni.bidangkerja" name="bidangkerja" class="custom-control-input" value="pemerintah" >
                  <label class="custom-control-label float-left" for="pemerintah">Pemerintah</label>
              </div>
              <div class="custom-control custom-radio">
                  <input type="radio" id="BUMN" v-model="alumni.bidangkerja" name="bidangkerja" class="custom-control-input" value="bumn" >
                  <label class="custom-control-label float-left" for="BUMN">BUMN</label>

              </div>
              <div class="custom-control custom-radio">
                  <input type="radio" id="swasta" v-model="alumni.bidangkerja" name="bidangkerja" class="custom-control-input" value="swasta" >
                  <label class="custom-control-label float-left" for="swasta">Swasta</label>
              </div>
              <div class="custom-control custom-radio">
                  <input type="radio" id="wirausaha" v-model="alumni.bidangkerja" name="bidangkerja" class="custom-control-input" value="wirausaha" >
                  <label class="custom-control-label float-left" for="wirausaha">Wirausaha</label>
              </div>
              <div class="custom-control custom-radio">
                  <input type="radio" id="lainnya" v-model="alumni.bidangkerja" name="bidangkerja" class="custom-control-input" value="lainnya" >
                  <label id="lainnya" class="custom-control-label float-left" for="lainnya" >Lainnya</label>
                  <input type="text" v-model="alumni.inputbidang" :class=" alumni.bidangkerja == 'lainnya' ?  '' : 'd-none'" id="inputbidang" class="form-control ml-2 float-left " >
              </div>
            </div>
              <div class="form-group col-md-12 px-5">
                <label class="form-label" for="simpleinput">Berapa gaji anda per bulan untuk pekerjaan anda Saat ini ?</label>
                                      
                <select required class="form-control custom-select" v-model="alumni.gaji_sekarang" id="gaji_sekarang">
                  <option value="" selected> Pilih </option>
                  <option value="-1"> Kurang dari 1.000.000,00     </option>
                  <option value="1-2">1.000.000 – &lt; 2.000.000</option>
                  <option value="2-3">2.000.000 – &lt; 3.000.000</option>
                  <option value="3-4">3.000.000 – &lt; 4.000.000</option>
                  <option value="4+">&ge; 4.000.000	          </option>                                   
                </select>
              </div> 

            <div class="form-group col-md-12 px-5">
                <label class="form-label">Apakah instansi di tempat anda bekerja mensyaratkan IPK/nilai?</label>
                <div class="custom-control custom-radio">
                    <input type="radio" required id="syaratipk" v-model="alumni.syaratipk" name="syaratipk" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="syaratipk">Sesuai</label>
                </div>
                <div class="custom-control custom-radio ">
                    <input type="radio" id="tidak_syaratipk" v-model="alumni.syaratipk" name="tidak_syaratipk" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="tidak_syaratipk">Tidak Sesuai</label>
                </div>
            </div>    
                            
            <div class="form-group col-md-12 px-5">
                <label class="form-label">Apakah instansi di tempat anda bekerja mensyaratkan IPK/nilai?</label>
                <div class="custom-control custom-radio">
                    <input type="radio" required id="syaratipk" v-model="alumni.syaratipk" name="syaratipk" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="syaratipk">Sesuai</label>
                </div>
                <div class="custom-control custom-radio ">
                    <input type="radio" id="tidak_syaratipk" v-model="alumni.syaratipk" name="tidak_syaratipk" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="tidak_syaratipk">Tidak Sesuai</label>
                </div>
            </div>
            <div class="form-group  px-5">
                <label class="form-label">Kualitas perguruan tinggi</label>

                <div class="custom-controls-stacked">
                  <label class="form-check-label mr-2">Tidak Puas</label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner1" name="kuisioner1" class="custom-control-input" value="1" checked="">
                    <span class="custom-control-label">1</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner1" name="kuisioner1" class="custom-control-input" value="2">
                    <span class="custom-control-label">2</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner1" name="kuisioner1" class="custom-control-input" value="3">
                    <span class="custom-control-label">3</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner1" name="kuisioner1" class="custom-control-input" value="4">
                    <span class="custom-control-label">4</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner1" name="kuisioner1" class="custom-control-input" value="5">
                    <span class="custom-control-label">5</span>
                  </label>
                  <label class="form-check-label"> Puas</label>
                </div>
            </div>
            <br>
            <div class="form-group  px-5">
                <label class="form-label">Isi mata kuliah</label>

                <div class="custom-controls-stacked">
                  <label class="form-check-label mr-2">Tidak Puas</label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner2" name="kuisioner2" class="custom-control-input" value="1" checked="">
                    <span class="custom-control-label">1</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner2" name="kuisioner2" class="custom-control-input" value="2">
                    <span class="custom-control-label">2</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner2" name="kuisioner2" class="custom-control-input" value="3">
                    <span class="custom-control-label">3</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner2" name="kuisioner2" class="custom-control-input" value="4">
                    <span class="custom-control-label">4</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner2" name="kuisioner2" class="custom-control-input" value="5">
                    <span class="custom-control-label">5</span>
                  </label>
                  <label class="form-check-label"> Puas</label>
                </div>
                
            </div>
            <br>
            <div class="form-group  px-5">
                <label class="form-label">3. Kompetensi dosen</label>

                <div class="custom-controls-stacked">
                  <label class="form-check-label mr-2">Tidak Puas</label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner3" name="kuisioner3" class="custom-control-input" value="1" checked="">
                    <span class="custom-control-label">1</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner3" name="kuisioner3" class="custom-control-input" value="2">
                    <span class="custom-control-label">2</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner3" name="kuisioner3" class="custom-control-input" value="3">
                    <span class="custom-control-label">3</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner3" name="kuisioner3" class="custom-control-input" value="4">
                    <span class="custom-control-label">4</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner3" name="kuisioner3" class="custom-control-input" value="5">
                    <span class="custom-control-label">5</span>
                  </label>
                  <label class="form-check-label"> Puas</label>
                </div>
            </div>
            <br>

            <div class="form-group  px-5">
                <label class="form-label">4. Pelayanan/bimbingan Dosen terhadap Mahasiswa</label>

                <div class="custom-controls-stacked">
                  <label class="form-check-label mr-2">Tidak Puas</label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner4" name="kuisioner4" class="custom-control-input" value="1" checked="">
                    <span class="custom-control-label">1</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner4" name="kuisioner4" class="custom-control-input" value="2">
                    <span class="custom-control-label">2</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner4" name="kuisioner4" class="custom-control-input" value="3">
                    <span class="custom-control-label">3</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner4" name="kuisioner4" class="custom-control-input" value="4">
                    <span class="custom-control-label">4</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner4" name="kuisioner4" class="custom-control-input" value="5">
                    <span class="custom-control-label">5</span>
                  </label>
                  <label class="form-check-label"> Puas</label>
                </div>
            </div>
            <br>

            <div class="form-group  px-5">
                <label class="form-label">5. Kualitas pembelajaran</label>

                <div class="custom-controls-stacked">
                  <label class="form-check-label mr-2">Tidak Puas</label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner5" name="kuisioner5" class="custom-control-input" value="1" checked="">
                    <span class="custom-control-label">1</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner5" name="kuisioner5" class="custom-control-input" value="2">
                    <span class="custom-control-label">2</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner5" name="kuisioner5" class="custom-control-input" value="3">
                    <span class="custom-control-label">3</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner5" name="kuisioner5" class="custom-control-input" value="4">
                    <span class="custom-control-label">4</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner5" name="kuisioner5" class="custom-control-input" value="5">
                    <span class="custom-control-label">5</span>
                  </label>
                  <label class="form-check-label"> Puas</label>
                </div>
            </div>
            <br>

            <div class="form-group  px-5">
                <label class="form-label">6. Sistem penilaian</label>

                <div class="custom-controls-stacked">
                  <label class="form-check-label mr-2">Tidak Puas</label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner6" name="kuisioner6" class="custom-control-input" value="1" checked="">
                    <span class="custom-control-label">1</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner6" name="kuisioner6" class="custom-control-input" value="2">
                    <span class="custom-control-label">2</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner6" name="kuisioner6" class="custom-control-input" value="3">
                    <span class="custom-control-label">3</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner6" name="kuisioner6" class="custom-control-input" value="4">
                    <span class="custom-control-label">4</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner6" name="kuisioner6" class="custom-control-input" value="5">
                    <span class="custom-control-label">5</span>
                  </label>
                  <label class="form-check-label"> Puas</label>
                </div>
            </div>
            <br>

            <div class="form-group  px-5">
                <label class="form-label">7. Kualitas sarana dan prasarana akademik</label>

                <div class="custom-controls-stacked">
                  <label class="form-check-label mr-2">Tidak Puas</label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner7" name="kuisioner7" class="custom-control-input" value="1" checked="">
                    <span class="custom-control-label">1</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner7" name="kuisioner7" class="custom-control-input" value="2">
                    <span class="custom-control-label">2</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner7" name="kuisioner7" class="custom-control-input" value="3">
                    <span class="custom-control-label">3</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner7" name="kuisioner7" class="custom-control-input" value="4">
                    <span class="custom-control-label">4</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner7" name="kuisioner7" class="custom-control-input" value="5">
                    <span class="custom-control-label">5</span>
                  </label>
                  <label class="form-check-label"> Puas</label>
                </div>
            </div>
            <br>

            <div class="form-group  px-5 mb-5">
                <label class="form-label">8. Suasana akademik</label>

                <div class="custom-controls-stacked">
                  <label class="form-check-label mr-2">Tidak Puas</label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner8" name="kuisioner8" class="custom-control-input" value="1" checked="">
                    <span class="custom-control-label">1</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner8" name="kuisioner8" class="custom-control-input" value="2">
                    <span class="custom-control-label">2</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner8" name="kuisioner8" class="custom-control-input" value="3">
                    <span class="custom-control-label">3</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner8" name="kuisioner8" class="custom-control-input" value="4">
                    <span class="custom-control-label">4</span>
                  </label>
                  <label class="custom-control custom-radio custom-control-inline">
                    <input type="radio" v-model="alumni.kuisioner8" name="kuisioner8" class="custom-control-input" value="5">
                    <span class="custom-control-label">5</span>
                  </label>
                  <label class="form-check-label"> Puas</label>
                </div>
            </div>

            
        </form>
        </div>
      </div>
    
 
</template>
<style scoped>
td{
  white-space: nowrap !important;
  max-width: fit-content;
  padding: 10px 0px 0px !important;
}
.table{
  float: left !important;
}
.custom-control-label, .custom-controls-stacked{
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

document.title= 'Kuisioner alumni';
export default {
  data(){
    return{
      alumni :{
        kerja_pertama: '',
        gajipertama: '',
        gajisekarang: '',
        kuisioner1:'',
      }
    }
  },
  methods:{
       
  },
  computed: {
    
},
setup(){
 
}
}
</script>
