<template>
  <div class="input-search">
    <button type="button" class="search-button">
      <fa icon="search" />
    </button>
    <InputDefault :placeholder="placeholder" />
  </div>
</template>

<script>
import InputDefault from './InputDefault.vue';

export default {
  components: {
    InputDefault
  },
  props: {
    placeholder: {
      type: String,
      default: ''
    }
  }
}
</script>

<style>
.input-search {
  display: flex;
  align-items: center;
  filter: drop-shadow(0 4px 4px rgba(0,0,0,.25));
  flex-grow: 1;
}

.input-search .input-default {
  border-radius: 0 4px 4px 0;
}

.input-search .search-button {
  
  border-radius: 4px 0 0 4px;
  border: none;
  
  background-color: #385683;
  
  height: 35px;
  width: 34px;
  
  color: #fff;
}
</style>
