require('./bootstrap');


/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */


window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/*
*
* Data tables
* */
/*require( 'jszip' );
require( 'pdfmake' );
require( 'datatables.net-bs4' )();
require( 'datatables.net-autofill-bs4' )();
require( 'datatables.net-buttons-bs4' )();
require( 'datatables.net-buttons/js/buttons.colVis.js' )();
require( 'datatables.net-buttons/js/buttons.html5.js' )();
require( 'datatables.net-buttons/js/buttons.print.js' )();
require( 'datatables.net-fixedheader-bs4' )();
require( 'datatables.net-responsive-bs4' )();*/

/* v-form for vue.js */
// import Form from "vform";
//
// window.Form = Form
//
// window.Vue = require('vue');
//
// Vue.component('create-role', require('./components/roles/CreateRole').default)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//
// const app = new Vue({
//     el: '#app',
// });
