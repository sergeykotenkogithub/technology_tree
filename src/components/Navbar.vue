<template>
  <div class="navbar">
    <MyButton @click="$router.push('/')">LOGO</MyButton>
    <div class="navbar__btns">
      <MyButton style="margin-left: 20px" @click="$router.push('/tree')"
        >Дерево</MyButton
      >
      <MyButton style="margin-left: 20px" @click="$router.push('/about')"
        >О сайте</MyButton
      >
      <MyButton style="margin-left: 20px" @click="$router.push('/frontend')"
        >Фронт</MyButton
      >
      <MyButton style="margin-left: 20px" @click="$router.push('/backend')"
        >Бэк</MyButton
      >
    </div>
  </div>
</template>

<script>
import MyButton from "./UI/MyButton";

export default {
  name: "Navbar",
  components: {
    MyButton,
  },
};
</script>

<style scoped lang="scss">
.navbar {
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 5px;
  border: none;
  background: rgba(230, 230, 230, 1);
  box-shadow: 5px 5px 8px #c4c4c4, -5px -5px 8px #ffffff;
  transition: background 0.3s ease, box-shadow 0.3s ease;
  // .nav__link {
  //   border-radius: 5px;
  //   border: none;
  //   background: rgba(230, 230, 230, 1);
  //   box-shadow: 5px 5px 8px #c4c4c4, -5px -5px 8px #ffffff;
  //   transition: background 0.3s ease, box-shadow 0.3s ease;
  //   padding: 10px;
  //   margin: 5px;
  //   .nav__menu {
  //     border-radius: 5px;
  //     border: none;
  //     background: rgba(230, 230, 230, 1);
  //     box-shadow: 5px 5px 8px #c4c4c4, -5px -5px 8px #ffffff;
  //     transition: background 0.3s ease, box-shadow 0.3s ease;
  //   }
  //   &:hover {
  //     box-shadow: none;
  //   }
  // }
}
</style>