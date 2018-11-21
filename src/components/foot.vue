<template>
  <div >
    <ul>
      <router-link to="/home" tag="li" activeClass="active">首页</router-link>
      <router-link to="/classify" tag="li" activeClass="active">分类</router-link>
      <router-link to="/cart" tag="li" activeClass="active">购物车</router-link>
      <router-link to="/my" tag="li" activeClass="active">我的</router-link>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'foot',
  data () {
    return {
      msg: ''
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
div{ width:100%;
  background: gray;
  ul{
    list-style: none;
    display: flex;
    height: 60px;
    width:100%;
    justify-content: space-around;
    align-items: center;
   .active{color:red;}
  }


}
  
</style>
