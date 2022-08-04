<template>

<div>
 
  <div id="nav">

<!------------------------------------------>

<!---------------------------------------->
<div class="nav-menu"> <!-- Menu container -->
<i class="bi bi-chevron-double-down"></i>
<!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
  <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
</svg> -->


<div id ="custom-hamburger-container">
<i class="bi bi-arrow-down-square" @click="showMenu()"> <!--<div id="custom-hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg></div> -->
  <div class="top-icon">   
      <span class="line line01"></span>
      <span class="line line02"></span>
      <span class="line line03"></span>   
  </div>
</i> <!-- Hamburger icon with click method -->
</div>

<div
class="nav-content"
:class="this.showMobileMenu ? 'open-menu' : 'closed-menu'"
> <!--  Menu content -->
<div class="logo">Logo</div> <!--  Here can be a logo -->
<ul class="nav-items">
<li><router-link to="/">Home</router-link> </li>
<li><router-link to="/about">About</router-link></li>
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

// Mobile version - hidden hamburger menu
@media screen and (max-width: 768px) {
.nav-menu {
padding-top: 10px;
position: relative;
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



