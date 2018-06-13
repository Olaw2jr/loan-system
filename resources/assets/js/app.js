/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import SignaturePad from "signature_pad";
import "./bootstrap";

window.Vue = require("vue");

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue")
);

const app = new Vue({
    el: "#app"
});

var canvas = document.getElementById("signature-pad");
var signaturePad = new SignaturePad(canvas, {
    backgroundColor: "rgba(255, 255, 255, 0)",
    penColor: "rgb(0, 0, 0)"
});

// const data = signaturePad.toDataURL("image/png");

console.log(signaturePad);
