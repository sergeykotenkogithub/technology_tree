<template>
  <div class="tree__block">
    <PinchScrollZoom
      class="zoom"
      ref="zoomer"
      :width="1024"
      :height="600"
      @scaling="(e) => onEvent('scaling', e)"
      @startDrag="(e) => onEvent('startDrag', e)"
      @stopDrag="(e) => onEvent('stopDrag', e)"
      @dragging="(e) => onEvent('dragging', e)"
      :content-width="2048"
      :content-height="2048"
    >
      <TreeChartApp />
    </PinchScrollZoom>
    <button class="reset__btn" @click="reset">Reset</button>
  </div>
</template>

<script>
import TreeChartApp from "../components/Tree/TreeChartApp.vue";
import PinchScrollZoom, {
  PinchScrollZoomEmitData,
} from "@coddicat/vue-pinch-scroll-zoom";
// import BaseButton from "../components/Base/BaseButton.vue";
export default {
  name: "FrontendPage",
  components: { TreeChartApp, PinchScrollZoom /*, BaseButton */ },
  methods: {
    scalingHandler(e) {
      console.log(e);
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
    reset() {
      this.$refs.zoomer.setData({
        scale: 1,
        originX: 0,
        originY: 0,
        translateX: 0,
        translateY: 0,
      });
    },
  },
};
</script>

<style lang="scss" scoped>
.tree__block {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.zoom {
  border-radius: 5px;
  border: none;
  background: #e6e7ee;
  box-shadow: 5px 5px 8px #c4c4c4, -5px -5px 8px #ffffff;
  transition: background 0.3s ease, box-shadow 0.3s ease;
  margin: 0 auto;
  margin-top: 50px;
}
.reset__btn {
  margin-top: 30px;
  border-radius: 5px;
  border: none;
  background: #e6e7ee;
  box-shadow: 5px 5px 8px #c4c4c4, -5px -5px 8px #ffffff;
  transition: background 0.3s ease, box-shadow 0.3s ease;
  //   padding: 14px 50px;
  min-width: 150px;
  min-height: 50px;
  margin-top: 20px;
  cursor: pointer;
  font-size: 18px;
  outline: none;

  &:hover {
    box-shadow: inset 2px 2px 5px #b8b9be, inset -3px -3px 7px #fff;
  }
}
</style>
