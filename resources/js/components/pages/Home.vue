<template>
    <div  class="default-container"> 
        <h1>Vente de medicament de fievre typhoide</h1>
    <div><h1>Qu'est ce que la fievre typhoide</h1>
    {{homeContent.Home.Thyphoid}}
    </div>
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
import {HomeContent} from '../../lang/Content'
export default {
    name: 'home',
    data() {
            return {
            homeContent: HomeContent.split("\n\n")
            }
          },   
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
