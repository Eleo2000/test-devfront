<template>
<div class="container--all-testimonials px-4 pt-4 pb-24 lg:px-24">
    <div class=" title font-body font-bold text-normal lg:text-[43px] pb-4">Ce qu'en pensent nos candidats</div>
    <div class="testimonialsa  flex card  ">
        <div class="content-left-testimonials lg:grid lg:gap-1 hidden lg:block">
            <div class="titre font-bold text-2xl">
                Excellent
            </div>
            <div class="icones-stars">
                <div class="testimonial-stars ">
                <span v-for="n in 5" :key="n" class="star">
                    <i class="fas fa-star"></i>
                </span>
                </div>
            </div>
            <div class="info text-sm">
                Based on <span class="font-bold underline"> 414 reviews </span>
            </div>
            <div class="logo-google flex justify-center">
                <svg height="30" viewBox="0 0 92 30" width="92" xmlns="http://www.w3.org/2000/svg"><path d="M38.9 15.51c0 4.26-3.32 7.39-7.4 7.39s-7.4-3.14-7.4-7.39c0-4.28 3.32-7.39 7.4-7.39s7.4 3.1 7.4 7.39zm-3.24 0c0-2.66-1.93-4.48-4.16-4.48-2.23 0-4.16 1.82-4.16 4.48 0 2.63 1.93 4.48 4.16 4.48 2.23 0 4.16-1.85 4.16-4.48z" fill="#EA4335"></path><path d="M11.96 22.98C5.63 22.98.31 17.83.31 11.5S5.63.02 11.96.02c3.5 0 5.99 1.37 7.87 3.16L17.62 5.4c-1.34-1.26-3.16-2.24-5.66-2.24-4.62 0-8.23 3.72-8.23 8.34 0 4.62 3.61 8.34 8.23 8.34 3 0 4.7-1.2 5.79-2.3.9-.9 1.49-2.2 1.74-4.17H12v-3.14h10.52c.11.56.17 1.23.17 1.96 0 2.35-.64 5.49-2.72 7.56-2.02 2.11-4.59 3.23-8.01 3.23z" fill="#4285F4"></path><path d="M54.9 15.51c0 4.26-3.32 7.39-7.4 7.39s-7.4-3.14-7.4-7.39c0-4.28 3.32-7.39 7.4-7.39s7.4 3.1 7.4 7.39zm-3.24 0c0-2.66-1.93-4.48-4.16-4.48-2.23 0-4.16 1.82-4.16 4.48 0 2.63 1.93 4.48 4.16 4.48 2.23 0 4.16-1.85 4.16-4.48z" fill="#FBBC05"></path><path d="M70 8.56v13.27c0 5.46-3.05 7.7-6.86 7.7-3.58 0-5.74-2.41-6.55-4.37l2.83-1.18c.5 1.2 1.74 2.63 3.72 2.63 2.44 0 3.78-1.51 3.78-4.34v-1.06h-.11c-.73.9-2.04 1.68-3.81 1.68-3.7 0-7-3.22-7-7.36 0-4.17 3.3-7.42 7-7.42 1.76 0 3.08.78 3.81 1.65h.11v-1.2H70zm-2.86 6.97c0-2.6-1.74-4.51-3.95-4.51-2.24 0-3.95 1.9-3.95 4.51 0 2.58 1.71 4.45 3.95 4.45 2.22.01 3.95-1.87 3.95-4.45z" fill="#4285F4"></path><path d="M75 1.17V22.9h-3V1.17h3z" fill="#34A853"></path><path d="M87.5 17.94l2.48 1.68c-.8 1.2-2.73 3.28-6.06 3.28-4.13 0-7.22-3.25-7.22-7.39 0-4.4 3.11-7.39 6.86-7.39 3.78 0 5.62 3.05 6.23 4.7l.31.85-9.71 4.08c.74 1.48 1.9 2.24 3.53 2.24s2.76-.82 3.58-2.05zm-7.63-2.66l6.5-2.74c-.36-.92-1.43-1.57-2.7-1.57-1.62 0-3.88 1.46-3.8 4.31z" fill="#EA4335"></path></svg>
            </div>
        </div>

        <div class="slider-container max-w-[100%] lg:max-w-[80%] max-w-full ">
          <button class="control prev" @click="prevSlide" :disabled="currentIndex === 0">
            <i class="fas fa-chevron-left"></i>
          </button>
          <div class="slider-wrapper">
            <div class="slider" :style="{ transform: sliderTransform }">
              <div
                class="slide"
                v-for="(testimonial, index) in items"
                :key="index"
              >
                <div class="card card-testimonials grid gap-2 lg:justify-center justify-start ">
                    <div class="debut grid grid-cols-[max-content_1fr] gap-4 ">
                        <div class="testimonial-image">
                            <img :src="testimonial.image" alt="Image" />
                        </div>
                        <div class="testimonials--info-person">
                            <p>{{testimonial.name }}</p>
                            <p class="testimonial-date text-sm font-light text-[10px] text-gray-500">{{ testimonial.date }}</p>
                        </div>
                    </div>
                    <div class="second-content h-[100%] grid grid-rows-[max-content_1fr]">
                        <div class=" top testimonial-details font-light ">
                            <div class="testimonial-stars">
                                <!-- étoiles pleines -->
                                <span v-for="n in testimonial.stars" :key="n" class="star">
                                <i class="fas fa-star"></i> <!-- Etoile pleine -->
                                </span>

                                <!-- étoiles vides -->
                                <span v-for="n in (5 - testimonial.stars)" :key="'empty' + n" class="star empty">
                                <i class="far fa-star"></i>
                                </span>
                            </div>
                            <div class="testimonial-info">{{ testimonial.info }}</div>
                        </div>

                        <div class="read-more-testimonials text-[13px] text-gray-500 grid font-thin">En savoir plus</div>

                    </div>


                </div>
              </div>
            </div>
          </div>
          <button class="control next" @click="nextSlide" :disabled="currentIndex >= maxIndex">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>

    </div>

</div>


</template>

<script>
export default {
  data() {
    return {
      items: [
      {
        name:"Lebron James",
        image: "https://via.placeholder.com/150",
        date: "4 décembre 2024",
        stars: 5,
        info: "Ce produit a totalement changé ma manière de travailler. Très pratique et intuitif!Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface.Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface.Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface."
      },
      {
        name:"Leo Roy",
        image: "https://via.placeholder.com/150",
        date: "15 novembre 2024",
        stars: 4,
        info: "Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface.Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface.Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface.Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface."
      },
      {
        name:"Katarina",
        image: "https://via.placeholder.com/150",
        date: "22 octobre 2024",
        stars: 5,
        info: "Un service client exceptionnel et un produit de qualité supérieure!Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface.Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface.Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface."
      },
      {
        name:"Kerane",
        image: "https://via.placeholder.com/150",
        date: "10 septembre 2024",
        stars: 3,
        info: "Le produit est correct, mais je m'attendais à un peu plus de fonctionnalités.Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface.Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface.Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface."
      },
      {
        name:"Miray",
        image: "https://via.placeholder.com/150",
        date: "30 août 2024",
        stars: 4,
        info: "Très satisfait dans l'ensemble. Quelques petites améliorations seraient bienvenues.Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface.Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface.Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface."
      },
      {
        name:"Ryo",
        image: "https://via.placeholder.com/150",
        date: "14 juillet 2024",
        stars: 5,
        info: "Excellente expérience, le produit a parfaitement répondu à mes attentes.Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface.Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface.Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface."
      },
      {
        name:"François",
        image: "https://via.placeholder.com/150",
        date: "5 juin 2024",
        stars: 2,
        info: "Produit assez décevant, il manque plusieurs fonctionnalités promises.Bon produit, mais il pourrait y avoir quelques améliorations sur l'interface.Bon produitBon produit, mais il pourrait y avoir quelques améliorations sur l'interface., mais il pourrait y avoir quelques améliorations sur l'interface."
      }

      ],
      currentIndex: 0,
      columns: 3,
    };
  },
  computed: {
    sliderTransform() {
      return `translateX(-${this.currentIndex * (100 / this.columns)}%)`;
    },
    maxIndex() {
      return Math.max(0, this.items.length - this.columns);
    },
  },
  methods: {
    updateColumns() {
      this.columns = window.innerWidth < 1024 ? 1 : 3;
      if (this.currentIndex > this.maxIndex) {
        this.currentIndex = this.maxIndex;
      }
    },
    prevSlide() {
      if (this.currentIndex > 0) {
        this.currentIndex--;
      }
    },
    nextSlide() {
      if (this.currentIndex < this.maxIndex) {
        this.currentIndex++;
      }
    },
  },
  mounted() {
    this.updateColumns();
    window.addEventListener("resize", this.updateColumns);
  },
  beforeUnmount() {
    window.removeEventListener("resize", this.updateColumns);
  },
};
</script>

<style scoped>
@import "./slider.scss";
</style>
