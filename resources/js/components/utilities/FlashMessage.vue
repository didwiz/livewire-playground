<template>
  <Transition name="slide-fade" appear>
    <div v-if="message" class="fixed top-0 right-0 m-6 flash-message">
      <div
        :class="type"
        class="rounded-lg shadow-md p-6 pr-10"
        style="min-width: 240px"
      >
        <span
          class="opacity-75 cursor-pointer absolute top-0 right-0 py-2 px-3 hover:opacity-100 transition"
          aria-hidden="true"
          @click="clearMessage"
        >
          &times;
        </span>
        <div class="flex items-start">
          <svg
            class="fill-current mt-1 mr-2 block w-5 opacity-75"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              v-if="message.type === 'success'"
              style="transform: translateY(2px)"
              d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM6.7 9.29L9 11.6l4.3-4.3 1.4 1.42L9 14.4l-3.7-3.7 1.4-1.42z"
            />
            <path
              v-else
              d="m12 2a10 10 0 1 1 0 20 10 10 0 0 1 0-20zm0 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16zm0 9a1 1 0 0 1 -1-1v-4a1 1 0 0 1 2 0v4a1 1 0 0 1 -1 1zm0 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"
            />
          </svg>
          <div class="leading-loose" v-html="message.message" />
        </div>
      </div>
    </div>
  </Transition>
</template>

<script>
export default {
  data() {
    return {
      timer: null,
      message: null
    };
  },
  computed: {
    type() {
      if (this.message && this.message.type == "success") {
        return "success";
      }
      return "error";
    }
  },
  watch: {
    message() {
      if (this.message && this.timer) {
        clearTimeout(this.timer);
      }
      return (this.timer = setTimeout(this.clearMessage, 6000));
    }
  },
  created() {
    this.$event.$on("flash-message", message => {
      this.message = message;
    });
  },
  methods: {
    clearMessage() {
      // this.message = null;
    }
  }
};
</script>

<style lang="postcss" scoped>
.flash-message {
  z-index: 99900;
}

/* purgecss start ignore */
.flash-message .success {
  @apply bg-green-400 text-green-200;
}

.flash-message .error {
  @apply bg-red-400 text-red-200;
}

.slide-fade-enter-active,
.slide-fade-leave-active {
  transition: all 0.4s;
}
.slide-fade-enter,
.slide-fade-leave-to {
  transform: translateX(400px);
  opacity: 0;
}
/* purgecss end ignore */
</style>
