import './bootstrap';


import { createApp } from 'vue';


import Welcome from "./Welcome.vue";
import Header from "./Header.vue";
import Carousel from "./Carousel.vue";



createApp(Welcome).mount("#app");





createApp(Header).mount("#apptwo");

createApp(Carousel).mount("#appthree");