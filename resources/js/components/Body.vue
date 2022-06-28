<template>
    <div><h1>Body</h1>
      <OrderBody/>
      <MessageBody/>
      </div>
</template>
<script>
import  MessageBody  from './MessageBody';
import  OrderBody  from './OrderBody';
export default ({components:{
        MessageBody,
        OrderBody
    },
      mounted() {
            console.log('Body Component mounted.')
        }
    })
</script>
