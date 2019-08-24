<template>
  <nav class="navigator">
    <fa class="navigator-icon" icon="bars" @click="toggleSideMenu()" />
    <div class="navigator__side" :class="{ 'navigator__side--active': sideOn }">
      <div class="side-body">
        <div>
          <Logo theme="dark" />
        </div>
        <ul class="navigator-links">
          <li 
            class="item" 
            v-for="item in items" 
            :key="item.title"
            :class="{ 'item--active': isActive(item.to) }" 
            @click="goTo(item.to)"
          >
          <get-svg :icon="item.icon" />
          <span>{{ item.title }}</span>
          </li>
        </ul>
      </div>
      <div class="side-shadow" @click="toggleSideMenu()"></div>
    </div>
  </nav>  
</template>

<script>
import Logo from './Logo.vue';
import GetSvg from './GetSVG.vue';

export default {
  data() {
    return {
      sideOn: false,
      items: [
        {
          title: 'Página inicial',
          to: 'index',
          icon: ''
        },
        {
          title: 'Imoveis favoritos',
          to: 'favoritos',
          icon: ''
        },
        {
          title: 'Lançamento da região',
          to: 'lancamentos',
          icon: ''
        },
        {
          title: 'Suas divulgações',
          to: 'divulgacoes',
          icon: ''
        },
        {
          title: 'Divulgar imovel',
          to: 'divulgar',
          icon: ''
        }
      ]
    };
  },
  components: {
    Logo,
    GetSvg
  },
  methods: {
    toggleSideMenu() {
      this.sideOn = !this.sideOn;
    },
    goTo(routeName) {
      $nuxt.$router.replace({name: routeName});
    },
    isActive(routeName) {
      return $nuxt.$route.name === routeName;
    }
  }
}
</script>

<style scoped>

.navigator .navigator-icon {
  
  width: 22px;
  height: 18px;

  cursor: pointer;
}

.navigator__side .side-body {
  
  display: flex;
  flex-direction: column;
  align-items: center;
  position: fixed;
  top: 0;
  left: -500px;

  width: 270px;
  height: 100vh;

  padding: 24px;
  
  background-color: #fff;
  
  z-index: 2;

  transition: left .4s ease-in-out;
}

.navigator__side .side-shadow {
  
  position: fixed;
  top: 0;
  right: -100vw;
  
  width: 100vw;
  height: 100vh;
  
  z-index: 1;
  
  opacity: 0;
  
  background-color: rgba(0,0,0,.8);

  transition: opacity .4s ease-in-out,
              right .2s .3s ease-in-out; 
}

.navigator__side.navigator__side--active .side-body {
  left: 0;
}

.navigator__side .side-body .logo {
  margin-bottom: 40px;
}

.navigator__side .side-body .navigator-links {
  color: #385683;
  width: 100%;
  display: flex;
  flex-direction: column;
  padding: 0;
}

.navigator__side .side-body .navigator-links .item {
  
  display: flex;
  align-items: center;
  cursor: pointer;
  
  list-style: none;
  
  height: 46px;
  
  padding: 16px;

  border-radius: 3px;

  margin-bottom: 8px;
}

.navigator__side .side-body .navigator-links .item.item--active {
  background-color: #385683;
  color: #fff;
}

.navigator__side.navigator__side--active .side-shadow {
  
  opacity: 1;
  
  right: 0;
  
  transition: opacity .4s .3s ease-in-out,
              right .4s ease-in-out; 
}
</style>
