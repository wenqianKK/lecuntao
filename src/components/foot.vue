<template>
  <div >
    <ul>
      <router-link to="/home" tag="li" activeClass="active">
          <i class="iconfont icon-shouye1"></i>
          <span>首页</span>
      </router-link>
      <router-link to="/classify" tag="li" activeClass="active">
          <i class="iconfont icon-leimupinleifenleileibie"></i>
          <span>分类</span>
      </router-link>
      <router-link to="/cart" tag="li" activeClass="active">
        <i class="iconfont icon-qicheqianlian-1-copy"></i>
         <span> 购物车</span>
      </router-link>
      <router-link to="/my" tag="li" activeClass="active">
         <i class="iconfont icon-wode"></i>
         <span> 我的</span>
      </router-link>
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
 
  ul{
    list-style: none;
    display: flex;
    height: 50px;
    width:100%;
    justify-content: space-around;
    // align-items: center;
    li{

      display: flex;
      flex-direction: column;
      justify-content: space-around;
      align-items: center;
      i{
        display: block;
        height:24px;
        font-size: 20px;

      }
      span{
        height:16px;
        line-height: 16px; 
        display:block;

      }
    }
   .active{color:red;}
  }


}
  
</style>
