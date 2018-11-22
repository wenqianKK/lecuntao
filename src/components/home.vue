<template>
  <div id="main">
    <div class="wrap">
    <!--  ---------search------------ -->
    	<div class="conthd">
    		<div class="sel_city">
    			<i class="iconfont icon-map"></i>
    			<span class="city_name">大连市</span>
    			<i class="iconfont icon-more"></i>
    		</div>
    		<div class="search-wrap">
    			<div class='search_ico'></div>
    			<router-link to='-' tag='input' class='search_ipt' placeholder="搜索您需要的商品"></router-link>
    		</div>
    	</div>
  <!--  ---------大图轮播------------ -->
	<div class="swiper-container swiper1">
		<div class="swiper-wrapper">
			<div class="swiper-slide" v-for="data in advlist">
				<img :src="data.adv_image" class="img_1"/>
			</div>
		</div>
	</div>
	</div>
	<!--  ---------小图轮播------------ -->
	<div class="swiper-container swiper2">
		<div class="swiper-wrapper" style="background:white">
			<ul>
				<li class="swiper-slide" v-for="data in datalist.list">
					<img :src="data.cate_image" class="img_2"/>
					<div class="s2_name">
						{{data.cate_name}}
					</div>
				</li>
			</ul>
		</div>
	</div>
    <!--  ---------乐6集------------ -->
    <div class="laughsix">
    	<img src="../assets/imgLe6ji.png" class="img3" />
    </div>

    <div class="triangle_bg">
    	<img class="triangle" src="../assets/sanjiao.png" /> 
    	<a href="-" class="tri_a">
    		<img class="tri_img" src="../assets/lct_wap_llj.jpg">
    	</a>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import Swiper from 'swiper';
import 'swiper/dist/css/swiper.css';

export default {
  name: 'home',
  data () {
    return {
   		advlist:[],
   		datalist:[]

    }
  },
  mounted(){
  	axios.get("lct?api_version=2.3.0&platType=2&client=wap&isEncry=0&time=1542863520124&act=index&op=index&key=7e7d04d349f9f724d45395cb52ab66c2").then(res=>{
  		console.log(res.data.datas)
  		this.advlist = res.data.datas.adv;
  		this.$nextTick(()=>{
  			new Swiper ('.swiper-container', {
			  })        
		})
		  	}).catch(error=>{
		  		console.log(error);
		  	}),
	axios.get("lct?api_version=2.3.0&platType=2&client=wap&isEncry=0&time=1542863520124&act=index&op=index&key=7e7d04d349f9f724d45395cb52ab66c2").then(res=>{
  		console.log(res.data.datas.platform)
  		this.datalist = res.data.datas.platform;
  		
  		this.$nextTick(()=>{
  			new Swiper ('.swiper-container', {
			  })        
		})
		  	}).catch(error=>{
		  		console.log(error);
		  	})
		  }

		}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
#main{
	height: 667px;
	background-color: #efefef;
		.wrap{
			width:100%;
			height:205px;
			.conthd{
				width:100%;
				height:40px;
				position: fixed;
				top:0;
				left:0;
				z-index: 50;
				.sel_city{
					width:90px;
					height:28px;
					text-align: center;
					line-height:28px;
					position: absolute;
					left: 9px;
					top: 4px;
						.icon-map{
							color:#fefefe;
						}
						.city_name{
							width:42px;
							height:14px;
							color:#fefefe;
						}
						.icon-more{
							color:#fdd7d6;
						}

				}
				.search-wrap{
					width:262px;
					height:30px;
					background-color:#fefefe;
					position: absolute;
					right:9px;
					top:5px;
					border-radius: 20px;
					.search_ico{	
						position: absolute;
						top:6px;
						left:10px;
						width:14px;
						height:16px;
						background:url(../assets/search.jpg) no-repeat;
					}
					.search_ipt{
						width:200px;
						height:20px;
						position: absolute;
						top:5px;
						left:30px;
						font-size: 14px;
						line-height:20px;
						border: none;
					}
				}
				
			}
			}
			.swiper1 {
			    
			    .img_1{
			    	width:100%;
			    	height:205px;

			    }
			} 

	.swiper2{
		.swiper-wrapper{

			width:500px;
			ul{
				width:450px;
				height:75px;
				margin-left:16px;
				margin-top:14px;			
				margin-bottom: 10px;
				text-align: center;
				// background-color:blue;
				li{	
					float: left;
					width:52px;
					height:75px;
					margin-right: 31px;
					.img_2{
						width:40px;
						height:40px;
					}
					.s2_name{
						width:52px;
						height:35px;
						font-size:13px;
						line-height:35px;
					}
				}
			}
		}
	}

	.laughsix{
		width: 375px;
		height: 25px;

		.img3{
			margin:10px auto 0 auto;
			width:119px;
			height: 15px;
			display: block;

		}
	}

	.triangle_bg{
		width:100%;
		
		position: relative;
		.triangle{
			width:20px;
			height:20px;
			position: absolute;
			bottom:-4.5px;
			left:50%;
			display: block;
			margin-left:-20px;

		}
		.tri_a{

			width:100%;
			height:100px;
			display: block;
			.tri_img{
				height:100px;
				vertical-align: middle;
			}
		}
		
	}
}

</style>
