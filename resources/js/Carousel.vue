<template>

<div class="container">
  <transition-group name="fade" tag="div">
    <div
     v-for="currentValue in [currentIndex]"
     v-bind:key="currentValue"
     class="img-container"
     v-bind:style="{ backgroundImage: `url('${currentImg}')` }">
    </div>
  </transition-group>
</div>
</template>

<script>
export default {
  name: "Slider",
  data() {
    return {
      timer: null,
      currentIndex: 0,
      images: [
        require("../assets/images/artem-bali-682651-unsplash.jpg"),
        require("../assets/images/brooke-lark-261793-unsplash.jpg"),
        require("../assets/images/erik-dungan-1079095-unsplash.jpg"),
        require("../assets/images/ivan-timov-663072-unsplash.jpg")
      ]
    };
  },
  methods: {
    next() {
      this.currentIndex += 1;
      console.log(
        this.currentIndex,
        Math.abs(this.currentIndex) % this.images.length
      );
    },
    prev() {
      this.currentIndex -= 1;
    },
    startSlide() {
      this.timer = setInterval(this.next, 4000);
    }
  },
  computed: {
    currentImg: function() {
      return this.images[Math.abs(this.currentIndex) % this.images.length];
    }
  },
  mounted() {
    this.startSlide();
  }
};
</script>