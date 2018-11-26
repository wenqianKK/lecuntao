<template>
  <div class="wrap">
  	<div class="per" style="height: 616px;">
   		<div class="per-t">
            <img class="per-timg" src="../assets/bg_gerenzhongxinbeijing.png">
           
            <a href="#" class="per-hd" >
                <img src="https://s0.lecuntao.com/mobile_2.3.0/resource/images/member_avatar_2x.png" id="member_avatar" class="per_nem_img">
                <span class="per-hd-tel">lct_18643906390</span>
            </a>
            <a href="/tpl/refund/setup.html" class="icon_sz"></a>
        </div>
    <!--  ---------我的订单------------ -->
        <div class="total-order-w">
            <a href="javascript:;">
                <span class="my-order">我的订单</span>
                <i class="icon-r"></i>
                <span class="see-order">查看全部订单</span>
            </a>
    	</div>
    <!--  ---------发货信息------------ -->	
    <ul class="per-status">
        <li>
            <a href="/tpl/member/order.html?order_list_type=1">
                <div class="icon-wrap">
                    <i class="icon-dfk"></i>
                    <i class="ic-num" id="wait_pay">0</i>
                </div>
                <span>待付款</span>
            </a>
        </li> 
        <li>
            <a href="/tpl/member/order.html?order_list_type=2">
                <div class="icon-wrap">
                    <i class="icon-dfh"></i>
                    <i class="ic-num" id="wait_send">0</i>
                </div>

                <span>待发货</span>
            </a>
        </li>
        <li>
            <a href="/tpl/member/order.html?order_list_type=3">
                <div class="icon-wrap">
                    <i class="icon-dsf"></i>
                    <i class="ic-num" id="wait_collect">0</i>
                </div>
                <span>待收货</span>
            </a>
        </li>
        <li>
            <a href="/tpl/member/refund_list.html">
                <div class="icon-wrap">
                    <i class="icon-th"></i>
                    <i class="ic-num" id="wait_return">0</i>
                </div>
                <span>退款退货</span>
            </a>
        </li>
    </ul>
    <!--  ---------我的集单------------ -->
    <a href="javascript:;" class="take-delivery">
		<div class="pad">
			<span class="per-l">
				<i class="icon-collect"></i>
				<span class="txt-l">我的集单</span>
			</span>
		  	<span class="per-r">
				<i class="icon-right"></i>
			</span>

		</div>
    </a>
    <!--  ---------收货地址------------ -->
    <div class=" pad per-line">
		<a href="javascript:;">
			<span class="per-l">
				<i class="icon-loc"></i>
				<span class="txt-l">收货地址</span>
			</span>
			<span class="per-r">
				<span class="txt-r">管理地址信息</span>
				<i class="icon-right"></i>
			</span>
		</a>
    </div>
    <!--  ---------卡卷包------------ -->
    <a href="javascript:;" class="take-delivery2">
		<div class="pad">
			<span class="per-l">
				<i class="icon-kj"></i>
				<span class="txt-l">卡劵包</span>
			</span>
			<span class="per-r">
				<span class="txt-r">红包</span>
				<i class="icon-right"></i>
			</span>
		</div>
    </a>
    <div class="per-pri take-delivery">
		<a href="javascript:;" class="per-line pad">
			<span class="per-l">
				<i class="icon-pri"></i>
				<span class="txt-l">账户余额</span>
			</span>
			<span class="per-r">
				<span class="txt-r"><!--去充值--></span>
				<i class="icon-right"></i>
			</span>
		</a>
		<a href="javascript:;" class="pad">
			<span class="per-l">
				<i class="icon-payment"></i>
				<span class="txt-l">支付密码</span>
			</span>
			<span class="per-r">
				<span class="txt-r">设置、管理支付密码</span>
				<i class="icon-right"></i>
			</span>
		</a>
    </div>
    <!--  ---------联系电话------------ -->
    <div class="per-bot">
		<a href="javascript:;" class="per-line pad" id="per-tel">
			<span class="per-l">
				<i class="icon-tel"></i>
				<span class="txt-l">联系电话</span>
			</span>
			<span class="per-r">
				<span class="txt-r">400-088-0692</span>
				<i class="icon-right"></i>
			</span>
		</a>
		<a href="javascript:;" class="per-line pad">
			<span class="per-l">
				<i class="icon-feedback"></i>
				<span class="txt-l">意见反馈</span>
			</span>
		</a>
    </div>
 <!--  ---------客户端------------ -->
    <div class="ft-platforms">
		<ul class="ft-plat-w">
			<li>
				<a href="javascript:;" class="button-khd">
					<span>
						<img src="../assets/img_kehuduan.png">
					</span>
				    <span class="plat-txt">客户端</span>
				</a>
			</li>
			<li>
				<a href="javascript:;" id="local_pc">
					<span>
						<img src="../assets/img_diannaoban.png">
					</span>
				    <span class="plat-txt">电脑版</span>
				</a>
			</li>
			<li>
				<a href="javascript:;" id="local_home">
					<span>
						<img src="../assets/img_guanwang.png">
					</span>
				    <span class="plat-txt">乐村淘官网</span>
				</a>
			</li>
		</ul>
	</div>    

	</div>
  </div>
</template>

<script>
export default {
  name: 'my',
  data () {
    return {
      
    }
  },
  beforeMount(){
    this.$store.commit("isShowfoot",true)
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
	.wrap{
		.per{
			.pad {
			    padding: 10px 9px;
			    overflow: hidden;
			    background: #fff;
			}
			.take-delivery{
			    margin-top: 10px;
			    border-bottom: 1px solid #ccc;
			    display: block;
			}
			.per-pri a, .per-bot a {
			    display: block;
			}
		    .per-line {
				border-bottom: 1px solid #ccc;
			}
			background-color: #efefef;
			.per-t{
				    width: 100%;
				    overflow: hidden;
				    height: 200px;
				    position: relative;
				.per-timg{
					    width: 100%;
					    position: absolute;
					    left: 0;
					    top: 0;
					    height: 200px;
				        vertical-align: middle;
				}
				.per-hd{
					    display: block;
					    width: 100%;
					    height: 100%;
				        text-decoration: none;
					    color: #252525;
					    outline: none;
					.per_nem_img{
						    background: url(../assets/member_avatar_2x.png) no-repeat;
						    width: 77px;
						    height: 77px;
						    display: block;
						    position: absolute;
						    left: 50%;
						    margin-left: -38.5px;
						    margin-top: 48px;
						    border-radius: 50%;
						    background-size: contain;
						    border: none;
					}
					.per-hd-tel{
						    width: 100px;
						    text-align: center;
						    display: block;
						    position: absolute;
						    left: 50%;
						    margin-left: -50px;
						    margin-top: 136px;
						    color: #fff;
						    font-size: 15px;

					}
				}
				.icon_sz{
					    background: url(../assets/icon_sz.jpg) no-repeat;
					    width: 18px;
					    height: 17px;
					    background-size: contain;
					    display: block;
					    position: absolute;
					    right: 20px;
					    top: 20px;
				        text-decoration: none;
					    color: #252525;
					    outline: none;

				}
			}
		

			.total-order-w{
				    width: 100%;
				    height: 50px;
				    border-bottom: 1px solid #ccc;
				    overflow: hidden;
				    font-size: 15px;
				    background: #fff;
				a{    
					.my-order{
						    padding-left: 9px;
						    color: #333;
						    line-height: 50px;
						    float: left;
					}
					.icon-r{
							    background: url(../assets/icon_wodedingdanjiantou.png?lv=91168a2962) no-repeat;
							    width: 11px;
							    height: 11px;
							    float: right;
							    background-size: contain;
							    margin-top: 20px;
							    padding-left: 9px;
					}
					.see-order{
								    float: right;
								    color: #b2b2b2;
								    line-height: 50px;
								    margin-right: 10px;
					}
				}
			}

			.per-status{
				    width: 100%;
				    overflow: hidden;
				    background: #fff;
				li{
					    width: 25%;
					    float: left;
					    padding-top: 15px;
					    text-align: center;
					    padding-bottom: 10px;
					    a{
					    	    text-decoration: none;
							    color: #252525;
							    outline: none;
					    }
					    span {
						    font-size: 15px;
						    color: #333;
						    text-align: center;
						    display: block;
						    margin-top: 3px;
						}
				}
				li:first-of-type{
					a{
						.icon-wrap {
						    margin-left: 32px;
						    width: 100%;
						    position: relative;
							
							.icon-dfk {
							    background: url(../assets/icon_gerenzhongixndaifukuan.png) no-repeat;
							    width: 26px;
							    height: 26px;
							    display: block;
							    background-size: contain;
							}
							.ic-num {
							    padding: 2px 5px;
							    border-radius: 28%;
							    border: 1px solid #ccc;
							    background: #f81234;
							    position: absolute;
							    left: 16px;
							    top: -10px;
							    font-size: 12px;
							    display: block;
							    color: #fff;
							}
						}
					}
				}
				li:nth-of-type(2){
					a{
						.icon-wrap {
						    margin-left: 32px;
						    width: 100%;
						    position: relative;
							
							.icon-dfh {
							    background: url(../assets/icon_gerenzhongxindaihouhuo.png) no-repeat;
							    width: 26px;
							    height: 26px;
							    display: block;
							    background-size: contain;
							}
							.ic-num {
							    padding: 2px 5px;
							    border-radius: 28%;
							    border: 1px solid #ccc;
							    background: #f81234;
							    position: absolute;
							    left: 16px;
							    top: -10px;
							    font-size: 12px;
							    display: block;
							    color: #fff;
							}
						}
					}
				}
				li:nth-of-type(3){
					a{
						.icon-wrap {
						    margin-left: 32px;
						    width: 100%;
						    position: relative;
							
							.icon-dsf {
							    background: url(../assets/icon_gerenzhongxindaishouhuo.png) no-repeat;
							    width: 26px;
							    height: 26px;
							    display: block;
							    background-size: contain;
							}
							.ic-num {
							    padding: 2px 5px;
							    border-radius: 28%;
							    border: 1px solid #ccc;
							    background: #f81234;
							    position: absolute;
							    left: 16px;
							    top: -10px;
							    font-size: 12px;
							    display: block;
							    color: #fff;
							}
						}
					}
				}
				li:last-of-type{
					a{
						.icon-wrap {
						    margin-left: 32px;
						    width: 100%;
						    position: relative;
							
							.icon-th {
							    background: url(../assets/icon_gerenzhongxindaishouhuo.png) no-repeat;
							    width: 26px;
							    height: 26px;
							    display: block;
							    background-size: contain;
							}
							.ic-num {
							    padding: 2px 5px;
							    border-radius: 28%;
							    border: 1px solid #ccc;
							    background: #f81234;
							    position: absolute;
							    left: 16px;
							    top: -10px;
							    font-size: 12px;
							    display: block;
							    color: #fff;
							}
						}
					}
				}
			}

					.per-l{
						    float: left;
						.icon-collect{
								background: url(../assets/icon_gerenzhongxin_jidan.png) no-repeat;
							    width: 16px;
							    height: 16px;
							    background-size: contain;
							    display: block;
							    float: left;
							    margin-right: 10px;
							    margin-top: 7px;	
						}
						.txt-l{
							    font-size: 15px;
							    color: #333;
							    line-height: 30px;
							    float: left;

						}
					}
					.per-r{
						float: right;
						.icon-right{
							    background: url(../assets/icon_wodedingdanjiantou.png?lv=91168a2962) no-repeat;
							    width: 11px;
							    height: 11px;
							    background-size: contain;
							    display: block;
							    float: left;
							    margin-left: 10px;
							    margin-top: 9px;

						}
					}
			.per-line {
			    border-bottom: 1px solid #ccc;
			    a{
			    	.per-l{
						    float: left;
						.icon-loc{
								background: url(../assets/icon_gerenzhongxinshouhuodizhi.png) no-repeat;
							    width: 16px;
							    height: 16px;
							    background-size: contain;
							    display: block;
							    float: left;
							    margin-right: 10px;
							    margin-top: 7px;	
						}
						.txt-l{
							    font-size: 15px;
							    color: #333;
							    line-height: 30px;
							    float: left;

						}
					}
					.per-r{
						float: right;
						.txt-r{
							font-size: 15px;
						    color: #b2b2b2;
						    line-height: 30px;
						    float: left;
						}
						.icon-right{
							    background: url(../assets/icon_wodedingdanjiantou.png?lv=91168a2962) no-repeat;
							    width: 11px;
							    height: 11px;
							    background-size: contain;
							    display: block;
							    float: left;
							    margin-left: 10px;
							    margin-top: 9px;

						}
					}
			    }
			}
			.take-delivery2{
			    display: block;
				.per-l{
					    float: left;
					.icon-kj{
							background: url(../assets/icon_gerenzhongxin_kaquanbao.png) no-repeat;
						    width: 16px;
						    height: 16px;
						    background-size: contain;
						    display: block;
						    float: left;
						    margin-right: 10px;
						    margin-top: 7px;	
					}
					.txt-l{
						    font-size: 15px;
						    color: #333;
						    line-height: 30px;
						    float: left;

					}
				}
				.per-r{
					float: right;
					.txt-r{
						font-size: 15px;
					    color: #b2b2b2;
					    line-height: 30px;
					    float: left;
					}
					.icon-right{
						    background: url(../assets/icon_wodedingdanjiantou.png?lv=91168a2962) no-repeat;
						    width: 11px;
						    height: 11px;
						    background-size: contain;
						    display: block;
						    float: left;
						    margin-left: 10px;
						    margin-top: 9px;

					}
				}
			}
			.per-pri{
				    background: #fff;
				    width: 100%;
				    overflow: hidden;
				    .per-l{
						    float: left;
						.icon-pri{
								background: url(../assets/icon_gerenzhongxinzhanghuyue.png) no-repeat;
							    width: 16px;
							    height: 16px;
							    background-size: contain;
							    display: block;
							    float: left;
							    margin-right: 10px;
							    margin-top: 7px;	
						}
						.txt-l{
							    font-size: 15px;
							    color: #333;
							    line-height: 30px;
							    float: left;

						}
					}
					.per-r{
						float: right;
						.txt-r{
							font-size: 15px;
						    color: #b2b2b2;
						    line-height: 30px;
						    float: left;
						}
						.icon-right{
							    background: url(../assets/icon_wodedingdanjiantou.png?lv=91168a2962) no-repeat;
							    width: 11px;
							    height: 11px;
							    background-size: contain;
							    display: block;
							    float: left;
							    margin-left: 10px;
							    margin-top: 9px;

						}
					}
				a{
					.per-l{
						    float: left;
						.icon-payment{
								background: url(../assets/icon_gerenzhongxinlianxidaianhua_password.png) no-repeat;
							    width: 16px;
							    height: 16px;
							    background-size: contain;
							    display: block;
							    float: left;
							    margin-right: 10px;
							    margin-top: 7px;	
						}
						.txt-l{
							    font-size: 15px;
							    color: #333;
							    line-height: 30px;
							    float: left;

						}
					}
					.per-r{
						float: right;
						.txt-r{
							font-size: 15px;
						    color: #b2b2b2;
						    line-height: 30px;
						    float: left;
						}
						.icon-right{
							    background: url(../assets/icon_wodedingdanjiantou.png?lv=91168a2962) no-repeat;
							    width: 11px;
							    height: 11px;
							    background-size: contain;
							    display: block;
							    float: left;
							    margin-left: 10px;
							    margin-top: 9px;

						}
					}
				}
			}
		.per-bot{
			    background: #fff;
			    margin-top: 10px;
			    width: 100%;
			    overflow: hidden;
			    #per-tel{
			    	.per-l{
						    float: left;
						.icon-tel{
								background: url(../assets/icon_gerenzhongxinlianxidaianhua.png) no-repeat;
							    width: 16px;
							    height: 16px;
							    background-size: contain;
							    display: block;
							    float: left;
							    margin-right: 10px;
							    margin-top: 7px;	
						}
						.txt-l{
							    font-size: 15px;
							    color: #333;
							    line-height: 30px;
							    float: left;

						}
					}
					.per-r{
						float: right;
						.txt-r{
							font-size: 15px;
						    color: #b2b2b2;
						    line-height: 30px;
						    float: left;
						}
						.icon-right{
							    background: url(../assets/icon_wodedingdanjiantou.png?lv=91168a2962) no-repeat;
							    width: 11px;
							    height: 11px;
							    background-size: contain;
							    display: block;
							    float: left;
							    margin-left: 10px;
							    margin-top: 9px;

						}
					}
			    }
			    a{
			    	.per-l{
						    float: left;
						.icon-feedback{
								background: url(../assets/icon_gerenzhongxinyjianfankui.png) no-repeat;
							    width: 16px;
							    height: 16px;
							    background-size: contain;
							    display: block;
							    float: left;
							    margin-right: 10px;
							    margin-top: 7px;	
						}
						.txt-l{
							    font-size: 15px;
							    color: #333;
							    line-height: 30px;
							    float: left;

						}
					}
					.per-r{
						float: right;
						.icon-right{
							    background: url(../assets/icon_wodedingdanjiantou.png?lv=91168a2962) no-repeat;
							    width: 11px;
							    height: 11px;
							    background-size: contain;
							    display: block;
							    float: left;
							    margin-left: 10px;
							    margin-top: 9px;

						}
					}
			    }
			}
			.ft-platforms {
			    width: 100%;
			    height: 70px;
			    background: #fff;
			    margin-bottom:50px;
			    a{
			    	text-decoration: none;
				    color: #252525;
				    outline: none;

			    }
			    .ft-plat-w {
				    width: 100%;
				    overflow: hidden;
				    background: #fff;
			        li:first-of-type {
					    width: 33.33%;
					    float: left;
					    text-align: center;
		   			    .button-khd {
						    display: block;
						    color: #252525;
						    .plat-txt {
							    display: block;
							    width: 100%;
							    text-align: center;
							    font-size: 11px;
							}
						}
					}
					li:nth-of-type(2) {
					    width: 33.33%;
					    float: left;
					    text-align: center;
					    #local_pc {
						    display: block;
						    color: #252525;
						    .plat-txt {
							    display: block;
							    width: 100%;
							    text-align: center;
							    font-size: 11px;
							}
						}
					}
					li:last-of-type {
					    width: 33.33%;
					    float: left;
					    text-align: center;
					    #local_home {
						    display: block;
						    color: #252525;
						    .plat-txt {
							    display: block;
							    width: 100%;
							    text-align: center;
							    font-size: 11px;
							}
						}
					}
				}
			}
			.ft-plat-w li a img {
				    width: 35px;
				    height: 35px;
				    margin-top: 10px;
				    border: 0;
					vertical-align: middle;
			}
		}
	}

</style>
