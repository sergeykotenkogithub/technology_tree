<template>
  <button class="navbar__btn">
    <slot></slot>
  </button>
</template>

<script>
export default {
  name: "MyButton",
};
</script>

<style scoped lang="scss">
.navbar__btn {
  padding: 10px 15px;
  border-radius: 5px;
  border: none;
  background: rgba(230, 230, 230, 1);
  box-shadow: 5px 5px 8px #c4c4c4, -5px -5px 8px #ffffff;
  transition: background 0.3s ease, box-shadow 0.3s ease;
  padding: 10px;
  margin: 5px;
  cursor: pointer;

  &:hover {
    box-shadow: inset 2px 2px 5px #b8b9be, inset -3px -3px 7px #fff;
  }
}
</style>