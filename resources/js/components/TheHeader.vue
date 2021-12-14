<template>
  <header class="header-global">
    <nav class="navbar">
      <div class="navbar__left">
        <router-link :to="{ name: 'Home' }">
          <BaseButton class="navbar__logo">
            <!-- <img
            src="/assets/img/ttree/ttree_logo.jpg"
            alt=""
            class="img-fluid"
          /> -->
          </BaseButton>
        </router-link>
      </div>
      <div class="navbar__links">
        <router-link :to="{ name: 'About' }">
          <BaseButton>About</BaseButton></router-link
        >
        <!-- <router-link :to="{ name: 'Tree' }"
          ><BaseButton>Дерево</BaseButton></router-link
        > -->
        <router-link :to="{ name: 'Frontend' }"
          ><BaseButton>Frontend</BaseButton></router-link
        >
        <router-link :to="{ name: 'Backend' }"
          ><BaseButton>Backend</BaseButton></router-link
        >
        <div>
          <BaseButton v-if="!currentUser" class="auth__btn">
            <router-link to="/register">
              <i class="fas fa-user-plus"></i>
              <!-- Регистрация -->
            </router-link>
          </BaseButton>
          <BaseButton class="auth__btn">
            <router-link to="/login">
              <i class="fas fa-sign-in-alt"></i>
              <!-- Войти -->
            </router-link>
          </BaseButton>
        </div>
        <BaseButton v-if="currentUser">
          <router-link to="/profile">
            <i class="fas fa-user"></i>
            {{ currentUser.username }}
          </router-link>
          <a class="nav-link" href @click.prevent="logOut">
            <i class="fas fa-sign-out-alt"></i> Выйти
          </a>
        </BaseButton>
      </div>
    </nav>
  </header>
</template>

<script>
import BaseButton from "./Base/BaseButton.vue";

export default {
  name: "TheHeader",
  components: { BaseButton },
  computed: {
    currentUser() {
      return this.$store.state.auth.user;
    },
    showAdminBoard() {
      if (this.currentUser && this.currentUser.roles) {
        return this.currentUser.roles.includes("ROLE_ADMIN");
      }

      return false;
    },
    showModeratorBoard() {
      if (this.currentUser && this.currentUser.roles) {
        return this.currentUser.roles.includes("ROLE_MODERATOR");
      }

      return false;
    },
  },
  methods: {
    logOut() {
      this.$store.dispatch("auth/logout");
      this.$router.push("/login");
    },
  },
};
</script>

<style scoped lang="scss">
.navbar {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-radius: 5px;
  border: none;
  min-height: 200px;
  box-shadow: 5px 5px 8px #c4c4c4, -5px -5px 8px #ffffff;
  transition: background 0.3s ease, box-shadow 0.3s ease;
}

.navbar__logo {
  border-radius: 5px;
  border: none;
  box-shadow: 5px 5px 8px #c4c4c4, -5px -5px 8px #ffffff;
  transition: background 0.3s ease, box-shadow 0.3s ease;
  background: url(/assets/img/ttree/ttree_logo.jpg) no-repeat 43% 38%;
  background-size: 150%;
  width: 150px;
  height: 150px;
  margin: 20px 0;
}

.navbar__links {
  padding-bottom: 20px;
}

.navbar__left,
.navbar__links {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
  flex-wrap: wrap;
}

.auth__btn {
  min-width: 50px;
}

// .img-fluid {
//   width: 200px;
//   height: 200px;
// }
</style>
