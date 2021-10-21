<template>

    
        <div class="card-box">
          <h4 class="header-title my-3">Data Alumni Consumer</h4>
          <div class="contain mb-3">
            <form id="forma">
              <div class="form-group">
                <label class="col-sm-12  col-form-label" for="simpleinput">Bidang yang kurang dikuasai alumni kami adalah</label>
                <div class="custom-control checkbox">
                    <input type="checkbox" id="komunikasi" v-model="consumer.komunikasi" class="custom-control-input" value="komunikasi" @click="showit('dialumniya','dialumnitidak')">

                    <label class="" for="komunikasi">Komunikasi dan presentasi terutama penggunaan Bahasa Inggris</label>
                </div>
                <div class="custom-control checkbox">
                    <input type="checkbox" id="it" v-model="consumer.it" class="custom-control-input" value="it" >
                    <label class="" for="it"> Komputer atau pemanfaatan IT secara umum</label>
                </div>
                <div class="custom-control checkbox">
                    <input type="checkbox" id="numerik" v-model="consumer.numerik" class="custom-control-input" value="numerik" >
                    <label class="" for="numerik">Numerik</label>
                </div>
                <div class="custom-control checkbox">
                    <input type="checkbox" id="memimpin" v-model="consumer.memimpin" class="custom-control-input" value="memimpin" >
                    <label class="" for="memimpin">Memimpin (leadership)</label>
                </div>
                <div class="custom-control checkbox">
                    <input type="checkbox" id="polakerja" v-model="consumer.polakerja" class="custom-control-input" value="polakerja" >
                    <label class="" for="polakerja">Mengembangkan pola kerja</label>
                </div>
                <div class="custom-control checkbox">
                    <input type="checkbox" id="kerjasama" v-model="consumer.kerjasama" class="custom-control-input" value="kerjasama" >
                    <label class="" for="kerjasama">Bekerjasama dalam tim</label>
                </div>
                <div class="custom-control checkbox">
                    <input type="checkbox" id="lainnyakurang" v-model="consumer.lainnyakurang" class="custom-control-input" value="1" @click="showit('dilainkurang')">
                    <label id="lainnya2" class="" for="lainnyakurang" >Lainnya</label>
                    <div class="d-none" id="dilainkurang">
                        <input type="text" v-model="consumer.isilainkurang" id="isilainkurang" class="ml-2 col-sm-4" >
                    </div>
                </div>
            </div>
            <div class="form-group">
                                    <label class="col-sm-12  col-form-label" for="perbaikan">Tuliskan saran-saran umum Bapak/Ibu demi perbaikan program studi kami yang berkaitan dengan peningkatan kualitas lulusannya.</label>
                                    <textarea class="form-control" required = "" v-model="consumer.perbaikan" rows="5" id="perbaikan"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12  col-form-label" for="perbaikan">Berikan saran secara umum bagi peningkatan kualitas lulusan Program Studi  supaya lebih dekat dengan kebutuhan/tuntutan dunia kerja.</label>
                                    <label class="ml-2 col-sm-12  col-form-label" for="perbaikan">a. Fasilitas/Laboratorium:</label>
                                    <textarea class="form-control" required = "" v-model="consumer.fasilitas" rows="5" ></textarea>
                                    <label class="ml-2 col-sm-12  col-form-label" for="perbaikan">b. Kualitas Dosen:</label>
                                    <textarea class="form-control" required = "" v-model="consumer.dosen" rows="5" ></textarea>
                                    <label class="ml-2 col-sm-12  col-form-label" for="perbaikan">c. Kurikulum :</label>
                                    <textarea class="form-control" required = "" v-model="consumer.kurikulum" rows="5" ></textarea>
                                    <label class="ml-2 col-sm-12  col-form-label" for="perbaikan">d. Kualitas Layanan Administrasi:</label>
                                    <textarea class="form-control" required = "" v-model="consumer.administrasi" rows="5"></textarea>
                                </div>
            </form>
          </div>
        </div>
     				
<!-- Kedisplinan	
Kejujuran	
Motivasi kerja	
Etos kerja -->
  
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

document.title= 'Kuisioner Pengguna alumni';
export default {
  data(){
    return{
      consumer :{
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