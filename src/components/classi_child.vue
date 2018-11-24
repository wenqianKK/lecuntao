<template>
  <div >
    <ul >
    	<h1 @click= "handel()"> {{msg}}	</h1>
    	<ul>
		   	<li v-for="pro_data,index in product_list" >
		   
			<p>{{pro_data.info}}</p>
		   	</li>
	   	</ul>
	 </ul>
  </div>
</template>

<script>

export default {
  name: 'classi_child',
  data () {
    return {
      msg: 'classi_child.vue',
      // product_list:null
      array:[]
    }
  },
  methods:{
  	handel(){
  		console.log('click')
  		var array =[{info:"aaa"},{info:"bbbb"},{info:"cc"}]
  	    this.$store.commit("product_list",	array)
  	}
  	
  },
  computed:{
    // ...mapState(["name"]),
    product_list(){
    	return this.$store.state.product_list;
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
