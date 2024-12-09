<template>
    <div>
      <hero></hero>
      <slider></slider>
      <Faq></Faq>
      <Filter></Filter>
    </div>
</template>

  <script>
  import Hero from './hero/hero.vue'
  import Slider from './slider/slider.vue'
  import Faq from './faq.vue'
  import Filter from './filter/filter.vue';

  export default {
    name: 'home',
    components: {
      Hero,
      Slider,
      Faq,
      Filter
    }
  };

  </script>

  <style>
  @import './home.scss';
  </style>
