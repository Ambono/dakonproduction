<template>
    <div  class="default-container"> 
        <h1>This is from homes component</h1>
        {{ count }}
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
