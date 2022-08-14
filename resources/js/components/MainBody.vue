<template>
    <div class="main-body">
  <router-view></router-view>   
    </div>
</template>
<script>
export default {
    name:'mainbody',
    components:{        
    },
      mounted() {
            console.log('Body Component mounted.')
        }
    }
</script>
