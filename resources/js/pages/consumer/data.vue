
<template>
    
        <div class="card-box">
          <h4 class="header-title my-3">Data karyawan</h4>
          <div class="contain mb-3">
           
            <table class="table table-vcenter card-table">
                      <thead class="bg-secondary">
                        <tr >
                          <th class="" >Name</th>
                          <th class="">Bergabung pada</th>
                          <th class="w-1 text-light"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar me-2" style="background-image: url(./static/avatars/006m.jpg)"></span>
                              <div class="flex-fill">
                                
                              </div>
                            </div>
                          </td>
                          <td>
                            2020
                          </td>
                        </tr>
                         <tr>
                          <td>
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar me-2" style="background-image: url(./static/avatars/006m.jpg)"></span>
                              <div class="flex-fill">
                                
                              </div>
                            </div>
                          </td>
                          <td>
                            2020
                          </td>
                        </tr>
                        

              <tr v-for="(alumni,index) in alumnies" :key="index">
                <td>
                <router-link :to="{ name: 'consumer.EmployeeProfile', params: { id: alumni.id_pelajar  }}">    {{alumni.id_pelajar}} </router-link>
                  </td>
                <td>{{alumni.id_pelajar}}</td>
              </tr>
                      </tbody>
                    </table>
          </div>
         </div>
        
</template>
<style scoped>

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
export default {
    setup(){
    
  },
}
</script>