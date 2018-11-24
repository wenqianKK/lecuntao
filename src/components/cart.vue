<template>
  <div >
    <header>
    	
    	<i class="iconfont icon-jianjiaohao"></i> 
    	<h2 class="shopping">购物车 </h2> 
    	<span flg="true" class="editor-txt">编辑全部</span>
    </header>
    <div id="main" :style="styleObjmain">
    	<div id="pro_data" >
    		<div class="shop-group" v-for="data in datalist" :key="data.store_id">
    			<div class="cart-shop-name">
    			
    					<input type="checkbox" name="goods_cart" :id="data.store_id" class="goods_cart magic-checkbox" :value="data"  :checked="isall(data)"
    					 @click="allclick(data)"> 
    					<label :for="data.store_id" class="ck_c">
    						<i :class="classArr_i(data.checked,data.store_id)"></i>
    					</label> 
    					<!-- 店铺名称 -->
    					<span>{{data.store_name}}</span>
    			
    			</div>
    			<ul class="cart-litem-list">
    				<li class="allGoodsList swp_left" v-for="dataG in data.goods" :key="dataG.good_id" >
    					<div class="all_goods items-wl">


    						<input type="checkbox" name="edit-inp" :id="dataG.good_id" class="edit-inp magic-checkbox" @click = "dataG.isChecked=!dataG.isChecked" v-model="data.checkgroup" :value="dataG" :checked = "dataG.isChecked"> 
    						<label :for="dataG.good_id" class="ck_c">
    							<i :class="classArr_i(dataG.isChecked,dataG.good_id)"></i>
    							
    										
    						</label> 
    						<a href="javascript:;" class="it-img">
    							<!-- 商品图片 -->
    							<img :src="dataG.good_img">
    						</a> 
    						<div class="it-cart-product">
    							<a href="javascript:;">
    								<!-- 商品名称 -->
    								<span class="sitem-txt">{{dataG.good_name}}</span> 
    								<div class="sitem-msg" v-for="dataP in dataG.good_spec">
    									<span>
    										<span>{{dataG.sp_name}}</span> 
    										<span>{{dataG.sp_value_name}}</span>
    									</span>
    		
    								</div>
    							</a> 
    							<div class="sitem-b">
    								<a class="stiem-p">
    									<span class="original-price">
    										<i>¥</i> 
    										<span>{{dataG.good_Yprice}}</span>
    									</span> 
    									<span class="current-price">
    										<i>¥</i> 
    										<span>{{dataG.good_price}}</span>
    									</span></a> 
    									<div class="quantity-wrapper">
    										<a href="javascript:;" class="quantity-decrease1" @click="dataG.good_num<=1?1:dataG.good_num--">
    											<em class="reduce1"></em>
    										</a> 
    										<input type="tel" id="2637216" data-max="" class="quantity 2637216" :value="dataG.good_num"> 
    										<a href="javascript:;" class="quantity-decrease2" @click="dataG.good_num++">
    											<em class="plus"></em>
    										</a>
    									</div>
    								</div>
    							</div>
    						</div> 
    						
    					</li> 
    				</ul>
    		</div>
    		
    		<!--height:{{height}}+'px'  -->
    	</div>
    </div>
   
    
    <div class="pro_calculate">
    	<div class="set-lwp">
    		<div class="set-sel">
    			<input type="checkbox" name="total-inp" id="ck_c6" class="total-inp magic-checkbox" @click="clickAll()" :checked="IsAll()"> 
    			<label for="ck_c6" class="ck_c">
    				<i :class="classArr_i(CheckAll)"></i>
    				<span>全选</span>	
    			</label>  		
    		</div> 
    		<div class="set-price">
    			<div class="price-total">
	    			<span class="total-txt">合计:</span> 
	    			<span class="price-r">
	    				<i>¥</i> 
	    				<span id="cart_total_count">{{allnum}}</span>
	    			</span>
    			</div> 
    			<div class="set-freight">不含运费</div>
    		</div>
   		</div> 
	    <div class="set-rwp">
	    	<a href="javascript:;" class="btn-sub">去结算
	            <span id="sumGoodsNum">(0)</span>
	        </a> 
	        <!-- <input type="hidden" id="cart_ids" value="">  -->
	        <!-- <a href="javascript:;" class="btn-del">删除</a>                 -->
	    </div>
	</div>
               
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: 'cart',
  data () {
    return {
      msg: '购物车',
      styleObjmain:{height:''},
      CheckAll:false,

      datalist:[
	      {	
	      	id:1,
	      	cart_id:1,
	      	store_name:'会淘部落',
	      	store_id:1,
	      	checked:false,
	      	checkgroup:[],
	      
	      	goods:[
			      { good_id:11,
			      	good_name:'【秒杀】男士冬季修身圆领针织衫羊毛衫 中灰 115',
			      	good_img:'/static/yi.jpg',
			      	good_num:7,
			      	good_price:'39.90',
			      	good_Yprice:'99.9',
			      	good_spec:[{sp_name: "颜色", sp_value_name: "中灰"},{sp_name: "尺码", sp_value_name: "115"}],
			      	isChecked:false
			      	},/*第一件商品*/
			      	{
			      		good_id:12,
			      		good_name:'徐紫瑞在2018年6月11号9点54分钟测试修改库存要不要审核 红色 中',
			      		good_img:'/static/yi2.jpg',
			      		good_num:1,
			      		good_price:'90',
			      		good_Yprice:'9',
			      		good_spec:[{sp_name: "颜色", sp_value_name: "红色"},{sp_name: "尺码", sp_value_name: "中"}],
			      		isChecked:false,
			      	}/*第二件商品*/
			],

	      },/*第一家店铺里的商品*/
        {	
        	id:2,
        	cart_id:1,
        	store_name:'嘻哈店铺',
        	store_id:2,
        	checked:false,
        	checkgroup:[],

        	goods:[
  		      { good_id:21,
  		      	good_name:'【秒杀】男士冬季修身圆领针织衫羊毛衫 中灰 115',
  		      	good_img:'/static/yi.jpg',
  		      	good_num:7,
  		      	good_price:'39.90',
  		      	good_Yprice:'99.9',
  		      	good_spec:[
  		      				{sp_name: "颜色", sp_value_name: "中灰"},
  		      			   	{sp_name: "尺码", sp_value_name: "115"}
  		      			   ],
  		      	isChecked:false,
  		      	},/*第一件商品*/
  		      	{
  		      		good_id:22,
  		      		good_name:'徐紫瑞在2018年6月11号9点54分钟测试修改库存要不要审核 红色 中',
  		      		good_img:'/static/yi2.jpg',
  		      		good_num:1,
  		      		good_price:'90',
  		      		good_Yprice:'9',
  		      		good_spec:[
  		      					{sp_name: "颜色", sp_value_name: "红色"},
  		      				   	{sp_name: "尺码", sp_value_name: "中"}
  		      				   ],
  		      		isChecked:false,
  		      	},/*第二件商品*/
  		      	{
  		      		good_id:23,
  		      		good_name:'徐紫瑞在2018年6月11号9点54分钟测试修改库存要不要审核 红色 中',
  		      		good_img:'/static/yi2.jpg',
  		      		good_num:90,
  		      		good_price:'90',
  		      		good_Yprice:'9',
  		      		good_spec:[
  		      					{sp_name: "颜色", sp_value_name: "红色"},
  		      				   	{sp_name: "尺码", sp_value_name: "中"}
  		      				   ],
  		      		isChecked:false,
  		      	}/*第三件商品*/
  		]
        },/*第二家店铺里的商品*/
	      
      ]
    }
  },
  computed:{
  		allnum(){
  			var all=0;
  			this.datalist.forEach((item) => {
  			 	console.log(item.checkgroup);
  			 	item.checkgroup.forEach((it) => {
  			 		// console.log(parseInt(it.good_price))
  			 	  all = parseInt(it.good_num)*parseInt(it.good_price) + all;
  			 	})
  			});
  			return all;
  			
  		}
  },
  created(){
　		　this.mainHeight()
  },
  mounted(){
  		axios.get('/lecuntao/getCart.php',{
  			params:{userid:1}
  		 }).then(res=>{
  		 	console.log(res);
  		 	 this.datalist = res.data;
  		 });
  		 
  },
 // axios.get('/user', {
 //     params: {
 //       ID: 12345
 //     }
 //   })
 //   .then(function (response) {
 //     console.log(response);
 //   })
 //   .catch(function (error) {
 //     console.log(error);
 //   });

 
  methods:{
  	mainHeight(){
  		console.log(window.innerHeight)
  		this.styleObjmain.height = window.innerHeight-150+'px'
  	},
  	clickChecked(arr){
  		
  		console.log(arr);

  	},
  	classArr_i(checked,id){
  	
  		if(checked){
  			// console.log(id+"的class:checked: "+checked)
  			return ["iconfont","icon-xuanzhong","color"]
  		}
  		if(!checked){
  			// console.log(id+"的class:checked: "+checked)

  			return ["iconfont","icon-weixuanzhong"]
  		}
  		

  	} , 
  	isall(data){ /*一个商铺按钮的 选中属性*/
  		if(data.checkgroup.length === data.goods.length){
  			// console.log('group.length===goods.length',true)
  			data.checked = true
  			return true;
  		}else{
  			// console.log('group.length===goods.length',false)
  			data.checked = false
  			return false;
  		}
  		// return data.checkgroup.length === data.goods.length?'true':'false';
  	},
  	
  	allclick(data){/*一个商铺的全选 的点击事件*/
  		data.checked = !data.checked;
  		// console.log(data.checked)
  		data.checkgroup = data.checkgroup.length === data.goods.length?[]:data.goods;
  		data.goods.forEach((item) => {item.isChecked=data.checked;})
  		// console.log(data.checkgroup);
  	},
  	// oneclick(dataG,data){
  	// 	dataG.isChecked = !dataG.isChecked;
  	// 	data.checked = data.checkgroup.length === data.goods.length?'true':'false';
  	// 	console.log('data.checked',data.checked)
  	// }
  	
  	clickAll(){/*全部的全选  的点击事件*/
  		this.CheckAll = !this.CheckAll
  		this.datalist.forEach((item) => {
  		  if(item.checkgroup.length === item.goods.length){
  		  	item.checkgroup =[];
  		  }else{
  		  	item.checkgroup=item.goods;
  		  }
  		  item.goods.forEach((it) => {
  		    	it.isChecked = this.CheckAll;
  		  });
  		})
  		
  	},
  	IsAll(){/*全部的全选 按钮的 选中属性*/
  		var all=true;
  		this.datalist.forEach((item) =>{
  			
  			 if(item.checkgroup.length === item.goods.length){
  			 		
  			 }else{
  			 	all =false;
  			 }
  			
  			//  
  		
  		})
  		this.CheckAll = all;
  		return all;
  	}


  }
}
</script>


<style scoped lang="scss">
	h1, h2, h3, h4, h5, em, i {
	    font-weight: normal;
	}
	header{
		width: 100%;
	    height: 48px;
	    overflow: hidden;
	    border-bottom: 1px solid #ccc;
	    background: #fff;
	    left: 0;
	    top: 0;
	    z-index: 25;
	    position: fixed;
	    color: #4c4c4c;
	    i{
	    	width: 20px;
    	    height: 20px;
    	    float: left;
    	    margin-top: 14px;
    	    margin-left: 10px;
    	    font-size: 20px;
	   }
	    h2{
	    	float: left;
    	    padding-left: 33%;
    	    line-height: 48px;   
    	    font-size:18px;
	    }
	    span{
	    	float: right;
    	    padding-right: 10px;
    	    font-size: 17px;
    	    line-height: 48px;
	    }
	}
	#main{top:48px;bottom:98px;position:absolute;overflow: hidden;overflow-y:scroll;
		#pro_data{
			// height: 800px;width:100%;background: red;
			
			
			.shop-group{
				margin-top: 10px;
				background: #fff;
				.cart-shop-name {
				    padding-left: 10px;
				    background: #fff;
				    overflow: hidden;
				    margin-top: 15px;
				    font-size: 14px;
					  height:40px;
					  line-height:40px;

			       label{

			       	width:30px;
			       	height:30px;
			       	margin-top: 0;
			       	i{	display: block;
			       		width:20px;
			       		height:20px;
			       		font-size: 24px;
			       	    float: left;

			       	}
			       	.color{
			       			color:red;
			       	}
			       }
			       input {
			           display: none;
			       }
			       span {
			           float: left;
			           line-height: 20px;
			           margin-left: 5px;
			           margin-top: 10px;
			       }   
				}
				ul{
					li{
						padding-left: 9px;
					    padding-right: 9px;
					    overflow: hidden;
					    background: #f7f7f7;
					    margin-top: 4px;
					    width:100%;
					    box-sizing: border-box;
					    .items-wl {
					        float: left;
					        width: 100%;
					        input.edit-inp {
					            margin-top:44px;
					            float: left;
					            display: none;
					        }
					        label{
					        	width:30px;
					        	height:30px;
					        	margin-top:44px;
					        	float: left;
					        	i{	display: block;
					        		width:20px;
					        		height:20px;
					        		font-size: 24px;
					        	    float: left;

					        	}
					        	.color{
					        			color:red;
					        	}
					        }
					        .it-img {
					            width: 24%;
					            float: left;
					            margin: 4px;
					            margin-top:10px;
					            img {
					            	width: 100%;
					                border: 0;
					                vertical-align: middle;
					            }
					        }
					        .it-cart-product {
					            float: left;
					            padding-top: 10px;
					            width: 65%;
					            padding-bottom: 10px;
					            a {
					                text-decoration: none;
					                color: #252525;
					                outline: none;
					                .sitem-txt {
					                    color: #333;
					                    font-size: 15px;
					                    width: 100%;
					                    -webkit-line-clamp: 2;
					                    -webkit-box-orient: vertical;
					                    overflow: hidden;
					                    display: -webkit-box;
					                    height:36px;
					                    line-height: 18px;
					                }
					                .sitem-msg {
					                    color: #999;
					                    font-size:9px;
					                    width: 100%;
					                    overflow: hidden;
					                    text-overflow: ellipsis;
					                    white-space: nowrap;
					                }
					            }
					            .sitem-b {
					                width: 100%;
					                overflow: hidden;
					                .stiem-p {
					                    float: left;
					                    width: 40%;
					                    .original-price {
					                        display: block;
					                        font-size:12px;
					                        color: #808080;
					                        text-decoration: line-through;
					                    }
					                    .current-price {
					                        display: block;
					                        font-size: 0.3rem;
					                        color: #f81234;
					                    }
					                }
					                .quantity-wrapper {
					                    width: 53%;
					                    height: 30px;
					                    // background: #f0f0f0;
					                    border-radius:4px;
					                    float: right;
					                    margin-top: 5px;
					                    .quantity-decrease1, .quantity-decrease2 {
					                        display: block;
					                        float: left;
					                        width: 31px;
					                        height: 100%;
					                        border-radius: 0.15px 0 0 0.15px;
					                        position: relative;
					                    }
					                    .quantity-decrease1 {
					                        border-right: 1px solid #fff;
					                        background: #f7f7f7;
					                        em{background: url(../assets/reduce1.png) no-repeat;
					                        	width: 11px;
				                        	    height: 2px;
				                        	    background-size: 100%;
				                        	    display: block;
				                        	    position: absolute;
				                        	    left: 50%;
				                        	    top: 50%;
				                        	    margin-top: -1px;
				                        	    margin-left: -5.5px;
					                        	z-index: 10;
					                        }
					                    }
					                    .quantity {
					                        float: left;
					                        width: 39px;
					                        border: none;
					                        line-height: 30px;
					                        text-align: center;
					                        background: #f0f0f0;
					                        font-size:13px;
					                        color: #333;
					                    }
					                    .quantity-decrease2 {
					                        border-left: 1px solid #fff;
					                        em{
					                        	background: url(../assets/add.png) no-repeat;
				                        	    width: 11px;
				                        	    height:11px;
				                        	    background-size: 100%;
				                        	    display: block;
				                        	    position: absolute;
				                        	    left: 50%;
				                        	    top: 50%;
				                        	    margin-top: -5.5px;
				                        	    margin-left: -5.5px;
					                        }
					                    }
					                }
					            }
					        }
					    }
					}
				}
			}
		
		}
	}
	 .ck_c {
            width: 80px;
            height: 24px;
            cursor: pointer;
            position: relative;
            display: inline-block;
            margin-top: 13px;
			float: left;
		}
	.pro_calculate{
		height: 48px;
	    border-top: 1px solid #ccc;
	    position: fixed;
	    left: 0;
	    bottom: 50px;
	    background: #fff;
	    z-index: 10;
	    width: 100%;
	    .set-lwp {
	        float: left;
	        height: 100%;
	        width: 65%;
	        padding-left: 9px;
	        .set-sel {
	            float: left;
	            input {
	                float: left;
	                margin-top: 18px;
	                display:none;
	               }  
	        
	            label {
   					i{
   						width:20px;
   						height:20px;
   						font-size: 24px;
   					    float: left;

   					}
   					.color{color:red;}
   					span {
   					    font-size: 15px;
   					    color: #333;
   					    line-height: 26px;
   					    padding-left: 10px;
   					    float: left;
   					}

	          	}
	        }
	        .set-price {
	            float: right;
	            .price-total {
	                margin-top: 8px;
	                font-size: 15px;
	                .total-txt {
	                    color: #333;
	                }
	                .price-r {
	                    color: #f81234;
	                    i{ font-style: normal}
	                }
	            }
	            .set-freight {
	                float: right;
	                color: #999;
	                font-size: 15px;
	            }
	        }
	    }
	    .set-rwp {
	        float: right;
	        width: 29%;
	        .btn-sub {
	            width: 100%;
	            height: 48px;
	            text-align: center;
	            line-height: 48px;
	            background: #fb0a84;
	            color: #fff;
	            font-size: 14px;
	            display: block;
	        }
	        a {
	            text-decoration: none;
	            color: #252525;
	            outline: none;
	        }
	    }
	}

</style>
