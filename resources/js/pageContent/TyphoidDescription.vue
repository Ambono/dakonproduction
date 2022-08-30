<template>
<div class="typhoiddescription">
    <h1>This is for thyphoid description</h1>
<div><h1>Qu'est ce que la fievre typhoide</h1>
   
    <p>content 2: {{contentvariable}}</p>
    </div>
</div>
</template>

<script>
import  { contentvariable, MamanDakonwork, Posology, Disclaimer} from './Content'
export default{
    name:'typhoiddescription',
   data: () => ({ 
    contentvariable:contentvariable, 
    MamanDakonwork:MamanDakonwork,
     Posology:Posology, 
     Disclaimer:Disclaimer,
     }),
 mounted() {
           
          
     },

    created(){
       
    },
    methods:{
      
    }
}
</script>



