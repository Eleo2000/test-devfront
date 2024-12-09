<template>
    <div class="test_psycho">

        <div class="test_psycho__title">
            <span class="text"> Préparez votre test psychotechnique </span>
        </div>

        <div class="test_psycho__qr">

            <div :class="{ 'open': rq.open }" @click="openQuestion(index)" class="test_psycho__qr_item"
                v-for="(rq, index) in faq_question_responses" :key="rq.q">

                <div class="question_item ">
                    <p class="">{{ rq.q }}</p>
                    <span class="icone">
                        <i :class="rq.open ? 'fas fa-chevron-up' : 'fas fa-plus'"></i>
                    </span>
                </div>
                <Transition>
                    <div v-if="rq.open" class="response_item">
                        {{ rq.r }}
                    </div>
                </Transition>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue'

const faq_question_responses = ref([
    {
        q: "Combien de temps dure le test psychotechnique ?",
        open: false,
        r: "Un test psychotechnique est une évaluation des aptitudes cognitives et comportementales, souvent utilisée pour valider ou reprendre un permis de conduire."
    },
    {
        q: "Quels sont les documents à apporter le jour du passage du test psychotechnique pour permis de conduire ?",
        r: "Un test psychotechnique est une évaluation des aptitudes cognitives et comportementales, souvent utilisée pour valider ou reprendre un permis de conduire.",
        open: false,
    },
    {
        q: "J'ai perdu ma notification de retrait de permis de conduire, est-elle obligatoire le jour de l'examen ?",
        open: false,
        r: "Non, pas obligatoire"
    },
    {
        q: "Je suis handicapé, puis-je passer les tests psychotechniques ?",
        open: false,
        r: "Non, mais ça dépend."
    },

])

const openQuestion = (index) => {
    for (let i = 0; i < faq_question_responses.value.length; i++) {
        if (i != index) {
            faq_question_responses.value[i].open = false
        }
    }

    faq_question_responses.value[index].open = !faq_question_responses.value[index].open
}

</script>

<style scoped>
.test_psycho {
    width: 1000px;
    margin: auto;
    /* border: 1px solid rgb(100,100,100); */
    background-color: white;
    margin-top: 50px;
    padding: 50px;
    box-shadow: 0px 3px 6px #00000029;
    border-radius: 24px;
}

.test_psycho .test_psycho__title {
    color: #36578A;
    font-weight: bold;
    font-size: 30px;
    margin-bottom: 50px;
}

.test_psycho .test_psycho__qr {
    font-size: 20px;
    letter-spacing: 0px;
    color: #585858;
}


.test_psycho__qr .test_psycho__qr_item {
    padding-left: 10px;
    padding-right: 10px;
    cursor: pointer;
    /* border-radius: 10px; */
}

.test_psycho__qr .test_psycho__qr_item .question_item {
    display: flex;
    align-items: center;
}

.test_psycho__qr .test_psycho__qr_item:hover {
    background-color: rgb(250, 249, 249);
}

.test_psycho__qr .test_psycho__qr_item.open {
    background-color: whitesmoke;
    border: 1px solid rgb(20, 20, 20);
    border-bottom: 1px solid rgb(20, 20, 20) !important;
}

.test_psycho__qr .test_psycho__qr_item.open p {
    font-weight: bold;
    border-bottom: 2px solid rgb(20, 20, 20);
}

.test_psycho__qr .test_psycho__qr_item:not(:last-child) {
    border-bottom: 2px solid whitesmoke;
}

.test_psycho__qr .test_psycho__qr_item .question_item p {
    flex-grow: 1;
}

.test_psycho__qr .test_psycho__qr_item .question_item span {
    padding: 5px;
    margin: 5px;
}

.test_psycho__qr .test_psycho__qr_item .response_item {
    padding: 5px;
    font-size: 20px;
}



/*Vue transition */

.v-enter-active {
    transition: opacity 0.5s ease;
}

/* .v-leave-active{
    transition: opacity 0.1s ease;
} */

.v-enter-from,
.v-leave-to {
    opacity: 0;
}




/* gestion mobile */
@media (max-width: 1000px) {
    .test_psycho {
        width: 90%;
        margin: 0px;
    }
}
</style>
