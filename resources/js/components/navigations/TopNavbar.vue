<template>
<div>
  <div id="nav">
<!---------------------------------------->

<div class="nav-menu"> <!-- Menu container -->
<i class="fas fa-bars" @click="showMenu()"> </i> <!-- Hamburger icon with click method -->
<div class="nav-content" :class="this.showMobileMenu ? 'open-menu' : 'closed-menu'"> <!--  Menu content -->
<div class="logo">Logo</div> <!--  Here can be a logo -->
<ul class="nav-items">
<li> <router-link to="/">Home</router-link> </li>
<li><router-link to="/about">About</router-link></li>
<li>  <router-link to="/order">Commandes</router-link></li>
<li>  <router-link to="/message">Messages</router-link></li>
</ul>
<div class="login-button">Login</div>
</div>
</div>
<!---------------------------------------->

  </div>  
 </div>
</template>

<script>
export default{
   name:'topnavbar',



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

</style>



