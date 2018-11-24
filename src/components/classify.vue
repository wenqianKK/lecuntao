
<template>
  <div>
      <div class="head">
        <router-link class="input" to="/search">请输入商品名称</router-link>
        <span>取消</span>
      </div>
      <div class="ws_main">
        <ul class="sidebar_left">
          <li v-for="data,index in data_list"   activeClass="active" @click="handle(index)">{{data.gc_name}}</li>
        </ul>
        <div  class="sidebar_right">
          <keep-alive>
            <componet :is='who'></componet>
          </keep-alive>
        </div>
      
    </div>
   <!-- <ul class="sidebar_right">
      <router-link v-for="pro_data,index in product_list" :to="wsroute_list[index]" tag="li">
      <router-view></router-view>  
      <img :src="pro_data.cate_img" alt="">
    <p>{{pro_data.gc_name}}</p>
      </router-link>
   </ul> -->
     
  </div>
</template>
<script>

import axios  from "axios";
  
export default {
  name: 'classify',
  data () {
    return {
    data_list:[],
    wsroute_list:["/dianqi256","/shipin593","/nongpro1094","/nongyong","/tongxun","/gehu","/jiaju","/fushi","/xiemao","/chepin","/muying"],
    product_list:[{name:'dianqi',id:256},{name:'shipin',id:593},{name:'nongpro',id:1094}],
    who:'dianqi',

    }
  },
  methods:{
    handle(i){

      this.who =product_list[i].name
      axios({
          url: '/lct?api_version=2.3.0&platType=2&client=wap&isEncry=0&time=1542967068207&act=mobile_cate&op=index',
          method: 'post',
          data: {
              gc_id:product_list[i].id
             /* gc_id:593,
              gc_id:1094,
              gc_id:888,
              gc_id:470,
              gc_id:662,
            gc_id:2,
            gc_id:3,
            gc_id:825,
            gc_id:730,
            gc_id:1*/

      },
        transformRequest: [function (data) {
          // Do whatever you want to transform the data
          let ret = ''
          for (let it in data) {
            ret += encodeURIComponent(it) + '=' + encodeURIComponent(data[it]) + '&'
          }
          return ret
        }],
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
        }
      }).then(res=>{
        console.log(res);
        this.product_list = res.data.datas;
      }) 
    }
  },
  mounted(){
    axios.get("lct?api_version=2.3.0&platType=2&client=wap&isEncry=0&time=1542870125905&act=mobile_cate&op=index").then(res=>{
    //console.log(res);
    this.data_list = res.data.datas;
    //console.log(this.data_list);
    }).then(res=>res.json()).then(res=>{
      //console.log(res)
      //this.product_list = res.data.
    }).catch(error=>{
      console.log(error)
    });
    // axios({
    //   url: '/lct?api_version=2.3.0&platType=2&client=wap&isEncry=0&time=1542967068207&act=mobile_cate&op=index',
    //   method: 'post',
    //   data: {
    //       gc_id:256
    //      /* gc_id:593,
    //       gc_id:1094,
    //       gc_id:888,
    //       gc_id:470,
    //       gc_id:662,
    //       gc_id:2,
    //       gc_id:3,
    //       gc_id:825,
    //       gc_id:730,
    //       gc_id:1*/

    //   },
    //   transformRequest: [function (data) {
    //     // Do whatever you want to transform the data
    //     let ret = ''
    //     for (let it in data) {
    //       ret += encodeURIComponent(it) + '=' + encodeURIComponent(data[it]) + '&'
    //     }
    //     return ret
    //   }],
    //   headers: {
    //     'Content-Type': 'application/x-www-form-urlencoded'
    //   }
    // }).then(res=>{
    //   console.log(res);
    //   this.product_list = res.data.datas;
    // }) 
  },
  components:{
    'dianqi':{
      template:`<div>
          <ul >
             <li>子组件</li>
           </ul>
      </div>`,
      props:{}
    }
  }
  /*["256","593","1094","888","470","662","2","3","825","730","1"]*/
 }
</script>
<style scoped lang="scss">
/**{
  margin:0;
  padding:0;
  list-style: none;
}
  .head{
    width:100%;
    height:60px;
    display: flex;
    border-bottom: 1px solid #d1d1d1;
    .input{
      margin-top: 15px;
      margin-left: 19px;
      background:#f2f2f2;
      flex:1;
      height:30px;
      border-radius: 15px;
      color:#9c9c9c;
      line-height: 30px;
      padding-left: 16px;
    }
    span{
      font-size: 15px;
      color:black;
      padding-left: 10px;
      line-height: 60px;
      padding-right: 14px;
    }
  }
  .ws_main{
    height:557px;
    border-bottom: 1px solid #d1d1d1;
    .sidebar_left{
      float: left;
      width:88px;
      height:495px;
      background:#f0f0f0;
    li{
      line-height: 45px;
      text-align: center;
      height:45px;
    }
    .active{
      background: white;
      color:red;
    }
  }
  .sidebar_right{
    float:left;
    width: 287px;
    height:557px;
    font-size: 14px;
    text-align: center;
    li{
      width:92px;
      height: 118px;
      float: left;
    }
    img{
      width: 90px;
      height: 90px;
    }

  }
  }
  */

</style>
