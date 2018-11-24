<template>
  <div >
    <div class="search">
    	<div class="input"></div><span>取消</span>
    </div>
    <ul class="ws_nav">
    		<li>全部</li>
    		<li>销量优先</li>
    		<li>价格
    		<img src="../../static/icon_top_gray.png" height="8" width="15" alt="" class="img_top">
    		<img src="../../static/icon_down_gray.png" height="8" width="15" alt="" class="img_bottom"></li>
    		<li>筛选<i class="iconfont icon-filter icon"></i></li>
    </ul>
    <ul class="le6_list">
    	<li v-for="data,index in datalist" :key="data.id"><img :src="data.goods_image" alt=""></li>
    </ul>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: 'le6',
  data () {
    return {
		datalist:[]
    }
  },
  mounted(){
  	axios.get("/lct?api_version=2.3.0&platType=2&client=wap&isEncry=0&time=1542962194909&act=goods&op=goodsList").then(res=>{
  		this.datalist = res.data.datas.list;
		console.log(res);
  	}).catch(error=>{
  		console.log(error);
  	})
  }
}
</script>
<!-- https://mobileway.lecuntao.com/lct?api_version=2.3.0&platType=2&client=wap&isEncry=0&time=1542960120410&act=goods&op=goodsList -->
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
*{
	padding: 0;
	margin: 0;
	list-style: none;
}
	.search{
		display: flex; 
		height: 60px;
		.input{
			height: 30px;
			flex:1;
			background: #f2f2f2;
			margin-left: 13px;
			margin-top: 15px;
			border-radius: 15px;
		}
		span{
			font-size: 14px;
			color: #060606;
			padding-left: 11px;
			padding-right: 23px;
			line-height: 60px;
		}
	}
	.ws_nav{
		display: flex;
		height: 45px;
		border-bottom: 1px solid #d1d1d1;
		li{
			flex:1;
			text-align: center;
			line-height: 45px;
			position: relative;
			img{
				display: block;
				position: absolute;
			}
			.img_top{
				top:10px;
				left: 73px;
			}
			.img_bottom{
				top:23px;
				left: 73px;
			}
			.icon{
				padding-left: 6px;
			}
		}
	}
	.le6_list{
		li{
			height: 124px;
			border-bottom: 1px solid #d1d1d1;
		}
	}

</style>
