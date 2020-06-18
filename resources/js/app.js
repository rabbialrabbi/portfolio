import skillSearch from './components/profile/skill-search'

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
      skillSearch
    }
});
