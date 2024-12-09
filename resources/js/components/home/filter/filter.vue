<template>
    <div class="filter-content mx-24 my-32">
        <div class="titre--filter title font-Nunito font-bold text-normal lg:text-[43px]">
            Réservez votre test proche de chez vous
        </div>
        <div class="mini-texte font-body text-[35px]" >
            En seulement 3 étapes
        </div>

        <div class="filter--input flex items-center gap-4 ">
            <div class="logo-filter"><i class=" text-[24px] fa-solid fa-location-dot"></i></div>
            <div class="input w-[100%] "><Input class="w-[100%] p-2" placeholder="Saisir une ville ou un code postal"></Input></div>
            <div class="logo--send"><i class=" text-[24px] fa-regular fa-paper-plane"></i></div>
            <div class="btn--search"><button>Rechercher</button></div>
        </div>

        <div class="filter--more mt-8 mb-8 flex gap-32">
            <div class="filter--months filter--m ">
                <select id="months" class="w-max p-2   text-gray-700">
                    <option value="">Filtrer par mois</option>
                    <option v-for="(month, index) in months" :key="index" :value="month">{{ month }}</option>
                </select>
            </div>

            <div class="filter--days filter--m">
                <select id="days" class="w-max p-2  text-gray-700">
                    <option value="">Filtrer par jour</option>
                    <option v-for="(day, index) in days" :key="index" :value="day">{{ day }}</option>
                </select>
            </div>

            <div class="filter--half-days filter--m">
                <select id="half-days" class="w-max p-2   text-gray-700">
                    <option value="">Filtrer par demi-journée</option>
                    <option v-for="(halfDay, index) in halfDays" :key="index" :value="halfDay">{{ halfDay }}</option>
                </select>
            </div>

        </div>

    </div>
</template>

<script >
export default {
  data() {
    return {
      months: [
        "Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
        "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"
      ],
      days: ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"],
      halfDays: ["Matin", "Après-midi"]
    };
  }
};
</script>

<style scoped>
  @import './filter.scss';
</style>
