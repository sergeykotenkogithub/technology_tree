<template>
  <div class="accordion__card">
    <div
      @click="toggleAccordion()"
      class="accordion__btn"
      :expanded="isOpen"
      :controls="`collapse${_uid}`"
    >
      <slot class="accordion__title" name="title" />
    </div>
    <div v-show="isOpen" :id="`collapse${_uid}`" class="accordion__body">
      <slot class="accordion__text" name="content" />
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      isOpen: false,
    };
  },

  methods: {
    toggleAccordion() {
      this.isOpen = !this.isOpen;
    },
  },
};
</script>

<style scoped lang="scss">
.accordion > .accordion__card:first-of-type {
  border-radius: 10px 10px 0 0;
}
.accordion > .accordion__card:not(:first-of-type):not(:last-of-type) {
  border-bottom: 0;
  border-radius: 0;
}
.accordion > .accordion__card:last-of-type {
  border-radius: 0 0 10px 10px;
}
.accordion > .accordion__card {
  overflow: hidden;
}
.accordion__card {
  width: 500px;
  margin: 0 auto;
  background: #e6e7ee;
  transition: background 0.3s ease, box-shadow 0.3s ease;
  position: relative;
  border-bottom: 1px solid #d1d9e6;
  display: flex;
  flex-direction: column;

  &:hover {
    cursor: pointer;
  }

  .accordion__btn {
    display: flex;
    justify-content: space-between;
    padding: 24px;

    &[aria-expanded="isOpen"] > .icon {
      transform: rotateZ(45deg);
    }

    .accordion__title {
      padding: 24px;
      display: flex;
      justify-content: space-between;
    }
  }

  .accordion__body {
    padding: 0px 24px 24px;
    text-align: left;

    .accordion__text {
      line-height: 1.6;
    }
  }
}
</style>