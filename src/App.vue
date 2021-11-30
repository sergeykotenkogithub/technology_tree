<template>
  <Navbar />
  <router-view></router-view>
</template>

<script>
import Navbar from "@/components/Navbar.vue";

export default {
  components: {
    Navbar,
  },
};
</script>

<style lang="scss">
*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  font-size: 16px;
  scroll-behavior: smooth;
}

body {
  min-height: 100%;
  background: #e8e8e8;
  color: #44476a;
}

body.open {
  overflow: hidden;
}

#app {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

h1,
h2,
h3,
h4,
h5,
h6,
strong,
.header__link {
  font-family: "Space Mono", monospace;
  font-weight: 500;
}

p,
li,
span,
label,
input,
textarea {
  color: #242424;
  font-family: "Roboto Mono", monospace;
  border: none;
  outline: none;
}

a {
  text-decoration: none;
  color: inherit;
  font-family: "Roboto Mono", monospace;
}

ul {
  list-style: none;
}

select {
  outline: none;
  border: none;
  appearance: none;
  background: inherit;
  cursor: pointer;
  font-size: 12px;
  align-self: flex-start;
  color: inherit;
  margin-left: 20px;
}

select:hover {
  color: #ccc;
}

table {
  border-collapse: collapse;
}

#nav {
  padding: 30px;

  a {
    font-weight: bold;
    color: #dd3636;

    &:hover {
      color: #ccc;
    }

    &.router-link-exact-active {
      color: #000142;
    }
  }
}
</style>
