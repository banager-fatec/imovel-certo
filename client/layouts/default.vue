<template>
  <div>
    <PageHeader />
    <nuxt class="content-wrapper" />
  </div>
</template>

<script>
import PageHeader from '~/components/PageHeader.vue';

export default {
  head: {
    link: [
      { rel: 'stylesheet', href: 'https://fonts.googleapis.com/css?family=Didact+Gothic|Open+Sans:400,600&display=swap' }
    ]
  },
  components: {
    PageHeader
  }
}
</script>


<style>
html {
  font-family: 'Open Sans', sans-serif;
  font-size: 14px;
  word-spacing: 1px;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  box-sizing: border-box;
}

.basic-wrapper {
  width: 90%;
  max-width: 1080px;
  margin: 0 auto;
}

body {
  background-color: #F1F1F1;
}

*,
*:before,
*:after {
  box-sizing: border-box;
  margin: 0;
}

.button--green {
  display: inline-block;
  border-radius: 4px;
  border: 1px solid #3b8070;
  color: #3b8070;
  text-decoration: none;
  padding: 10px 30px;
}

.button--green:hover {
  color: #fff;
  background-color: #3b8070;
}

.button--grey {
  display: inline-block;
  border-radius: 4px;
  border: 1px solid #35495e;
  color: #35495e;
  text-decoration: none;
  padding: 10px 30px;
  margin-left: 15px;
}

.button--grey:hover {
  color: #fff;
  background-color: #35495e;
}

.content-wrapper {
  height: calc(100vh - 75px);
  overflow: auto;
}
</style>
