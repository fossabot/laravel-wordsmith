window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */
import Echo from 'laravel-echo'

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    encrypted: true
});
window.Vue = require('vue');
import InstantSearch from 'vue-instantsearch';
import Gravatar from 'vue-gravatar';

Vue.use(InstantSearch);

Vue.component('search-component', require('./components/SearchComponent').default);
Vue.component('comments-component', require('./components/Comments').default);
Vue.component('comments-list-component', require('./components/Comments-List').default);
Vue.component('articles-component', require('./components/Articles.vue').default);
Vue.component('categories-component', require('./components/Categories.vue').default);
Vue.component('v-gravatar', Gravatar);

const app = new Vue({
    el: '#app',
});

//jQuery
window.$ = window.jQuery = require('jquery');
