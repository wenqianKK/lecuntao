<template>
  <div >
    <ul >
    	<h1> {{msg}}	</h1>
	   	<!-- <router-link v-for="pro_data,index in product_list" :to="wsroute_list[index]" tag="li">
	   	<router-view></router-view>	 
	   	<img :src="pro_data.cate_img" alt="">
		<p>{{pro_data.gc_name}}</p>
	   	</router-link> -->
	 </ul>
  </div>
</template>

<script>

export default {
  name: 'my',
  data () {
    return {
      msg: 'classi_child.vue'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
	ul{
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
