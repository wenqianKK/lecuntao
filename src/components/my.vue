<template>
  <div >
    <h1>{{msg}}</h1>
  </div>
</template>

<script>
export default {
  name: 'my',
  data () {
    return {
      msg: '我的'
    }
  },
  beforeMount(){
    this.$store.commit("isShowfoot",true)
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>


</style>
