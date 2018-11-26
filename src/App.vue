<template>
  <div id="app">
    <section>
      <router-view></router-view>
    </section>
	<footer>
        <foot v-show="isShowfoot"></foot>
        <footCart v-show="!isShowfoot"></footCart>
    </footer>
  </div>
</template>

<script>
import foot from "./components/foot"
import footCart from "./components/footCart";
export default {
  name: 'App',
  data(){
    return{
      
    }
  },
  computed:{
    isShowfoot(){
      return this.$store.state.isShowfoot;
    }
  },

  watch:{

  },

  components:{
    foot,
    footCart
  },
  
  mounted(){
    // console.log(this.$store.state.isShowfoot)
  }
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
