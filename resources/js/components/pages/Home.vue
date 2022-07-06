<!--<template>
<div class="defaultcontainer">
    <h1>This is from homes component</h1>
   
    
</div>

</template>

<script>

export default{
   name:'home'
}
</script>

-->


<template lang="">
    <div  class="defaultcontainer">
        {{ count }}
        <h1>Home</h1>
        <h1>This is from homes component</h1>
        <button class="button" @click="$store.commit('INCREMENT')">INCREMENT </button>
    </div>
</template>
<script>
import {mapState} from 'vuex'
export default {
    name: 'home',
    computed: {
      ...mapState({
         count: state => state.count
      })
    }
}
</script>
<style lang="">
    
</style>
