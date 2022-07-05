<template>
    <div class="main-body"><h1>this is main body</h1>
      <Orders/>
      <Messages/>
    </div>
</template>
<script>
import  Messages  from './Messages';
import  Orders  from './Orders';

export default ({
    components:{
        Messages,
        Orders
    },
      mounted() {
            console.log('Body Component mounted.')
        }
    })
</script>
