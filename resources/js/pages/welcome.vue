<template>
  <div>
    <nav class="navbar navbar-expand-md d-md-flex p-0 navbar-light bg-white">
      <div class="container justify-content-end">
        <div class="row align-items-center">
          <div class="col-lg">
            <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
              <li class="nav-item">
                <router-link :to="{ name: 'login' }" class="nav-link"
                  ><i class="fe fe-home"></i> Login</router-link
                >
              </li>
              <li class="nav-item">
                <router-link :to="{ name: 'register' }" class="nav-link"
                  ><i class="fe fe-check-square"></i>Register</router-link
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <main class="main">
      <section
        class="section justify-content-center align-items-center wel d-flex">
        <p class="text-light welcome text-center">GRADUATES APP</p>
      </section>

      <section class="section basic justify-content-center align-items-center d-flex">
        
           <img src="https://i.ibb.co/cgtd9LG/alur.png"  alt="">
         <div class="text-justify alur">
           <div class="judul font-weight-bold ">
             Lorem Ipsum 
           </div>
           <div class="justify-content-center text-alur ">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dolor risus, porta eget libero quis, sollicitudin mattis turpis. Aliquam fermentum velit vitae lectus tincidunt egestas vel vitae magna. Interdum et malesuada fames ac ante ipsum primis in faucibus</div>
         </div>
      </section>

      <section class="section bg-light basic align-items-center d-flex">
         <img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1600352018/apf51qz3ja3vibbu4hqg.png"  alt="">
         <div class="text-justify alur ">
           <div class="judul font-weight-bold ">
             Lorem Ipsum 
           </div>
           <div class=" text-alur">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dolor risus, porta eget libero quis, sollicitudin mattis turpis. Aliquam fermentum velit vitae lectus tincidunt egestas vel vitae magna. Interdum et malesuada fames ac ante ipsum primis in faucibus</div>
         </div>
      </section>
      <section class="section bg-white justify-content-end basic align-items-center d-flex">
         <div class="text-justify alur ">
           <div class="judul font-weight-bold ">
             Lorem Ipsum 
           </div>
           <div class=" text-alur">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dolor risus, porta eget libero quis, sollicitudin mattis turpis. Aliquam fermentum velit vitae lectus tincidunt egestas vel vitae magna. Interdum et malesuada fames ac ante ipsum primis in faucibus</div>
         </div>
         <img src="https://i.ibb.co/s1rQpKn/7061976-removebg-preview.png"  alt="">
      </section>
      <section class="section bg-light basic align-items-center d-flex">
         <img src="https://i.ibb.co/dLtBzGB/high-school-icon-8-removebg-preview.png"  alt="">
         <div class="text-justify alur ">
           <div class="judul font-weight-bold ">
             Lorem Ipsum 
           </div>
           <div class=" text-alur">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dolor risus, porta eget libero quis, sollicitudin mattis turpis. Aliquam fermentum velit vitae lectus tincidunt egestas vel vitae magna. Interdum et malesuada fames ac ante ipsum primis in faucibus</div>
         </div>
      </section>
       
    </main>

    <footer class="footer">
      <div class="container">
        <div class="row text-center text-lg-left">
          
            <p>
              © 2021  <a href="https://github.com/yudifr"> Yudi Fathurrahman</a>
            </p>  
        
          
        </div>
      </div>
    </footer>
  </div>
</template>
<style scoped>
.text-alur{
   text-align: justify;
  text-justify: inter-word;
}
.alur{
  padding-right: 100px;
  max-width: 500px;
}
.judul{
  font-size: 20px;
}
img{

  min-height: 160px;
  max-height: 160px;
}
.welcome{
  font-size: 5rem;
}
.navbar{
 
    -webkit-box-shadow: none;
    box-shadow: none;
}
.wel{
  /* background-color: #80c3ff; */
  background: url("https://cdn.pixabay.com/photo/2013/07/13/12/08/background-159244_1280.png") no-repeat;
  background-size: cover;
 max-height: 600px;
  min-height: 600px;
  -webkit-box-shadow: none;
    box-shadow: none;
}
.basic{
   max-height: 250px;
  min-height: 250px;
}
</style>
<script>
// import { mapGetters } from "vuex";

export default {
  layout: "basic",

  metaInfo() {
    return { title: 'welcome'};
  },

  // data: () => ({
  //   title: window.config.appName,
  // }),

  
};
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
