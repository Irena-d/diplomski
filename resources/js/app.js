/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { default: axios } = require('axios');

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

//ue.component('chat-messages', require('./components/ChatMessages.vue'));
//Vue.component('chat-form', require('./components/ChatForm.vue'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',

//     data: {
//         messages: []
//     },

//     created() {
//         this.fetchMessages();
//         Echo.private('chat')
//             .listen('MessageSent', (e) => {
//                 this.messages.push({
//                 message: e.message.message,
//                 user: e.user
//                 });
//             });
//     },

//     methods: {
//         fetchMessages() {
//             axios.get('/messages').then(response => {
//                 this.messages = response.data;
//             });
//         },

//         addMessage(message) {
//             this.messages.push(message);

//             axios.post('/messages', message).then(response => {
//               console.log(response.data);
//             });
//         }
//     }
// });


const message_el = document.getElementById("messages");
const username_input = document.getElementById("username");
const message_input = document.getElementById("message_input");
const message_form = document.getElementById("message_form");

console.log("ovo je poruka");

message_form.addEventListener('submit', function(e) {
    e.preventDefault();

    let has_errors = false;

    if(username_input.value == '') {
        alert("Enter username");
        has_errors = true;
    }

    if(message_input.value == '') {
        alert("Enter message");
        has_errors = true;
    }

    if(has_errors) {
        return;
    }

    const options = {
        method: 'post',
        url: '/send-message',
        data: {
            username: username_input.value,
            message: message_input.value
        }
    }

    axios(options);
    
});

window.Echo.channel('chat')
        .listen('.message', (e) => {
            console.log("aaaaaaaaaaaaaaaaaaaaa");
        });
