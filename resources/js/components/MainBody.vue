<template>
    <div class="main-body"><h1>this is main body</h1>
      <Orders/>
      <Messages/>
    </div>
</template>
<script>
export default {
    name:'mainbody',
    components:{
        Messages:() => import('../components/pages/Messages.vue'),
        Orders:() => import('../components/pages/Orders.vue')
        //MainBody:() => import('./Components/MainBody.vue')
    },
      mounted() {
            console.log('Body Component mounted.')
        }
    }
</script>
