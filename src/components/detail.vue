<template>
  <div >
  	 <div class="hd x-dis">
	     <a href="javascript:;" class="hd_ret">
	       <em class="icon_ret iconfont icon-jianjiaohao"></em>
	     </a> 
	     <div class="hd_nav">      
	       <dl class="x-menu-tab">
	         <dd class="x-cur">
	           <a href="#good">商品</a>
	         </dd> 
	         <dd ><a href="#detail">详情</a></dd> 
	         <dd><a href="#recommend">推荐</a></dd>
	       </dl>
	     </div> 
	     <div class="hd-tap">
	       <span class="icon-tap"></span>
	     </div>
   	 </div>
   	 <div class="main" :style="styleObjmain">
   	 	<div id="good">
   	 		<div class="swiper-container">
   	 		    <div class="swiper-wrapper">
   	 		      <div class="swiper-slide" v-for="data,index in img_list" :key="data.goods_image_id">
   	 		      	<img :src="data.goods_image" alt="">
   	 		      	<div class="numImg">
   	 		      		<span>{{index+1}}/{{img_Num}}</span>
   	 		      	</div>
   	 		      </div>
   	 		    </div>
   	 		</div>
   	 		<div class="shop-shade"></div>
   	 		<div class="good_title">
   	 			<div class="title"><span>{{goods_info.goods_name}}</span></div>
   	 			<div class="erwm"><i></i><span>二维码</span></div>		
   	 		</div>
   	 		<div class="good-price">
   	 			<span class="prod-money">
   	 				<em class="icon-m">¥</em> 
   	 				{{goods_info.goods_price}}
   	 			</span> 
   	 			<span class="ori-price">{{goods_info.goods_marketprice}}</span> 
   	 		</div>
   	 		<div class="good-freight">
   	 			<span>运费：</span> 
   	 			<span>{{goods_info.fare_title}}</span>
   	 		</div>
   	 		<div class="space-line"></div>
   	 		<div class="good_spec">
   	 			<span class="spec-desc">请选择</span>
   	 			<em class="icon-spot"></em>
   	 		</div>
   	 		<div class="space-line"></div>
   	 		<div class="space-line"></div>
   	 		<div class="space-line"></div>
   	 		<div class="good_shop">
   	 			<div class="shoppic">
   	 				<img :src="store_info.store_logo">
   	 			</div>
   	 			<div class="shop-con">
   	 				<div class="shopname">{{goods_info.store_name}}</div>
   	 				 <div class="shopaddress">
   	 				 	<span>所在地:{{store_info.area_info}}</span>
   	 				 </div>
   	 			</div>
   	 		</div>
   	 		<div class="space-line"></div>
   	 	</div>
   	 	<div id="detail">
   	 		<div class="cont-pull">查看图文详情</div>
   	 		<div class="detail_img" >
   	 			<div v-html="detail_img"></div>
   	 		</div>
   	 	</div>
   	 	<div id="recommend">
			<div class="guess-recommend">为你推荐</div>
			<div class="good-recommend">
				<ul class="guess-cont">
					<li class="mr20" v-for="data in goods_recommend" :key="data.goods_id">
						<div class="guess-item-pic">
							<img :src="data.goods_image">
						</div> 
						<div class="guess-item-content">
							<span>{{data.goods_name}}</span>
						</div> 
						<div class="guess-item-price">
							<span><em>¥</em>{{data.goods_price}}</span>
						</div>
					</li>
				</ul>
			</div>
   	 		
   	 	</div>
   	 </div>
  </div>
</template>

<script>
import axios from 'axios';
import Swiper from 'swiper';
import 'swiper/dist/css/swiper.css';
export default {
  name: 'detail',
  data () {
    return {
      msg: 'msg',
      styleObjmain:{height:''},
      img_list:[],
      img_Num:0,
      goods_info:'',
      store_info:'',
      detail_img:'',
      goods_recommend:[],
    }
  }, 
  methods:{
  	mainHeight(){
  		console.log(window.innerHeight)
  		this.styleObjmain.height = window.innerHeight-102+'px'
  	},
  	changeKey(){
  		console.log(this.key);
  		this.key =Number(this.key);
  		console.log(this.key);
  	}
  },
  created(){
	　this.mainHeight();
	// this.changeKey()

  },
  beforeMount(){
      this.$store.commit("isShowfoot",false)
  },
  mounted(){
  /*--------------------请求商品信息的axios---------------------------*/
 	 axios({
            url: '/lct?api_version=2.3.0&platType=2&client=wap&isEncry=0&time=1543132061611&act=mobile_goods_detail&op=getGoodsInfo',
            method: 'post',
            data: {
                city_id: 140100000000,
                province_id: 140,
                goods_id: 121320,
                key: '825004723e890ebc224998a68eb875ea'
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
         	
         	var dataMain = res.data.datas;
         	console.log(dataMain);
         	this.img_list = dataMain.img_list;
         	this.img_Num = this.img_list.length;
          	this.goods_info = dataMain.goods_info;
           	this.$nextTick(()=>{
      			new Swiper ('.swiper-container', {

      			})        
          	})
          
        }) ;
  /*--------------------请求店铺信息的axios---------------------------*/

     axios({
     	     url: '/lct?api_version=2.3.0&platType=2&client=wap&isEncry=0&time=1543148374222&act=mobile_goods_detail&op=getDetailData',
     	     method: 'post',
     	     data: {
     	         common_id: 109593,
     	         goods_id: '121320#x-t2',
     	         key: '825004723e890ebc224998a68eb875ea',
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
     	console.log('店铺',res.data);
     	this.store_info = res.data.datas.storeInfo;
     	this.detail_img = res.data.datas.goodsDetail.goods_body.slice(0,-2)+ ' style="width:100%"/>';
     	
     	// console.log('详情图片信息',	this.detail_img)
     });

  /*--------------------请求推荐商品的axios---------------------------*/
  	axios({
     	     url: '/lct?api_version=2.3.0&platType=2&client=wap&isEncry=0&time=1543148374222&act=mobile_goods_detail&op=getRecommentDetail',
     	     method: 'post',
     	     data: {
     	        
     	         gc_id: 1110,
     	         province_id: 140,
     	         city_id: 140100000000,
     	         key: '825004723e890ebc224998a68eb875ea'
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
     	console.log('推荐商品',res.data);
     	 this.goods_recommend = res.data.datas.recommendGoods;

     });

  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

 .hd{
      width: 100%;
      overflow: hidden;
      box-sizing: border-box;
      // padding: 0 16px;
      // height: 200px;
      left: 0;
      top: 0;
      z-index: 5;
      background: rgba(0,0,0,0.01);
      position: fixed;
      .hd_ret, .hd-tap {
          z-index: 1;
      }
      .hd_ret {
          height: 50px;
          width: 40px;
          position: absolute;
          left: 0px;
          top: 0px;
          .icon_ret {
             
              width: 30px;
              height: 30px;
              background-size: contain;
              position: absolute;
              left: 10px;
              top: 18px;
          }
      }
      .hd_nav {
          width: 100%;
          border-bottom: 1px solid #d8d8d8;
          background-color: #fff;
          position: relative;
          height: 50px;
         
          margin: 0 auto;
           .x-menu-tab {
              display: flex;
              display: -webkit-flex;
              height: 45px;
              flex-flow: row nowrap;
              justify-content: space-between;
              width: 70%;
              margin: 0 auto;
               dd {
                  height: 48px;
                  line-height: 45px;
                  font-size: 13px;
                  width: 120px;
                  border-bottom: 1.5px solid #fff;
                  text-align: center;
                  a{
                  	text-decoration: none;
              	    color: #252525;
              	    outline: none;
                  }

              }
              dd.x-cur {
					    border-bottom-color: #333;
			  }
          }
      }
     
}
.main{
	top:51px;position:relative;overflow-y:scroll;
	#good{
		.swiper-container{
			.swiper-slide{
				position: relative;
				.numImg{
					width: 44px;
				    height: 44px;
				    border-radius: 50%;
				    background: #F06;
				    position: absolute;
				    bottom: 13px;
				    left: 84%;
				    z-index: 5;
				    font-size: 12px;
				    line-height: 44px;
				    background: rgba(0,0,0,0.4);
				    color: #fff;
				    text-align: center;
				    font-family: "Microsoft Yahei";
					span{
					// position: absolute;
					
					}
				}
				
			}
		}
		.shop-shade {
		    width: 360px;
		    height: 1px;
		    background: #ccc;
		    opacity: 0.24;
		}
		.good_title{
			margin: 10px 9px 0px 9px;
			overflow: hidden;
			.title{
				width: 80%;
  				float: left;
  				span{
  					font-size: 15px;
  					color: #252525;
  					line-height: 1.5;
  				}
			}
			.erwm{	
					float: right;
					width: 44px;
					i{
						background: url(/static/icon_QRcode2.png) no-repeat;
					    width:20px;
					    height: 20px;
					    display: block;
					    background-size: contain;
					    margin-left: 12px;
					}
					span {
					    width: 100%;
					    display: block;
					    text-align: center;
					    font-size: 11px;
					    color: #808080;
					    margin-top: 4px;
					}
			}
		}
		.good-price{
			margin-left: 6px;
		    padding-bottom: 7px;
		    overflow: hidden;
		    .prod-money {
			    color: #ff7300;
			    font-size: 24px;
			    float: left;
			    color: #ff4b4b;
			    margin-top: 9px;
			    .icon-m {
			        margin-right: 2px;
			        font-size: 19px;
			        color: #ff4b4b;
			    }
			}
			.ori-price {
			    float: left;
			    font-size: 12px;
			    color: #808080;
			    margin-left: 6px;
			    padding-top: 20px;
			    text-decoration: line-through;
			}
		}
		.good-freight{
			color: #808080;
		    font-size: 12px;
		    padding-bottom: 10px;
		    margin-left: 9px;
		}
		.space-line{
			    width: 100%;
			    height: 0.08rem;
			    background: #f0f0f0;

		}
		.good_spec{
		    height:50px;
		    margin-left: 9px;
		    padding-right: 11px;
		    line-height: 50px;
		    font-size: 15px;
		    overflow: hidden;
		    .spec-desc {
		        margin-right: 10px;
		        float: left;
		        color: #808080;
		    }
		    .icon-spot {
		        background: url(/static/irt.png) no-repeat;
		        background-size: contain;
		        display: block;
		        width: 5px;
		        height: 7px;
		        float: right;
		        margin-top: 20px;
		    }
		}
		.good_shop{
			width: 100%;
		    overflow: hidden;
		    height: 50px;
			.shoppic {
			    float: left;
			    background: #fff;
			    margin:10px;
			    border: 1px solid #e3e3e3;
			    width: 70px;
			    height: 24px;
			    background-size: contain;
			    margin-top: 10px;
			     img {
			        width: 100%;
			    }
			}
			.shop-con {
				float: left;
				width: 66%;
				overflow: hidden;
				.shopname {
				    margin-top: 5px;
				    font-size: 13px;
				    color: #333;
				    white-space: nowrap;
				    text-overflow: ellipsis;
				    overflow: hidden;
				    width: 100%;
				}
				.shopaddress {
				    font-size:13px ;
				    color: #333;
				    width: 100%;
				    overflow: hidden;
				    white-space: nowrap;
				    text-overflow: ellipsis;
				    margin-top: 2px;
				}
			}
		}
		

	}
	#detail{
		.cont-pull {
		    width: 100%;
		    height: 63px;
		    background: #f0f0f0;
		    color: #bababa;
		    font-size: 13px;
		    line-height: 63px;
		    text-align: center;
		}
		.detail_img{
			width:100%;
			div{
				width:100%;

				img{
				width:100%;
				}
			}
			
		}

	}
	#recommend{
		.guess-recommend {
		    color: #f81234;
		    font-size: 15px;
		    width: 360px;
		    text-align: center;
		    font-weight: bold;
		    padding-top: 13px;
		}
		.good-recommend{
			.guess-cont {
			    overflow: hidden;
			    width: 100%;
			    padding-left: 2.5%;
			    box-sizing: border-box;
			    li {
			        float: left;
			        width: 30.8%;
			        margin-top: 10px;
			        margin-right: 2.5%;
					.guess-item-pic {
					    width: 100%;
					    height:100px;
					    overflow: hidden;
					    // background: url(../images/placeholde.png?lv=8182e8207a) no-repeat;
					    background-size: contain;
					    border-radius: 15px;
					    margin-bottom:6px;
					    img {
					        width: 100%;
					    }
					}
					.guess-item-content {
						span {
						    height: 34px;
						    line-height: 17px;
						    overflow: hidden;
						    font-size: 12px;
						    color: #808080;
						    display: -webkit-box;
						    -webkit-line-clamp: 2;
						    -webkit-box-orient: vertical;
						}
					}
					.guess-item-price {
					    font-size: 15px;
					    color: #333;
					   em {
					        font-size: 12px;
					        margin-right: 2px;
					    }
					}
			    }
			}
		}
	}
}

</style>
