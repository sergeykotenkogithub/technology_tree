<template>
  <MainText
    msg="С помощью нашего сайта вы пройдёте пути от новичка до профессионала. Здесь будет находится вся доступная информаци которая поможет вам стать фронтенд разработчиком."
  />
  <div class="accordion">
    <MyAccordion>
      <template v-slot:title>
        <span class="accordion__title">Accordion 1</span>
        <span class="icon"><fa icon="plus" /></span>
      </template>
      <template v-slot:content>
        <p>
          <b>Lorem</b>, ipsum dolor sit amet consectetur adipisicing elit. Quia,
          porro. Non a excepturi, voluptatibus ipsam magnam, eligendi,
          accusantium ipsa quae quis praesentium voluptate saepe ullam sint ea
          itaque consectetur impedit?
        </p>
      </template>
    </MyAccordion>
    <MyAccordion>
      <template v-slot:title>
        <span class="accordion__title">Accordion 2</span>
        <span class="icon"><fa icon="plus" /></span>
      </template>
      <template v-slot:content>
        <p>
          <b>Lorem</b>, ipsum dolor sit amet consectetur adipisicing elit. Quia,
          porro. Non a excepturi, voluptatibus ipsam magnam, eligendi,
          accusantium ipsa quae quis praesentium voluptate saepe ullam sint ea
          itaque consectetur impedit?
        </p>
      </template>
    </MyAccordion>
  </div>
  <MyCard />
  <MyCard />
  <MyCard />
</template>

<script>
// @ is an alias to /src
import MainText from "@/components/MainText.vue";
import MyCard from "../components/UI/MyCard.vue";
import MyAccordion from "@/components/UI/MyAccordion.vue";
import { ref } from "vue";

export default {
  name: "Home",
  components: {
    MainText,
    MyCard,
    MyAccordion,
  },
  setup() {
    const active_panel = ref([0]);
    return {
      active_panel,
    };
  },
};
</script>
<style scoped lang="scss">
.accordion {
  box-shadow: 6px 6px 12px #b8b9be, -6px -6px 12px #fff;
  width: 500px;
  margin: 0 auto;
  margin-bottom: 30px;
  border-radius: 10px;
}
</style>
