<script>
import ToDo from './components/ToDo.vue'
export default {
  name: "App",
  components: {
    ToDo,
  },
  data() {
    return {
    }
  },
  methods: {
  }
}  
</script>

<template>
  <main>
    <ToDo></ToDo>
  </main>
 
</template>

<style scoped>
.logo {
  height: 6em;
  padding: 1.5em;
  will-change: filter;
}
.logo:hover {
  filter: drop-shadow(0 0 2em #646cffaa);
}
.logo.vue:hover {
  filter: drop-shadow(0 0 2em #42b883aa);
}
</style>
