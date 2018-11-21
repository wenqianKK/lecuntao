<template>
  <div id="app">
    <section>
      <router-view></router-view>
    </section>
    <footer>
      <foot></foot>
    </footer>
  </div>
</template>

<script>
import foot from "./components/foot"
export default {
  name: 'App',
  computed:{

  },

  watch:{

  },

  components:{
    foot,
  },
}
</script>

<style lang="scss">
 *{margin:0;padding:0;}
#app {

 footer{position:fixed;z-index: 50;bottom: 0;width:100%;}
}
</style>
