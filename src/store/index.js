import Vue from "vue";
import Vuex from "vuex";

import axios from "axios";

Vue.use(Vuex);

const store = new Vuex.Store({
	state:{
		product_list:[]
	},
	mutations:{
		product_list(state,payload){
			state.product_list = payload;
		}
	}
})

export default store;