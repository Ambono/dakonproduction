<template>
    <div  class="default-container"> 
<div></div>
        <h1>Vente de medicament de fievre typhoide</h1>
     <TyphoidDescription></TyphoidDescription>  
    
    <div class="row">
  <div class="column left" style="background-color:#aaa;">
    <h2>Column 1</h2>
    <p>Some text..</p>
  </div>
  <div class="column right" style="background-color:#bbb;">
    <h2>Comment acheter</h2>
    <p>Par commande</p>

     <p>Par Rendez-vous</p>
  </div>
</div>
        <!-- <h1>This is from homes component</h1>
        {{ count }}
        <button class="button" @click="$store.commit('INCREMENT')">INCREMENT </button> -->
    </div>
</template>
<script>
import {mapState} from 'vuex';
//  import i18n from "@/i18n"
export default { 
    name: 'home',
    components:{
        //HomeContent:() => import('../../pageContent/Content'),
       TyphoidDescription:() => import('../../pageContent/TyphoidDescription'),
    },
    // props:{      
    //   Typhoid: String,
    // },
    // data() {
    //   return {            
    //         TyphoidDescription: TyphoidDescription,            
    //     }
    //   }, 
    //    mounted() {
    //        // console.log(HomeContent)
    //     },
    //   methods: {
   
    //  },
    computed: {
      ...mapState({
         count: state => state.count
      })
    }
}
</script>

<style>  
.column {
  float: left;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

.left {
  width: 25%;
}

.right {
  width: 75%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
} 
</style>

