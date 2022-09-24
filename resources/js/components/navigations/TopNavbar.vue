<template>
<div> 
  <div id="nav">
<div class="nav-menu"> <!-- Menu container -->
<i id ="custom-hamburger-container" @click="showMenu()">   
  <div>   
      <span class="line line01"></span>
      <span class="line line02"></span>
      <span class="line line03"></span>      
  </div>
</i> <!-- Hamburger icon with click method -->

<div id="logo"><img :src="logo" width="360px" height="200px"/><p>Dakon production</p></div>
<div
class="nav-content"
:class="this.showMobileMenu ? 'open-menu' : 'closed-menu'"
> <!--  Menu content -->
<!-- <div id="logo"><img :src="logo" width="360px" height="200px"/><p>Dakon production</p></div> Here can be a logo -->
<ul class="nav-items">
<li><router-link to="/">Accueil</router-link> </li>
<li><router-link to="/about">Qui sommes nous</router-link></li>
<li><router-link to="/order">Commandes</router-link></li>
<li><router-link to="/message">Messages</router-link></li>
</ul>
<div class="login-button">Login</div>
</div>
</div>
<!---------------------------------------->

  </div>  
 </div>
</template>

<script>
import logo from "../../../images/logo/logo2.png";
export default{
   name:'topnavbar',
 
data() {
return {
showMobileMenu: false,
 logo: logo
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
background-color: aqua;
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

#logo {
   background: linear-gradient(to top, aqua, transparent);
   position: relative;
   top: 0;
   left: 0;
   bottom: 0;
   right: 0;
   margin-left:0;   
   overflow: hidden; 
   color:lightgrey;
   font-size:40px;
   font-weight:300;
   font-family:Verdana, Geneva, Tahoma, sans-serif;
   opacity:0.5;   
}
// Mobile version - hidden hamburger menu
@media screen and (max-width: 768px) {
.nav-menu {
padding-top: 10px;
position: relative;
width: 100%;
}
.open-menu {
opacity: 4;
height: auto;
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



