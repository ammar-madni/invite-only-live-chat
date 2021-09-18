<template>
  <form class="py-8 w-full flex space-x-4" @submit.prevent="form.post(route('messages', { id: chat.id }))">
    <textarea class="flex-grow resize-none leading-normal rounded p-4 border-2 border-gray-200" rows="1" type="text" v-model="form.message" />
    <div v-if="form.errors.message">{{ form.errors.message }}</div>
    <button class="p-4 bg-blue-500 text-white text-xl rounded" type="submit" :disabled="form.processing">Send</button>
  </form>
</template>

<script>
import { useForm } from "@inertiajs/inertia-vue3";

export default {
  props: ['chat'],

  setup() {
    const form = useForm({
      message: null,
    });

    return { form };
  },
};
</script>