<template>
  <div class="w-full">
    <form class="py-4 w-full flex space-x-4" @submit.prevent="handleSubmit()">
      <input
        class="
          flex-grow
          resize-none
          leading-normal
          rounded
          p-4
          border-2 border-gray-200
        "
        placeholder="Enter chat name..."
        type="text"
        v-model="form.chatName"
      />
      <button
        class="p-4 bg-blue-500 text-white text-xl rounded disabled:opacity-50"
        type="submit"
        :disabled="form.processing"
      >
        Create Chat
      </button>
    </form>
    <p class="text-red-500" v-if="form.errors.chatName">
      {{ form.errors.chatName }}
    </p>
  </div>
</template>

<script>
import { useForm } from "@inertiajs/inertia-vue3";

export default {
  setup() {
    const form = useForm({
      chatName: null,
    });

    return { form };
  },

  methods: {
    handleSubmit() {
      this.form.post(route("chats"));
      this.form.reset();
    },
  },
};
</script>
