import Vue from 'vue'
import Router from 'vue-router'

import Home from "../components/home"
import Classify from "../components/classify"
import Cart from "../components/cart"
import My from "../components/my"



Vue.use(Router)

export default new Router({
  mode:"hash",
  routes: [
    	{
    		path:"/home",
    		component:Home
    	},
    	{
    		path:"/classify",
    		component:Classify
    	},
    	{
    		path:"/cart",
    		component:Cart
    	},
    	{
    		path:"/my",
    		component:My
    	},
    	{
    		path:"*",
    		component:Home
    	}
  ]
})
