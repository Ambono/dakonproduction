<template>
<div class="messages">
    <h1>This is for thyphoid description</h1>   
        <p> {{LesFaits}}</p>
        <p>{{Parag1}}</p>
        <p>{{Symptome}}</p>
        <p>{{Parag2}}</p>
        <p>{{Traitement}}</p>
        <p>{{Parag3}}</p>
        <p>{{RecommendationTitle}}</p>
        <p>{{Recommendation}}</p>           
    </div>
</template>

<script>
import  { LesFaits, Parag1, Symptome, Parag2, Traitement, Parag3, RecommendationTitle, Recommendation} from './Content.config';


const Content = {
     LesFaits : LesFaits,
     Parag1 : Parag1, 
     Symptome : Symptome,
     Parag2 : Parag2,
     Traitement : Traitement,
     Parag3 : Parag3,
     RecommendationTitle : RecommendationTitle,
     Recommendation : Recommendation
};
export default{
    name:'typhoiddescription',


   data: () => ({ 
    LesFaits : LesFaits,
    Parag1 : Parag1, 
    Symptome : Symptome,
    Parag2 : Parag2,
    Traitement : Traitement,
    Parag3 : Parag3,
    RecommendationTitle : RecommendationTitle,
    Recommendation : Recommendation
     }),
 mounted() {
           
          
     },

    created(){
       
    },
//     methods:{
//           function GetContentForTyphoideDescription(user) {
//   return user.firstName + ' ' + user.lastName;
//          }
//     }
}
</script>



