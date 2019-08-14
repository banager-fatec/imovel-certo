<template>
  <span class="word-shrink">
    <span class="word-shrink-short">{{ short }}</span>
    <span class="word-shrink-original">{{ original }}</span>
    <style>
      @media(max-width: {{ changeOn }}px) {
        .word-shrink-original {
          display: none;
        }
        .word-shrink-short {
          display: block !important;
        }
      }
    </style>
  </span>
</template>

<script>
export default {
  props: {
    original: {
      type: String,
      default: '',
      required: true
    },
    short: {
      type: String,
      default: '',
      required: true
    },
    changeOn: {
      type: Number,
      default: 425
    }
  }
}
</script>

<style scoped>
.word-shrink-short {
  display: none;
}
</style>
