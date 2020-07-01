import skillSearch from './components/profile/skill-search'
import skillParameter from './components/profile/skillParameter'
import portfolioImg from './components/protfolio/portfolio'
import sendMessage from "./components/profile/sendMessage";
import modal from './components/protfolio/modal/modal';
import VueAwesomeSwiper from "vue-awesome-swiper";
import 'swiper/css/swiper.css'

import Glide, { Controls, Breakpoints } from '@glidejs/glide/dist/glide.modular.esm'
// new Glide('.glide').mount({ Controls, Breakpoints });

require('./bootstrap');
window.Vue = require('vue');
Vue.use(VueAwesomeSwiper);



Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('modal', modal);




const app = new Vue({
    el: '#app',
    data:{
        msg:'Hi It is working',
        showModal: false
    },
    components:{
      skillSearch,
      skillParameter,
      portfolioImg,
      sendMessage,
    }
});
