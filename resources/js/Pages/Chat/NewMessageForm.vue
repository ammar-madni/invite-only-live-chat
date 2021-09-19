<template>
  <form class="py-8 w-full flex space-x-4" @submit.prevent="handleSubmit()">
    <textarea
      class="
        flex-grow
        resize-none
        leading-normal
        rounded
        p-4
        border-2 border-gray-200
      "
      rows="1"
      placeholder="Say something..."
      v-model="form.message"
    />
    <button
      class="p-4 bg-blue-500 text-white text-xl rounded disabled:opacity-50"
      type="submit"
      :disabled="form.processing"
    >
      Send
    </button>
  </form>
  <p class="text-red-500" v-if="form.errors.message">
    {{ form.errors.message }}
  </p>
</template>

<script>
import { useForm } from "@inertiajs/inertia-vue3";

export default {
  props: ["chat"],

  setup() {
    const form = useForm({
      message: null,
    });

    return { form };
  },

  methods: {
    handleSubmit() {
      this.form.post(route("messages", this.chat.id));
      this.form.reset();
    },
  },
};
</script>
