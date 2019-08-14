<template>
  <button type="button" :class="`btn btn--${ btnStyle }`">
    <fa v-if="icon" class="icon" :icon="icon" />
    <span v-if="!shortLabel.text">{{ label }}</span>
    <WordsShrink 
      v-else 
      :short="shortLabel.text" :original="label" 
      :changeOn="shortLabel.changeOn || 420" />
  </button>
</template>
<script>
import WordsShrink from '../helpers/WordsShrink.vue';

export default {
  components: {
    WordsShrink
  },
  props: {
    btnStyle: {
      type: String,
      default: 'default'
    },
    label: {
      type: String,
      default: '',
      required: true
    },
    shortLabel: {
      type: Object,
      default: {}
    },
    icon: {
      type: String,
      default: ''
    }
  }
}
</script>

<style>
.btn {

  display: flex;
  align-items: center;

  border: none;
  border-radius: 50px;
  
  background-color: #D1D6DD;
  
  color: #385683;
  font-weight: 600;
  font-family: 'Open sans', sans-serif;
  
  padding: 8px;

  cursor: pointer;
}

.btn .icon {
  margin: 0 8px;
}

.btn--light {
  background-color: #ffffff;
}
</style>
