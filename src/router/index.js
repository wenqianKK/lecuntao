import Vue from 'vue'
import Router from 'vue-router'

import Home from "../components/home"
import Classify from "../components/classify"
import Classi from "../components/classi"

import Cart from "../components/cart"
import My from "../components/my"

import Dianqi from "../components/dianqi"
import Search from "../components/search"
import Le6 from "../components/le6"
import Shipin from "../components/shipin"
import Classi_child from "../components/classi_child"


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
            path:"/classi",
            component:Classi
            // children:[
            //     {
            //         path:"dianqi",
            //         component:Dianqi
            //     },
            //     {
            //         path:"shipin",
            //         component:Shipin
            //     },
            //     {
            //         path:"search/:wsid",
            //         component:Search,
            //         children:[
            //             {
            //                 path:"le6",
            //                 component:Le6
            //             }
            //         ]
            //     }
            // ]
        },
        {
            path:"/classi_child/:ws",
            component:Classi_child,
        },
        {
            path:"/classi/:ws",
            component:Classi,
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
    	},
        {
            path:"/search",
            component:Search
        },{
            path:"/le6",
            component:Le6
        }

  ]
})
