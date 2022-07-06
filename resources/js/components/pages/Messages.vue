<template>
 <div class="messages">
    <h1>This is Messages component</h1>
  <h2>{{title}}</h2>
 </div>
</template>
<script>
 export default{
  name:'messages',
  data (){
   return{
    title:'test message'
   }
  }
 }
</script>

<style scoped>
 
</style>