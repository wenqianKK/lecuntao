<template>
  <div >
     <ul class="sidebar_right">
   	<router-link v-for="pro_data,index in product_list" :to="wsroute_list[index]" tag="li">
   	<img :src="pro_data.cate_img" alt="">
	<p>{{pro_data.gc_name}}</p>
   	</router-link>
   </ul>
  </div>
</template>
<script>
export default {
  name: 'home',
  data () {
    return {
      msg: '首页' 
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
  	}),
  	axios({
      url: '/lct?api_version=2.3.0&platType=2&client=wap&isEncry=0&time=1542967068207&act=mobile_cate&op=index',
      method: 'post',
      data: {
          gc_id:593,
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
	/*["256","593","1094","888","470","662","2","3","825","730","1"]*/
 }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
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

</style>
