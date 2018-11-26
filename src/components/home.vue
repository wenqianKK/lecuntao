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
			<div class="swiper-slide">
				<img :src="adv_img" class="img_1"/>
			</div>
		</div>
	</div>
	</div>
	<!--  ---------小图轮播------------ -->
	<div class="swiper-container swiper2" style="background:white" >
		<div class="swiper-wrapper swiper_2">
			<ul class="ul1">
				<router-link class="swiper-slide li1" v-for="data in datalist" tag="li" to="-">
					<img :src="data.cate_image" class="img_2"/>
					<div class="s2_name">
						{{data.cate_name}}
					</div>
				</router-link>
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
    <!--  ---------轮播3------------ -->
    <div class="swiper-container swiper3" style="background:white" >
		<div class="swiper-wrapper swiper_3" >
			<ul class="ul2">
				<li class="swiper-slide li2" v-for="data in lelist">
					<img :src="data.goods_image" class="img_3"/>
					<span class="s3_name">
						{{data.goods_name}}
					</span>
					<span class="span3">
						{{data.goods_price}}
					</span>
				</li>
				<li class="li2-1">
					<a href="javascript:;" title="">
						<img src="../assets/img_le6ji_see_all.png" class="img3-1"/>
					</a>
				</li>
			</ul>
		</div>
	</div>

	 <!--  ---------特色馆------------ -->
    <div class="special">
    	<img src="../assets/icon_teseguan.png" class="img4" />
    </div>

    <div class="triangle_bg2">
    	<img class="triangle" src="../assets/sanjiao.png" /> 
    	<a href="-" class="tri_a2">
    		<img class="tri_img2" src="../assets/lct_wap_tsg.jpg">
    	</a>
    </div>
     <!--  ---------轮播4------------ -->
    <div class="swiper-container swiper4" style="background:white" >
		<div class="swiper-wrapper swiper_4" >
			<ul class="ul3">
				<li class="swiper-slide li3" v-for="data in dataswiper4">
					<img :src="data.goods_image" class="img_4"/>
					<span class="s4_name">
						{{data.goods_name}}
					</span>
					<span class="span4">
						{{data.goods_price}}
					</span>
				</li>
				<li class="li3-1">
					<a href="javascript:;" title="">
						<img src="../assets/img_le6ji_see_all.png" class="img4-1"/>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!--  ---------轮播文字------------ -->
	<div class="swiper-container swiper5" style="background:white" >
		<div class="swiper-wrapper swiper_5">
			<ul class="ul4">
				<li class="swiper-slide li4" v-for="data in dataword">
					<a href="javascript:;" class="s5_name">
						
						{{data.cate_name}}
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!--  ---------电器城------------ -->
	<div class="electrical">
		<a href="javascript:;" class="el_line">
			<i class="icon_l"></i> 
			<span class="fl">电器城</span> 
			<span>
			<i class="icon_more"></i> 
			<span class="fr">更多</span>
			</span>
		</a> 
		<ul class="el_ul">
			<li class="el_li" v-for="data in dataelc">
				<a href="javascript:;" title="" class="el_a">
					<img :src="data.goods_image" class="el_img"/> 
				</a>
				<p class="pd-name">{{data.goods_name}}</p>
				<div class="pd-flow">
					<span class="pd-price">{{data.goods_price}} 元</span>
					<span class="pd-sold">已售{{data.goods_salenum}}件</span>
				</div>
			</li>
		</ul>
		</div>
		<!--  ---------食品汇------------ -->
	<div class="electrical">
		<a href="javascript:;" class="el_line">
			<i class="icon_l"></i> 
			<span class="fl">食品汇</span> 
			<span>
			<i class="icon_more"></i> 
			<span class="fr">更多</span>
			</span>
		</a> 
		<ul class="el_ul">
			<li class="el_li" v-for="data in dataelc2">
				<a href="javascript:;" title="" class="el_a">
					<img :src="data.goods_image" class="el_img"/> 
				</a>
				<p class="pd-name">{{data.goods_name}}</p>
				<div class="pd-flow">
					<span class="pd-price">{{data.goods_price}} 元</span>
					<span class="pd-sold">已售{{data.goods_salenum}}件</span>
				</div>
			</li>
		</ul>
		</div>
		<!--  ---------米面油------------ -->
	<div class="electrical">
		<a href="javascript:;" class="el_line">
			<i class="icon_l"></i> 
			<span class="fl">米面油</span> 
			<span>
			<i class="icon_more"></i> 
			<span class="fr">更多</span>
			</span>
		</a> 
		<ul class="el_ul">
			<li class="el_li" v-for="data in dataelc3">
				<a href="javascript:;" title="" class="el_a">
					<img :src="data.goods_image" class="el_img" @click="handdel(data)"/> 
				</a>
				<p class="pd-name">{{data.goods_name}}</p>
				<div class="pd-flow">
					<span class="pd-price">{{data.goods_price}} 元</span>
					<span class="pd-sold">已售{{data.goods_salenum}}件</span>
				</div>
			</li>
		</ul>
		</div>
		<!--  ---------服装城------------ -->
	<div class="electrical">
		<a href="javascript:;" class="el_line">
			<i class="icon_l"></i> 
			<span class="fl">服装城</span> 
			<span>
			<i class="icon_more"></i> 
			<span class="fr">更多</span>
			</span>
		</a> 
		<ul class="el_ul">
			<li class="el_li" v-for="data in dataelc4">
				<a href="javascript:;" title="" class="el_a">
					<img :src="data.goods_image" class="el_img"/> 
				</a>
				<p class="pd-name">{{data.goods_name}}</p>
				<div class="pd-flow">
					<span class="pd-price">{{data.goods_price}} 元</span>
					<span class="pd-sold">已售{{data.goods_salenum}}件</span>
				</div>
			</li>
		</ul>
		</div>
		<!--  ---------日用品------------ -->
	<div class="electrical">
		<a href="javascript:;" class="el_line">
			<i class="icon_l"></i> 
			<span class="fl">日用品</span> 
			<span>
			<i class="icon_more"></i> 
			<span class="fr">更多</span>
			</span>
		</a> 
		<ul class="el_ul">
			<li class="el_li" v-for="data in dataelc5">
				<a href="javascript:;" title="" class="el_a">
					<img :src="data.goods_image" class="el_img"/> 
				</a>
				<p class="pd-name">{{data.goods_name}}</p>
				<div class="pd-flow">
					<span class="pd-price">{{data.goods_price}} 元</span>
					<span class="pd-sold">已售{{data.goods_salenum}}件</span>
				</div>
			</li>
		</ul>
		</div>
		<!--  ---------热门推荐------------ -->
	<div class="electrical">
		<a href="javascript:;" class="el_line">
			<i class="icon_l"></i> 
			<span class="fl">热门推荐</span> 
		</a> 
		<ul class="el_ul" v-infinite-scroll="loadMore"
		infinite-scroll-disabled="loading"
		infinite-scroll-immediate-check="false"
		infinite-scroll-distance="0">
			<li class="el_li" v-for="data in dataelc6">
				<a href="javascript:;" title="" class="el_a">
					<img :src="data.goods_image" class="el_img"/> 
				</a>
				<p class="pd-name">{{data.goods_name}}</p>
				<div class="pd-flow">
					<span class="pd-price">{{data.goods_price}} 元</span>
					<span class="pd-sold">已售{{data.goods_salenum}}件</span>
				</div>
			</li>
		</ul>
		</div>
  </div>
</template>

<script>
import axios from 'axios';
import Swiper from 'swiper';
import 'swiper/dist/css/swiper.css';
import { Indicator } from 'mint-ui';




export default {
  name: 'home',
  data () {
    return {
   		lelist:[],
   		datalist:[],
   		adv_img:'',
   		datamain:[],
   		dataswiper4:[],
   		dataword:[],
   		dataelc:[],
   		dataelc2:[],
   		dataelc3:[],
   		dataelc4:[],
   		dataelc5:[],
   		dataelc6:[],
   		loading:false,
   		current:0

    }
  },
methods:{
  	loadMore(){
  		console.log('到底了');
  		this.current++;

  		 axios({
          url: 'lct?api_version=2.3.0&platType=2&client=wap&isEncry=0&time=1543029602346&act=goods&op=goodsRecom_new',
          method: 'post',
          data: {
              page: this.current
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
        
        this.dataelc6 = [...this.dataelc6,...res.data.datas.list];
        console.log(this.current);
        
      }) 
  	}
  },
beforeMount(){
    console.log('挂载之前');
    this.$store.commit("isShowfoot",true)
    console.log(this.$store.state.isShowfoot)
  },



  mounted(){
  	Indicator.open({
	  text: '加载中...',
	  spinnerType: 'snake'
	});



  	axios.get("lct?api_version=2.3.0&platType=2&client=wap&isEncry=0&time=1542863520124&act=index&op=index&key=7e7d04d349f9f724d45395cb52ab66c2").then(res=>{
  /*-------------------------------------------------------------------------------------------*/		
  		this.datamain = res.data.datas;
  		this.datalist = res.data.datas.platform.list;
  		this.adv_img = this.datamain.adv[0].adv_image;
  		this.lelist = res.data.datas.le6ji.recommend_goods;
  		this.dataswiper4 = res.data.datas.feature.recommend_goods;
  		this.dataword = res.data.datas.category;
  		this.dataelc = res.data.datas.category_goods[0].goods_list;
  		this.dataelc2 = res.data.datas.category_goods[1].goods_list;
  		this.dataelc3 = res.data.datas.category_goods[2].goods_list;
  		this.dataelc4 = res.data.datas.category_goods[3].goods_list;
  		this.dataelc5 = res.data.datas.category_goods[4].goods_list;
  		
  		

/*--------------------------------------------------------------------------------------*/
  		this.advlist = res.data.datas.adv;



  		this.$nextTick(()=>{
  			new Swiper ('.swiper-container', {
			  })        
		})
		
		  	}).catch(error=>{
		  		console.log(error);
		  	})
		  	Promise.all([axios.get("lct?api_version=2.3.0&platType=2&client=wap&isEncry=0&time=1542863520124&act=index&op=index&key=7e7d04d349f9f724d45395cb52ab66c2"),
		  		axios.get("lct?api_version=2.3.0&platType=2&client=wap&isEncry=0&time=1542863520124&act=index&op=index&key=7e7d04d349f9f724d45395cb52ab66c2")]).then(res=>{
		  		Indicator.close();
		  	})
		/*axios.get('lct?api_version=2.3.0&platType=2&client=wap&isEncry=0&time=1543029602346&act=goods&op=goodsRecom_new').then(res=>{
				this.dataelc6 = res.data.datas.list;
  		
  				console.log('1111111',this.dataelc6);
		}).catch(error=>{
			console.log(error);
		})*/





		  }

		}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
#main{
	
	background-color: #efefef;
		.wrap{
			width:100%;
			height:205px;
			border-bottom: 1px solid #faf3f3;
			.conthd{
				background-color: #f71433;
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
						background: url(../assets/search.jpg) no-repeat;
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
		height:100px;
		.swiper_2{

			width:500px;
			.ul1{
				width:450px;
				height:75px;
				margin-left:16px;
				margin-top:14px;			
				margin-bottom: 10px;
				text-align: center;
				// background-color:blue;
				.li1{	
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
		border-bottom:1px solid #f6f7f5;
		position: relative;
		.triangle{
			width:20px;
			height:20px;
			position: absolute;
			bottom:-5px;
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

	.swiper3{
		height:170px;
		.swiper_3{

			width:642px;
			.ul2{
				height:75px;
				text-align: center;
				// background-color:blue;
				.li2{	
					float: left;
					width:107px;
					height:170px;
					
					.img_3{
						width:96px;
						height:96px;
						vertical-align: middle;
						display: block;
						margin:10px auto 5px auto;
					}
					.s3_name{
						width:87px;
						height:33px;
						font-size:12px;
						overflow: hidden;
						display: block;
						margin:0 10px;
						text-overflow: ellipsis; 
					}
					.span3{
						font-size: 12px;
					    color: rgb(242,48,48);
					    display: block;
					    width: 100%;
					    text-align: center;
					    padding-top: 2.5px;
					    padding-bottom: 5px;

					}

				}

				.li2-1{
					float: left;
					width:107px;
					height:170px;
					.img3-1{
						width:100%;
					}
				}
			}
		}
	}
	.special{
		width: 375px;
		height: 25px;

		.img4{
			margin:10px auto 0 auto;
			width:119px;
			height: 15px;
			display: block;

		}
	}

	.triangle_bg2{
		width:100%;
		border-bottom:1px solid #f6f7f5;
		position: relative;
		.triangle{
			width:20px;
			height:20px;
			position: absolute;
			bottom:-5px;
			left:50%;
			display: block;
			margin-left:-20px;

		}
		.tri_a2{

			width:100%;
			height:100px;
			display: block;
			.tri_img2{
				height:100px;
				vertical-align: middle;
			}
		}
		
	}

	.swiper4{
		height:170px;
		.swiper_4{

			width:642px;
			.ul3{
				height:75px;
				text-align: center;
				// background-color:blue;
				.li3{	
					float: left;
					width:107px;
					height:170px;
					
					.img_4{
						width:96px;
						height:96px;
						vertical-align: middle;
						display: block;
						margin:10px auto 5px auto;
					}
					.s4_name{
						width:87px;
						height:33px;
						font-size:12px;
						overflow: hidden;
						display: block;
						margin:0 10px;
						text-overflow: ellipsis; 
					}
					.span4{
						font-size: 12px;
					    color: rgb(242,48,48);
					    display: block;
					    width: 100%;
					    text-align: center;
					    padding-top: 2.5px;
					    padding-bottom: 5px;

					}
				}
				.li3-1{
					float: left;
					width:107px;
					height:170px;
					.img4-1{
						width:100%;
					}
				}
			}
		}
	}

	.swiper5{
		margin-top:20px;
		width:100%;
		height:47px;
		.swiper_5{

			.ul4{
				display: flex;
				text-align: center;
				// background-color:blue;
				.li4{
					flex:1;
					height:23px;
					margin: 12px auto;
					width:75px;
					i{
						float: left;
					}
					.s5_name{
						width:75px;
						float: left;
						font-size:14px;
						display: block;
						text-align: center;
						padding-right:5px;
						overflow: hidden;
						text-decoration: none;
						outline: none;
						color:#252525;
						line-height:23px;
					}
				}
			}
		}
	}

	.electrical{
		.el_line{
			    width: 100%;
			    overflow: hidden;
			    height: 35px;
			    line-height: 35px;
			    display: block;
		        text-decoration: none;
			    color: #252525;
			    outline: none;
		      
			.icon_l{
			    width: 3px;
			    height: 13px;
			    background: #ff4e67;
			    float: left;
			    margin-top: 10px;
			    margin-right: 10px;
			}
			.fl{
			    font-size: 12px;
			    color: #333;
			    line-height: 35px;
			    float: left;
			}
			.icon_more{
			    background: url(../assets/youjiantou.jpg) no-repeat;
			    width: 12px;
			    height: 12px;
			    background-size: contain;
			    float: right;
			    margin-top: 11px;
			    margin-right: 10px;
			    margin-left: 10px;
			}
			.fr{
			    font-size: 12px;
			    color: #999;
			    line-height: 35px;
		        float: right;
			}

		}
		.el_ul{
			    width: 100%;
    			overflow: hidden;
			.el_li{
			    float: left;
			    width: 50%;
			    overflow: hidden;
			    background: #fff;
			    height: 257px;
			    border-bottom: 1px solid #f0f0f0;
			    box-sizing: border-box;
			    .el_a{
			    	    text-decoration: none;
					    color: #252525;
					    outline: none;
			    	.el_img{
			    		    width: 150px;
						    display: block;
						    margin: 15px auto 20px;
			    	}
			    }
			}
			.data-list li:nth-child(odd) {
    		border-right: 1px solid #f0f0f0;
				}
			 .pd-name {
			    font-size: 13px;
			    overflow: hidden;
			    height: 36px;
			    line-height: 18px;
			    margin-left: 10px;
			    margin-right: 10px;
			}	
			.pd-flow{
				    padding-left: 10px;
				    padding-right: 10px;
				    overflow: hidden;
				    .pd-price{
				    	    margin-top: 6.5px;
						    color: rgb(242,48,48);
						    font-size: 15px;
						    float: left;
				    }
				    .pd-sold{
				    	    font-size: 11px;
						    margin-top: 6.5px;
						    color: rgb(153,153,153);
						    float: right;
				    }
			}
		}
		
	}

}

</style>
