<template>
  
      
      <div class="foot">
          <a href="javascript:;" class="cart-store">
            <em class="icon-store iconfont icon-dianpu "></em> 
            <span class="txt-store">店铺</span>
          </a> 
          <a href="javascript:;" class="cart-car-icn">
            <div class="cart-car-wrap">
              <em class="btm-act-icn iconfont icon-gouwuche"></em> 
              <span class="cart-num">4</span>
            </div> 
            <span class="focus-info">购物车</span>
          </a> 
          <div>
            <div id="shopping-cart" class="shopping-cart">
              <a href="javascript:;">加入购物车</a>
            </div> 
            <div id="shopping-buy" class="shopping-buy ">
              <a href="javascript:;">立即购买</a>
            </div> 
            <div id="ime-buy_storage" class="ime-buy_bug">
              <a href="javascript:;" id="buy_storage">库存不足</a>
            </div> 
            <div id="ime-buy_bug" class="ime-buy_bug">
              <a href="javascript:;" id="buy_bug">已结束</a>
            </div> 
            <div id="ime-buy" class="ime-buy">
              <a href="javascript:;" id="qiang">立即抢购</a>
            </div> 
            <div id="ime-jidan" class="ime-jidan">
              <a href="javascript:;" id="jidian">立即抢购</a>
            </div>
          </div>
      </div>
    
</template>

<script>
export default {
  name: 'footCart',
  data () {
    return {
      msg: ''
    }
  },

}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
  *{
      padding:0;margin:0;
    }

   
  
  .foot{
        width: 100%;
        height:50px;
        overflow: hidden;
        position: absolute;
        left: 0;
        bottom: 0;
        background: #fff;
        border-top:1px solid #ccc;
        a {
            text-decoration: none;
            color: #252525;
            outline: none;
        }
        .cart-store {
            width: 15%;
            height: 50px;
            float: left;
            background: #fdfdfd;
            font-size: 10px;
            position: relative;
            .icon-store {
                width: 16px;
                height:16px;
                background-size: contain;
                margin-left: 18px;
                margin-top:12px;
                display: block;
            }
            .txt-store {
                text-align: center;
                font-size: 10px;
                color: #808080;
                display: block;
                margin-top: 2px;
            }
        }
       .cart-car-icn {
           width: 15%;
           height: 50px;
           float: left;
           background: #fdfdfd;
           color: #808080;
           font-size: 10px;
           position: relative;
           .cart-car-wrap {
               width: 100%;
               position: relative;
               .btm-act-icn {
                   width: 16px;
                   height: 16px;
                   display: block;
                   background-size: contain;
                   margin-left: 34%;
                   margin-top: 12px;
               }
               .cart-num {
                   padding: 1px 4px;
                   border-radius: 50%;
                   border: 1px solid #ccc;
                   background: #f81234;
                   position: absolute;
                   left: 30px;
                   top: -7px;
                   font-size: 8px;
                   display: block;
                   color: #fff;
               }
           }
           .focus-info {
               text-align: center;
               font-size: 10px;
               color: #808080;
               display: block;
               margin-top: 2px;
           }
       }
       .shopping-cart {
           background: #ff9c00;
       }
       .shopping-buy {
           background: #f64750;
       }
       .shopping-cart, .shopping-buy {
           float: left;
           width: 35%;
           font-size: 16px;
           text-align: center;
           line-height: 50px;
           a {
               color: #fffefe;
               display: block;
           }
       }
 

    }  
</style>
