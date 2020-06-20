import skillSearch from './components/profile/skill-search'
import skillParameter from './components/profile/skillParameter'
import portfolioImg from './components/profile/portfolio'
import sendMessage from "./components/profile/sendMessage";

import Glide, { Controls, Breakpoints } from '@glidejs/glide/dist/glide.modular.esm'
// new Glide('.glide').mount({ Controls, Breakpoints });

require('./bootstrap');
window.Vue = require('vue');



Vue.component('example-component', require('./components/ExampleComponent.vue').default);




const app = new Vue({
    el: '#app',
    data:{
        msg:'Hi It is working'
    },
    components:{
      skillSearch,
      skillParameter,
      portfolioImg,
      sendMessage
    }
});
