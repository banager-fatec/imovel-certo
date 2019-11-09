<template>
  <header class="header">
    <div class="basic-wrapper">
      <div class="header__informative">
        <div class="header-navigation">
          <Navigator />
          <Logo class="header-logo" />
        </div>
        <ProfileBasic />
      </div>
    </div>
  </header>
</template>

<script>
import Logo from './Logo.vue';
import ButtonDefault from './form/ButtonDefault.vue';
import ProfileBasic from './ProfileBasic.vue';
import Navigator from './Navigator.vue';

export default {
  components: {
    Logo,
    ProfileBasic,
    Navigator,
    ButtonDefault
  }
}
</script>

<style>
.header {
  background-color: #385683;
  color: #ffffff;
  padding: 16px 0;
  box-shadow: 0px 2px 4px rgba(0,0,0,.3);
  height: 75px;
}

.header__informative {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.header__informative .header-navigation {
  display: flex;
  align-items: center;
}

.header__informative .informative-search {
  max-width: 400px;
  margin: 0 24px;
}

.header__informative .header-logo {
  margin-left: 16px; 
}

.header__informative .header-logo svg {
  width: 120px;
  height: 34px;
}

.header-content {
  display: flex;
  align-items: center;
}
</style>
