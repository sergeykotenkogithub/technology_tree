<template>
  <div class="card">
    <div class="card__container">
      <div class="card__img">
        <img src="#" alt="photo" />
      </div>
      <div class="card__body">
        <h2 class="card__name">{{ name }}</h2>
        <h4 class="card__occupation">{{ occupation }}</h4>
        <p class="card__text">{{ text }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "MyCard",
  data() {
    return {
      cards: [
        {
          name: "Сергей Котенко",
          occupation: "Fullstack Developer",
          text: "Lorem ipsum dolor sit amet consectetur adipisicing elit. In nam nulla minus doloribus dolorum voluptate itaque, facilis ratione explicabo aliquam.",
        },
        {
          name: "Вилен Беженару",
          occupation: "Frontend Developer",
          text: "Lorem ipsum dolor sit amet consectetur adipisicing elit. In nam nulla minus doloribus dolorum voluptate itaque, facilis ratione explicabo aliquam.",
        },
        {
          name: "Андрей Топилин",
          occupation: "Frontend Developer",
          text: "Lorem ipsum dolor sit amet consectetur adipisicing elit. In nam nulla minus doloribus dolorum voluptate itaque, facilis ratione explicabo aliquam.",
        },
      ],
    };
  },
};
</script>

<style scoped lang="scss">
.card {
  border-radius: 5px;
  border: none;
  background: #e6e7ee;
  box-shadow: 5px 5px 8px #c4c4c4, -5px -5px 8px #ffffff;
  transition: background 0.3s ease, box-shadow 0.3s ease;
}
</style>