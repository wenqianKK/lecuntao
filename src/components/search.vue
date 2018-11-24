<template>
  <div class="ws_box">
    <div class="header">
    	<img src="../../static/iclose.png" height="12" width="12" alt="" class="cha">
    	<div class="input">
	    	<span>{{wstext}}</span>
	    	<img src="../../static/icon_shaixuan_arrowdown.png" height="15" width="15" alt="" @click="handleShowClick()">
	    	<input type="search" placeholder="输入商品名称">
	    	<img src="../../static/icon_sousuo_close.png" height="10" width="10" class="cha_right" @click="handleClick()">
    	</div>
    	<div class="sousuo">搜索</div>
    </div>
    <div class="tiao"><span class="hot">Hot</span><span class="remen">热门搜索</span>
    </div>
    <ul class="recommend">
    	<router-link v-for="data,wsindex in datalist" :to="re_list[wsindex]" tag="li">{{data}}</router-link>
    </ul>
    <ul class="cute" v-show="isShow">
    	<li class="top" @click="handleClick1()">商品</li>
    	<li @click="handleClick2()">店铺</li>
    </ul>
    <ul class="wshistory">
    	<li class="his_title">
    		<div class="his_left">搜索历史</div>
    		<div class="his_right"><img src="../../static/idel.png" height="15" width="15" alt="">清空</div>
    	</li>
    	<li></li>
    </ul>
  </div>
</template>

<script>
import axios from "axios"	
export default {
  name: 'search',
  data () {
    return {
		datalist:[],
		isShow:false,
		wstext:"商品",
		re_list:["/nianhuo","/le6","/mimian","/kele","/shouji","/xiyifen"]
    }
  },
  mounted(){
  	axios.get("/lct?api_version=2.3.0&platType=2&client=wap&isEncry=0&time=1542882728756&act=goods&op=hotWord").then(res=>{
  		console.log(res.data);

  		this.datalist = res.data.datas.list;	
  	}).catch(error=>{
  		console.log(error);
  	})
  },
  methods:{
  	handleShowClick(){
		this.isShow = true;
  	},
  	handleClick1(){
  		//console.log('click1');
		this.wstext = "商品";
		this.isShow = false;
  	},
  	handleClick2(){
  		//console.log('click2');
		this.wstext = "店铺";
		this.isShow = false;
  	}
  }
}
</script>
<!-- https://mobileway.lecuntao.com/lct?api_version=2.3.0&platType=2&client=wap&isEncry=0&time=1542882728756&act=goods&op=hotWord -->
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
*{
	padding:0;
	margin:0;
	list-style: none;
}
.ws_box{
	position: relative;
}
	.header{
		position: relative;
		overflow: hidden;
		height:53px;
		.cha{
			float: left;
			margin-left: 13px;
			margin-top: 21px;
			display: block;	
		}
		.input{
			height: 32px;
			background: #f2f2f2;
			width: 285px;
			border-radius: 16px;
			margin-top: 10px;
			margin-left: 38px;
			span{
				padding-left: 14px;
				line-height: 32px;
				color: #8b8b8b;
			}
			input{
			padding-left: 12px;
			height: 20px;
			border:none;
			border-left: 1px solid #d0d0d0;
			background: #f2f2f2;
			outline: none;
			}
			.cha_right{
				padding-right: 10px;
			}
		}
		.sousuo{
			position: absolute;
			width: 32px;
			height: 21px;
			float: right;
			right:13px;
			top: 16px;
			color: #323232;
		}
	}
	.tiao{
		height: 22px;
		margin-left: 12px;
		.hot{
			color: red;
			font-size: 10px;
			padding-top: 3px;
		}
		.remen{
			color: #464646;
			font-size: 16px;
			padding-left: 5px;
		}
	}
	.recommend{
		height: 100px;
		li{
			margin-top: 3px;
			float: left;
			margin-left: 10px;
			margin-bottom: 10px;
			font-size: 14px;
			padding:7px 15px 7px 15px;
			border:1px solid #9f9f9f;
			border-radius: 14px;
		}
	}
	.cute{
		width: 100px;
		height: 104px;
		background: black;
		opacity:.7;
		color: white;
		position: absolute;
		left: 48px;
		top:50px;
		li{
			height: 51px;
			margin-left: 15px;
			margin-right: 10px;
			line-height: 51px;
			text-align: center;
		}
		.top{
				border-bottom: 1px solid white;
			}
	}
	.wshistory{
		width: 100%;
		font-size: 14px;
		color: #8d8d8d;
		border-bottom: 1px solid #f1f1f1;
		.his_left{
			float: left;
			padding-left: 11px;
		}
		.his_right{
			float:right;
			padding-right: 11px;
			img{
				margin-right: 4px;
			}
		}
		li{
			height: 38px;
			border-bottom: 1px solid #f1f1f1;

		}
	}

</style>
