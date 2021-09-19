<template>
  <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 w-full">
    <p class="font-bold text-lg text-gray-800">{{ chat.name }}</p>
    <Link class="text-sm text-blue-500" :href="route('chat', chat.id)"
      >Join Chat</Link
    >
  </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
  props: ["chat"],

  components: {
    Link,
  },
};
</script>