<template>
<div> 
<div
class="foot-content"
:class="this.showMobileMenu ? 'open-menu' : 'closed-menu'"
> <!--  Menu content -->
<ul class="foot-items">
<li><router-link to="/about">Contactez nous</router-link></li>
<li><router-link to="/order">Vos opinions</router-link></li>
<li><router-link to="/message">Aidez-moi</router-link></li>
</ul>
</div>
</div>
</template>

<script>

export default{
   name:'footcomponent',
data() {
return {
showMobileMenu: false,
};
},
methods: {
showMenu() {
this.showMobileMenu = !this.showMobileMenu;
},
},
}
</script>

<style lang="scss" scoped>
.foot-menu {
background-color: white;
}
.foot-content {
display: flex;
justify-content: space-between;
padding: 10px 30px;
align-items: top;
background-color: aqua;
flex: 1 1 auto;
min-height: 100vh;
}
.foot-items {
display: flex;
justify-content: center;
align-items: top;
list-style: none;
margin: 0;
li {
padding: 0 10px;
}
}
i {
display: none;
}
// Mobile version - hidden hamburger menu
@media screen and (max-width: 768px) {
.foot-menu {
padding-top: 10px;
position: relative;
width: 100%;
}
.foot-content {
flex-direction: column;
position: relative;
}
}
</style>



