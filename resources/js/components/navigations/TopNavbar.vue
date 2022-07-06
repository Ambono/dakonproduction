<template>
<div>
  <div id="nav">
<!---------------------------------------->

<div class="nav-menu"> <!-- Menu container -->
<i 
class="fas fa-bars" 
@click="showMenu()"> 
</i> <!-- Hamburger icon with click method -->
<div
class="nav-content"
:class="this.showMobileMenu ? 'open-menu' : 'closed-menu'"
> <!--  Menu content -->
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
.nav-menu {
background-color: white;
}
.nav-content {
display: flex;
justify-content: space-between;
padding: 10px 30px;
align-items: center;
}
.nav-items {
display: flex;
justify-content: center;
align-items: center;
list-style: none;
margin: 0;
padding: 0;
li {
padding: 0 10px;
}
}
i {
display: none;
}
// Mobile version - hidden hamburger menu
@media screen and (max-width: 768px) {
.nav-menu {
padding-top: 10px;
position: absolute;
width: 100%;
}
.open-menu {
opacity: 1;
height: 150px;
}
.closed-menu {
opacity: 0;
height: 0;
padding: 0;
}
.nav-content {
flex-direction: column;
z-index: 100;
position: relative;
transition: all 0.2s ease-out;
}
.nav-items {
flex-direction: column;
}
i {
display: block;
text-align: right;
padding: 0 10px 10px 0;
}
}
</style>



