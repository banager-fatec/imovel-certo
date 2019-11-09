<template>
  <input class="input-default" type="text" :placeholder="placeholder" />
</template>

<script>
export default {
  props: {
    placeholder: {
      type: String,
      default: ''
    }
  }
}
</script>


<style>
.input-default {
  
  font-family: 'Didact Gothic', sans-serif;
  font-size: 14px;
  color: #385683;
  
  min-height: 32px;
  
  padding: 8px;
  
  border-radius: 4px;
  border: none;
  
  background-color: #EAECEF; 
  
  flex-grow: 1;
}

.input-default::placeholder {
  color: #858F9E;
}
</style>

