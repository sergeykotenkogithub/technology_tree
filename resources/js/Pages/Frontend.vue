<template>
  <div>
    <!-- <user-layout> -->
    <PinchScrollZoom
      class="zoom"
      ref="zoomer"
      :width="1000"
      :height="600"
      @scaling="(e) => onEvent('scaling', e)"
      @startDrag="(e) => onEvent('startDrag', e)"
      @stopDrag="(e) => onEvent('stopDrag', e)"
      @dragging="(e) => onEvent('dragging', e)"
      :content-width="500"
      :content-height="500"
    >
      <tree-chart-app />
    </PinchScrollZoom>
    <BaseButton class="reset__btn" @click="reset">Reset</BaseButton>
  </div>
  <!-- </user-layout> -->
</template>

<script>
import TreeChartApp from "../components/Tree/TreeChartApp.vue";
import PinchScrollZoom from "@coddicat/vue-pinch-scroll-zoom";
import BaseButton from "../components/Base/BaseButton.vue";
// import UserLayout from "../Layouts/UserLayout.vue";
export default {
  name: "FrontendPage",
  //   components: { UserLayout },
  components: { TreeChartApp, PinchScrollZoom, BaseButton },
  methods: {
    scalingHandler(e) {
      console.log(e);
    },
    reset() {
      this.$refs.zoomer.setData({
        scale: 1,
        originX: 0,
        originY: 0,
        translateX: 0,
        translateY: 0,
      });
    },
    onEvent(name, e) {
      this.eventName = name;
      this.eventData = e;
      this.scale = e.scale;
      this.originX = e.originX;
      this.originY = e.originY;
      this.translateX = e.translateX;
      this.translateY = e.translateY;
    },
  },
};
</script>

<style lang="scss" scoped>
.zoom {
  border-radius: 5px;
  border: none;
  background: #e6e7ee;
  box-shadow: 5px 5px 8px #c4c4c4, -5px -5px 8px #ffffff;
  transition: background 0.3s ease, box-shadow 0.3s ease;
  margin: 0 auto;
}
.reset__btn {
  width: 120px;
  height: 40px;
  margin-top: 30px;
}
</style>
