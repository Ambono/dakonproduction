<template lang="">
    <div class="app">
        <TopNavbar></TopNavbar>  
        <MainBody></MainBody> 
        <router-view></router-view>
    </div>
</template>
<script>
import '../styles/app.scss';
import '../../css/app.css';

export default {
    name: 'app',
    components: {
        TopNavbar: () => import('../components/navigations/TopNavbar'),
        MainBody:() => import('../components/MainBody.vue')
    }
}
</script>