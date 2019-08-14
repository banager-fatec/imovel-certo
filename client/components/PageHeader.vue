<template>
  <header class="header">
    <div class="basic-wrapper">
      <div class="header__informative">
        <Logo />
        <InputSearch class="informative-search" placeholder="Autor, nome, ano de lançamento..." />
        <ProfileBasic />
      </div>
      <div class="header__navigation">
        <Navigator />
      </div>
    </div>
  </header>
</template>

<script>
import Logo from './Logo.vue';
import InputSearch from './form/InputSearch.vue';
import ButtonDefault from './form/ButtonDefault.vue';
import ProfileBasic from './ProfileBasic.vue';
import Navigator from './Navigator.vue';

export default {
  components: {
    Logo,
    InputSearch,
    ProfileBasic,
    Navigator,
    ButtonDefault
  }
}
</script>

<style scoped>
.header {
  background-color: #385683;
  color: #ffffff;
  padding-top: 40px;
  border-bottom: 3px solid #ffffff;
}

.header__informative {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.header__informative .informative-search {
  max-width: 400px;
  margin: 0 24px;
}

.header__navigation {
  margin-top: 32px;
  display: flex;
  justify-content: space-between;
}
</style>
