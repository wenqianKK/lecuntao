<template>
  <div id="app">
    <section>
      <router-view></router-view>
    </section>
    
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
 ul,li{list-style: none}
#app {

 footer{position:fixed;
        z-index: 50;
        width:100%;
        left: 0;
        bottom: 0;
        background: #fff;
        border-top: 1px solid #ccc;
  }
}
</style>
