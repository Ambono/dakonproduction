<template>
<div class="orders">
    <h1>This is from orders component</h1>
    <div class="" v-for="orderitem in info" v-bind:key="orderitem.id">
        <span >{{ orderitem.id }}</span>
        <span >{{ orderitem.titre}}</span>
        <span >{{ orderitem.quantite }}</span>
        <span >{{ orderitem.numeroDeCommande }}</span>
        <span >{{ orderitem.complete }}</span>
    </div> 
    <!-- <div id="app">
     {{ info2 }} 

     <div class="" v-for="upcomingtask in info" v-bind:key="upcomingtask.id">
        <span >{{ upcomingtask.id }}</span>
        <span >{{ upcomingtask.title }}</span>
        <span >{{ upcomingtask.approved }}</span>
        <span >{{ upcomingtask.taskId }}</span>
    </div> 
    </div> -->
</div>

</template>

<script>

export default({
    data() {
      return {        
        order:[],        
        info:[],
        metaInfo:null        
      } 
    },
 mounted() {
            console.log('Right Body Component mounted.')
             axios
      .get('/api/order')
      .then(response => (this.info = response.data.data))
          
     },

    created(){
        //this.fetchTodayTasks();
        //this.fetchUpcoming();
    },
    methods:{
       // fetchTodayTasks(){ },

        // fetchUpcoming(){
        //       axios
        //       .get('/api/upcoming')
        //        .then(response => (this.metaInfo = response.data))
        //        .then(result => this.info = result.data)
        // }
    }
})
</script>

