<template>
    <div class="hero--container grid gap-16 grid-rows-[1fr_1fr] lg:grid-rows-none lg:gap-0 lg:grid-cols-[1fr_0.4fr] lg:p-16 pb-0 lg:pb-24 relative ">
      <div class="left-content grid justify-items-center lg:justify-items-start">
        <div class="logo w-[100%] flex justify-center lg:justify-start">
            <img src="../../../assets/images/logo.png" alt="logo">
        </div>

        <div class="contenta-hero pt-8 ">
            <div class=" title font-body font-bold text-[26px] lg:text-[43px]">
                Test psychotechnique : Récupérez <span class="barre"> votre permis </span>
            </div>
            <div class="texta-sous-titre font-title text-gray-800 text-[17px] lg:text-[34px]">
                Une démarche simple & rapide
            </div>
            <div class="list--check gap-3 grid mt-8 ml-4">
                <div class="item--checked">
                    <i class="fas fa-check check-icon"></i>
                    <div class="value">
                        97.8% de réussite à l'éxamen psychotechnique
                    </div>
                </div>
                <div class="item--checked">
                    <i class="fas fa-check check-icon"></i>
                    <div class="value">
                        97.8% de réussite à l'éxamen psychotechnique
                    </div>
                </div>
                <div class="item--checked">
                    <i class="fas fa-check check-icon"></i>
                    <div class="value">
                        97.8% de réussite à l'éxamen psychotechnique
                    </div>
                </div>

            </div>

            <div class="btn-action text-title font-bold mt-8 w-max">
                <button> Je réserve mon test psychotechnique  <i class="fas fa-chevron-right"></i></button>
                <div class="info--reserve font-thin text-center mt-2 "> <i class="fas fa-hand-point-up"></i> Entrainement Gratuit inclus</div>
                <div class="flex gap-6 scores justify-center mt-8 align-items-center">
                    <div class="icones--google grid justify-items-center">
                        <img src="../../../assets/images/logo-google-g.png" class="w-[24px]" alt="logo">
                        <div class="testimonial-stars ">
                            <span v-for="n in 5" :key="n" class="star">
                                <i class="fas fa-star"></i>
                            </span>
                            <p class=" font-normal mx-3 text-[9px]"> <strong> 4.7 </strong>  | <strong>8085</strong> avis</p>
                        </div>
                    </div>
                    <div class="truescore">
                        <img src="//images-static.trustpilot.com/api/logos/light-bg/logo.svg" width="63" height="20" alt="Trustpilot Logo" class="mx-3 mb-1">
                        <img src="//images-static.trustpilot.com/api/stars/4.5/star.svg" width="107" height="20" alt="Trustpilot Stars" class="mx-3">
                        <p class=" mx-3 text-[9px]">TrueScore <strong> 4.4 </strong>  | <strong>8376</strong> avis</p>
                    </div>
                </div>
            </div>



        </div>
      </div>
      <div class="right-content  grid items-center relative pl-0 lg:pl-32">
        <div class="back absolute  w-[100%] lg:w-[120%] max-w-[600px] min-w-[520px] lg:max-w-[1000px] h-full grid translate-y-[50px] translate-x-[10px] lg:translate-y-[-140px] lg:translate-x-[100px]  justify-self-center self-center ">
            <svg  viewBox="0 0 458 367" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M347.5 9.50015C410.7 23.5001 442.668 101.333 453.001 136.5C464.001 178.333 465.857 305.07 319.501 346.5C247.64 366.842 154.499 380.5 78.4988 339.5C25.4993 305 -21 225.5 11.5008 136.5C33.7054 75.6953 94.3 42.4584 144.5 23C222.765 -7.33693 299.371 -1.16142 347.5 9.50015Z" fill="#BF2A6B"/>
            </svg>
        </div>
        <div class="youtube-container relative w-[100%] lg:w-[540px] translate-y-[-20px]" >
            <div class="youtube-video">
                <iframe class=" w-[400px] h-[280px]  lg:w-[520px] lg:h-[320px]"
                    src="https://www.youtube.com/embed/zmjPmzJFEFA"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                ></iframe>
            </div>
        </div>
      </div>
    </div>
</template>

<script>
  export default {
    name: 'Hero',
  };
</script>

<style scoped>
  @import './hero.scss';
</style>
